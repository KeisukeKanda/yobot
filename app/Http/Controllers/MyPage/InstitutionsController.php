<?php

namespace App\Http\Controllers\MyPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Item;
use App\Institution;
use App\Available_Institution;
use App\Review;
use Validator;


class InstitutionsController extends Controller
{
    //受診可能な医療機関一覧表示
    public function showInstitutions($item){
        // userのaddressを取得
        $address1 = Auth::user()->address1; //埼玉県
        $address2 = Auth::user()->address2; //蕨市
        $address = $address1 . $address2; //埼玉県蕨市

        // userのaddressから受診可能自治体をavailable_institutionsテーブルから取得
        $availables = Available_Institution::where('user_address', $address)->pluck('institution_address'); //["埼玉県蕨市","埼玉県戸田市"]

        // item_idによって、行うことができる医療機関を絞って表示
        if ($item == 1) {
            // 受診可能自治体に該当する医療機関をinstitutionsテーブルから取得
            $institutions = Institution::where('address', $address)->where('health_check', "○")->get();
            return view('mypage.institutions', [
                'institutions' => $institutions,
                'item' => $item
                ]);
        } elseif ($item == 2) {
            $institutions = Institution::whereIn('address', $availables)->where('cervical_cancer', "○")->get();
            return view('mypage.institutions', [
                'institutions' => $institutions,
                'item' => $item
                ]);
        } elseif ($item == 3) {
            $institutions = Institution::whereIn('address', $availables)->where('mammography', "○")->get();
            return view('mypage.institutions', [
                'institutions' => $institutions,
                'item' => $item
                ]);
        } elseif ($item == 4) {
            $institutions = Institution::where('address', $address)->where('lung_cancer', "○")->get();
            return view('mypage.institutions', [
                'institutions' => $institutions,
                'item' => $item
                ]);
        } elseif ($item == 5) {
            $institutions = Institution::where('address', $address)->where('gc_barium', "○")->orWhere('gc_endoscopy', 1)->get();
            return view('mypage.institutions', [
                'institutions' => $institutions,
                'item' => $item
                ]);
        } elseif ($item == 6) {
            $institutions = Institution::where('address', $address)->where('colon_cancer', "○")->get();
            return view('mypage.institutions', [
                'institutions' => $institutions,
                'item' => $item
                ]);
        } elseif ($item == 7) {
            $institutions = Institution::where('address', $address)->where('bone', "○")->get();
            return view('mypage.institutions', [
                'institutions' => $institutions,
                'item' => $item
                ]);
        } elseif ($item == 8) {
            $institutions = Institution::whereIn('address', $availables)->where('vaccination', "○")->get();
            return view('mypage.institutions', [
                'institutions' => $institutions,
                'item' => $item
                ]);
        }
    }

    //医療機関詳細（口コミ表示画面表示）
    public function showInstitutionDetail($institution, $item){
        $institutions = Institution::find($institution);
        $reviews = Review::where('institution_id', $institution)->get();
        return view('mypage.institution_detail', [
            'reviews' => $reviews,
            'institution' => $institutions,
            'item' => $item
        ]);
    }

    //口コミ投稿画面表示
    public function showInstitutionReviewForm($institution, $item) {
        $institutions = Institution::find($institution);
        return view('mypage.institution_review', [
            'institution' => $institutions,
            'item' => $item,
        ]);
    }

    //口コミ投稿処理
    public function reviewInstitution($institution, $item, Request $request) {
        // //バリデーション
        // $validator = Validator::make($request->all(), [
        //         'user_id' => 'required',
        //         'institution_id' => 'required',
        //         'review_star' => 'required',
        //         'review' => 'required',
        // ]);
        // //バリデーション:エラー
        // if ($validator->fails()) {
        //         return redirect('/mypage/institutions/{instituion}/review/{item}')
        //             ->withInput()
        //             ->withErrors($validator);
        // }

        // Eloquent モデル
        $reviews = new Review;
        $reviews->user_id =  $request->user()->id;
        $reviews->institution_id =  $request->institution_id;
        $reviews->review_star = $request->review_star;
        $reviews->review = $request->review;
        $reviews->save();   //「/」ルートにリダイレクト
        return redirect(route('mypage.institution', [$institution, $item]));

    }

}
