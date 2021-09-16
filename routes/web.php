<?php
use App\Recommendation;
use Illuminate\Http\Request;

/**
* Landing pageを表示(recommendationss.blade.php)
*/
Route::get('/', 'RecommendationsController@showRecommendations');

Route::prefix('mypage')
    ->namespace('MyPage')
    ->middleware('auth')
    ->group(function (){
        //プロフィール編集
        Route::get('edit-profile', 'ProfileController@showProfileEditForm')->name('mypage.edit-profile');
        Route::post('edit-profile', 'ProfileController@editProfile')->name('mypage.edit-profile');
        //マイページ
        Route::get('/', 'RecommendationsController@showRecommendations')->name('mypage');
        Route::get('recommendation_detail/{item}', 'RecommendationsController@showRecommendationsDetail');
        
        Route::get('institutions/{item}', 'InstitutionsController@showInstitutions');
        //口コミ画面の表示
        Route::get('institutions/{instituion}/review/{item}', 'InstitutionsController@showInstitutionDetail')->name('mypage.institution');
        //口コミ投稿画面表示
        Route::get('institutions/{instituion}/contribute/{item}', 'InstitutionsController@showInstitutionReviewForm')->name('mypage.institution.review');
        //口コミ投稿画面処理
        Route::post('institutions/{instituion}/store/{item}', 'InstitutionsController@reviewInstitution');

        //結果登録画面の表示
        Route::get('done/{item}','DoneController@showDoneResultStoreForm')->name('mypage.done.item');
        //結果登録処理
        Route::post('done/{item}/store','DoneController@storeDoneResult')->name('mypage.done.item.store');
        //実施済み結果一覧画面表示
        Route::get('done', 'DoneController@showDoneList')->name('mypage.done');
        //実施済み結果詳細画面表示
        Route::get('results/{results}', 'DoneController@showDoneResult')->name('mypage.result');
        //実施済み結果詳細の編集画面表示
        Route::post('results/{results}/edit', 'DoneController@showDoneResultEditForm')->name('mypage.result.edit');
        //実施済み結果詳細の編集処理
        Route::post('results/{results}/update', 'DoneController@editDoneResult');
    });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
|--------------------------------------------------------------------------
| 3) Admin 認証不要
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() {
Route::get('/',         function () { return redirect('/admin/home'); });
Route::get('login',     'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('login',    'Admin\LoginController@login');
});
 
/*
|--------------------------------------------------------------------------
| 4) Admin ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
        Route::post('logout',   'Admin\LoginController@logout')->name('admin.logout');
        Route::get('home',      'Admin\HomeController@index')->name('admin.home');
        // ダッシュボード表示(items.blade.php)
        Route::get('index', 'Admin\ItemsController@index')->name('admin');
        // 新「item」を追加 
        Route::post('items', 'Admin\ItemsController@store');
        // itemの更新画面
        Route::post('items_edit/{items}','Admin\ItemsController@edit')->name('admin.item');
        // itemの更新処理
        Route::post('items/update', 'Admin\ItemsController@update');
        //itemを削除 
        Route::delete('item/{item}','Admin\ItemsController@destroy');
        
        //Excel/CSVの登録（institutionsテーブルへ）
        Route::get('/institution', 'Admin\InstitutionsController@showInstitutionDataStoreForm')->name('institution');
        Route::post('/import', 'Admin\InstitutionsController@import')->name('import');
        
        //Excel/CSVの登録（available_institutionsテーブルへ）
        Route::post('/import/available', 'Admin\InstitutionsController@importAvailable')->name('import.available');
});





