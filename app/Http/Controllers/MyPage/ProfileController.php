<?php

namespace App\Http\Controllers\MyPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Mypage\Profile\EditRequest;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //プロフィール画面の表示
    public function showProfile() {
        return view('mypage.profile')->with('user', Auth::user());

    }

    //プロフィール編集画面の表示
    public function showProfileEditForm(){
        return view('mypage.profile_edit_form')->with('user', Auth::user());
    }

    //プロフィール更新処理
    public function editProfile(EditRequest $request)
     {
         $user = Auth::user();

         $user->name = $request->input('name');
         $user->email = $request->input('email');
         $user->sex = $request->input('sex');
         $user->birthday = $request->input('birthday');
         $user->zipcode = $request->input('zipcode');
         $user->address1 = $request->input('address1');
         $user->address2 = $request->input('address2');
         $user->address3 = $request->input('address3');
         $user->address4 = $request->input('address4');
         $user->save();

         return redirect()->back()
             ->with('status', 'プロフィールを変更しました。');
     }


}
