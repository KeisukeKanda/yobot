<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use Validator;
use Auth;

class ItemsController extends Controller
{
    //
    /**
    * ダッシュボード表示 
    */
    public function index() {
        $items = Item::orderBy('created_at', 'asc')->paginate(3);
        return view('admin.items', [
            'items' => $items
        ]);
    }
    
    
    /**
    * 登録 
    */
    public function store(Request $request) {
        //バリデーション
        $validator = Validator::make($request->all(), [
                'item_img' => 'required',
                'item_name' => 'required|max:64',
                'item_content' => 'required',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
                return redirect('/admin/index')
                    ->withInput()
                    ->withErrors($validator);
        }
        
        //file 取得
        $file = $request->file('item_img'); //fileが空かチェック
        if( !empty($file) ){
            //ファイル名を取得
            $filename = $file->getClientOriginalName(); 
            //AWSの場合どちらかになる事がある”../upload/” or “./upload/”
            $move = $file->move('../upload',$filename); //public/upload/... 
        }else{
                $filename = "";
            }
        
        // Eloquent モデル
        $items = new Item;
        $items->item_name =    $request->item_name;
        $items->item_content =  $request->item_content;
        $items->item_img = $filename;
        $items->save();   //「/」ルートにリダイレクト 
        return redirect('/admin/index');
    }
    
    /**
    * 更新処理 
    */
    public function update(Request $request){
        //バリデーション
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'item_img' => 'required',
            'item_name' => 'required|max:64',
            'item_content' => 'required',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
                return redirect('/admin/index')
                    ->withInput()
                    ->withErrors($validator);
        }
        
        //file 取得
        $file = $request->file('item_img'); //fileが空かチェック
        if( !empty($file) ){
            //ファイル名を取得
            $filename = $file->getClientOriginalName(); 
            //AWSの場合どちらかになる事がある”../upload/” or “./upload/”
            $move = $file->move('../upload',$filename); //public/upload/... 
        }else{
                $filename = "";
            }
        
        // Eloquent モデル
        $items = Item::find($request->id);
        $items->item_name =    $request->item_name;
        $items->item_content =  $request->item_content;
        $items->item_img = $filename;
        $items->save();   //「/」ルートにリダイレクト 
        return redirect('/admin/index');
        
    }
    
    /**
    * itemの更新画面
    */
    public function edit(Item $items) {
        return view('admin.items_edit', [
            'item' => $items
        ]);
    }
    
    
    /**
    * itemを削除 
    */
    public function destroy(Item $item) {
        $item->delete();
        return redirect('/admin/index');
    }
}



