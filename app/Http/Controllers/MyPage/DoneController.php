<?php

namespace App\Http\Controllers\MyPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Result;
use App\Item;
use Validator;
use Auth;

class DoneController extends Controller
{
    //結果登録画面表示
    public function showDoneResultStoreForm(Item $item) {
        return view('mypage.done_result_store', ['item' => $item])->with('user', Auth::user());
    }


    //結果登録処理
    public function storeDoneResult(Request $request, $item) {
        //バリデーション
        // $validator = Validator::make($request->all(), [
        //     'user_id' => 'required'
        // ]);

        //バリデーション:エラー
        // if ($validator->fails()) {
        //         return redirect('/mypage')
        //             ->withInput()
        //             ->withErrors($validator);
        // }

        //file 取得
        $file = $request->file('result_file'); //fileが空かチェック
        if( !empty($file) ){
            //ファイル名を取得
            $filename = $file->getClientOriginalName();

            $move = $file->move('./result_upload',$filename);
        }else{
                $filename = "";
            }

        // Eloquent モデル
        $results = new Result;
        $results->user_id = $request->user()->id;
        $results->item_id = $item;
        $results->done_date = $request->done_date;
        $results->result_file = $filename;
        $results->result_comment =  $request->result_comment;
        $results->save();   //「/」ルートにリダイレクト
        return redirect('/mypage');
    }

    //実施済み結果一覧画面表示
    public function showDoneList() {
        //年齢と性別が登録されていなければ、プロフィール更新画面へ遷移
        if ((Auth::user()->sex) == null) {
            return view('mypage.profile_edit_form');
        } elseif ((Auth::user()->birthday) == null) {
            return view('mypage.profile_edit_form');
        }


        $results1 = Result::where('user_id', Auth::user()->id)->where('item_id',1)->orderBy('done_date', 'asc')->get();
        $results2 = Result::where('user_id', Auth::user()->id)->where('item_id',2)->orderBy('done_date', 'asc')->get();
        $results3 = Result::where('user_id', Auth::user()->id)->where('item_id',3)->orderBy('done_date', 'asc')->get();
        $results4 = Result::where('user_id', Auth::user()->id)->where('item_id',4)->orderBy('done_date', 'asc')->get();
        $results5 = Result::where('user_id', Auth::user()->id)->where('item_id',5)->orderBy('done_date', 'asc')->get();
        $results6 = Result::where('user_id', Auth::user()->id)->where('item_id',6)->orderBy('done_date', 'asc')->get();
        $results7 = Result::where('user_id', Auth::user()->id)->where('item_id',7)->orderBy('done_date', 'asc')->get();
        $results8 = Result::where('user_id', Auth::user()->id)->where('item_id',8)->orderBy('done_date', 'asc')->get();

        return view('mypage.done', [
            'results1' => $results1,
            'results2' => $results2,
            'results3' => $results3,
            'results4' => $results4,
            'results5' => $results5,
            'results6' => $results6,
            'results7' => $results7,
            'results8' => $results8
        ]);
    }


    //実施済み結果詳細画面表示
    public function showDoneResult(Result $results){
        $item = Item::find($results->item_id);
        return view('mypage.results', [
            'result' => $results,
            'item' => $item
        ]);
    }



    //実施済み結果詳細の編集画面表示
    public function showDoneResultEditForm(Result $results) {
        $item = Item::find($results->item_id);
        return view('mypage.results_edit', [
            'results' => $results,
            'item' => $item
        ]);
    }

    // public function showDoneResultEditForm($result_id){
    //     $results = Result::where('user_id', Auth::user()->id)->find($result_id);
    //     $item = Item::find($results->item_id);
    //     return view('mypage.results_edit', [
    //         'result' => $results,
    //         'item' => $item
    //     ]);
    // }

    //実施済み結果詳細の編集処理
    public function editDoneResult(Request $request, $id){


        //file 取得
        $file = $request->file('result_file'); //fileが空かチェック
        if( !empty($file) ){
            //ファイル名を取得
            $filename = $file->getClientOriginalName();
            //AWSの場合どちらかになる事がある”../upload/” or “./upload/”
            $move = $file->move('./result_upload',$filename); //public/upload/...
        }else{
                $filename = "";
            }

        // Eloquent モデル
        $results = Result::where('user_id',Auth::user()->id)->find($request->id);
        // var_dump($results);
        // echo $results;
        // $results->user_id = Auth::user()->id;
        $results->item_id = $request->input('item_id');
        $results->done_date = $request->input('done_date');
        $results->result_file = $filename;
        $results->result_comment =  $request->input('result_comment');
        $results->save();   //「/」ルートにリダイレクト
        return redirect('/mypage/done');
    }
}
