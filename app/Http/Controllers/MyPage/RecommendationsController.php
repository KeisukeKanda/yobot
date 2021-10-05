<?php

namespace App\Http\Controllers\MyPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Item;
use App\Result;
use Validator;


class RecommendationsController extends Controller
{
    //
    // public function showRecommendations()
    //  {
    //      $items = Item::orderBy('created_at', 'asc')->paginate(3);
    //      return view('mypage.mypage', ['items' => $items])->with('user', Auth::user());
    //  }

    //ログインした人の生年月日と性別からその年に最適なrecommendationを表示
    public function showRecommendations(Request $request) {

        if ((Auth::user()->sex) == null) {
            return view('mypage.profile_edit_form');
        } elseif ((Auth::user()->birthday) == null) {
            return view('mypage.profile_edit_form');
        }


        //誕生日をusersテーブルから取得
        $birthday = Auth::user()->birthday;

        //誕生日をYmd型に変換
        $bd = str_replace('-', '', $birthday);

        //今日の年月日
        $now = date("Ymd");

        //生年月日と今日の日付から今年度の3月31日時点での年齢を算出する関数
        function getAge($birthDate, $nowDate) {
            //今の年齢
            $age = substr($nowDate, 0, 4) - substr($birthDate, 0, 4);
            //今年の誕生日
            $thisYearBirthday = substr($nowDate, 0, 4).substr($birthDate, 4, 2).substr($birthDate, 6, 2);
            //今年の4月1日
            $thisYearApr1st = substr($nowDate, 0, 4)."04"."01";

            //今年の誕生日が今年の4月1日より大きい場合＝4月から12月生まれ
            if ($thisYearBirthday >= $thisYearApr1st) {
                //今日が今年の4月1日より大きい場合、ageを返す
                //今日が今年の4月1日より小さい場合、age+1を返す
                return $age + ($nowDate >= $thisYearApr1st ? 0 : 1);
            } elseif ($thisYearBirthday < $thisYearApr1st) { //今年の誕生日が今年の4月1日より小さい＝1月から3月生まれ
                //今日が今年の4月1日より大きい場合、age+1を返す
                //今日が今年の4月1日より小さい場合、ageを返す
                return $age + ($nowDate >= $thisYearApr1st ? 1 : 0);
            }
        }


        //[今年度」を取得
        function getFiscalYear() {
            $now = date("Ymd");
            $now_year = date("Y"); //今年=YYYY年
            $thisApr1st = $now_year . "04" . "01";
            $thisDes31 = $now_year . "12" . "31";
            $thisMar31 = $now_year . "03" . "31";

            //今日が4月1日から12月31日までであれば、今年度は今年
            //今日が1月1日から3月31日までであれば、今年度は今年-1年
            if ($now >= $thisApr1st && $now <= $thisDes31) {
                return $now_year;
            } elseif ($now <= $thisMar31) {
                return $now_year - 1;
            }
        }

        //今年度を$thisFiscalYearという変数に格納
        $thisFiscalYear = getFiscalYear();
        //昨年度を$lastFscalYearという変数に格納
        $lastFiscalYear = $thisFiscalYear - 1;
        $last5YearsFiscalYear = $thisFiscalYear - 5;


        // $now_year = date("Y"); //今年=YYYY年
        $age = getAge($bd, $now);
        $sex = Auth::user()->sex;


        //resultsテーブルを参照して、実施記録があれば、表示しないようにする
        //resultsテーブルの中で、自分のuser_idのものの中で、done_dateが今年度であるもののitem_idを取得

        $excluded_id_1year = Result::where("user_id", Auth::user()->id)->where('item_id', '>=', '1')->whereNotIn('item_id',[2,3])->whereYear('done_date', '>=', $thisFiscalYear)->pluck('item_id');
        $excluded_id_2year = Result::where("user_id", Auth::user()->id)->where(function($query){
                                                                        $query->orWhere('item_id', '2')
                                                                            ->orWhere('item_id', '3');
                                                                        })->whereYear('done_date', '>=', $lastFiscalYear)
                                                                        ->pluck('item_id');
        $excluded_id_5year = Result::where("user_id", Auth::user()->id)->whereYear('done_date', '>=', $last5YearsFiscalYear)->where('item_id','7')->pluck('item_id');


        if ($age >= 18 && $age < 20 && $sex === "1") {
            $items = Item::find([1, 8])->whereNotIn('id',  $excluded_id_1year);
            return view('mypage.recommendations', ['items' => $items])->with('user', Auth::user());
        } elseif ($age >= 18 && $age < 20 && $sex === "2") {
            $items = Item::find([1, 8])->whereNotIn('id',  $excluded_id_1year);
            return view('mypage.recommendations', ['items' => $items])->with('user', Auth::user());
        } elseif ($age >= 20 && $age < 40 && $sex === "1") {
            $items = Item::find([1, 8])->whereNotIn('id',  $excluded_id_1year);
            return view('mypage.recommendations', ['items' => $items])->with('user', Auth::user());
        } elseif ($age >= 20 && $age < 40  && $sex === "2") {
            $items = Item::find([1, 2, 8])->whereNotIn('id',  $excluded_id_1year)->whereNotIn('id', $excluded_id_2year);
            return view('mypage.recommendations', ['items' => $items])->with('user', Auth::user());
        } elseif ($age >= 40 && $age < 50 && $sex === "1") {
            $items = Item::find([1, 4, 8])->whereNotIn('id',  $excluded_id_1year);
            return view('mypage.recommendations', ['items' => $items])->with('user', Auth::user());
        } elseif ($age >= 40 && $age < 50 && $sex === "2") {
            $items = Item::find([1, 2, 3, 4, 8])->whereNotIn('id', $excluded_id_1year)->whereNotIn('id', $excluded_id_2year);
            return view('mypage.recommendations', ['items' => $items])->with('user', Auth::user());
        } elseif ($age >= 50 && $age < 65 && $sex === "1") {
            $items = Item::find([1, 4, 5, 6, 8])->whereNotIn('id',  $excluded_id_1year);
            return view('mypage.recommendations', ['items' => $items])->with('user', Auth::user());
        } elseif ($age >= 50 && $age < 65 && $sex === "2") {
            $items = Item::find([1, 2, 3, 4, 5, 6, 8])->whereNotIn('id', $excluded_id_1year)->whereNotIn('id', $excluded_id_2year);
            return view('mypage.recommendations', ['items' => $items])->with('user', Auth::user());
        } elseif ($age >= 65 && $sex === "1") {
            $items = Item::find([1, 4, 5, 6, 8])->whereNotIn('id',  $excluded_id_1year);
            return view('mypage.recommendations', ['items' => $items])->with('user', Auth::user());
        } elseif ($age >= 65 && $age <= 75 && $sex === "2") {
            $items = Item::find([1, 2, 3, 4, 5, 6, 7, 8])->whereNotIn('id', $excluded_id_1year)->whereNotIn('id', $excluded_id_2year)->whereNotIn('id', $excluded_id_5year);
            return view('mypage.recommendations', ['items' => $items])->with('user', Auth::user());
        } elseif ($age > 75 && $sex === "2") {
            $items = Item::find([1, 2, 4, 5, 6, 7, 8])->whereNotIn('id', $excluded_id_1year)->whereNotIn('id', $excluded_id_2year)->whereNotIn('id', $excluded_id_5year);
            return view('mypage.recommendations', ['items' => $items])->with('user', Auth::user());
        }
    }

    public function showRecommendationsDetail(Item $item) {
        if ($item->id === 1) {
            return view('mypage.recommendation_detail_kenshin')->with('item', $item);
        } elseif ($item->id === 2) {
            return view('mypage.recommendation_detail_cervical')->with('item', $item);
        } elseif ($item->id === 3) {
            return view('mypage.recommendation_detail_breast')->with('item', $item);
        } elseif ($item->id === 4) {
            return view('mypage.recommendation_detail_lung')->with('item', $item);
        } elseif ($item->id === 5) {
            return view('mypage.recommendation_detail_gastric')->with('item', $item);
        } elseif ($item->id === 6) {
            return view('mypage.recommendation_detail_colon')->with('item', $item);
        } elseif ($item->id === 7) {
            return view('mypage.recommendation_detail_bone')->with('item', $item);
        } elseif ($item->id === 8) {
            return view('mypage.recommendation_detail_flu')->with('item', $item);
        }
    }
}
