<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/account_change_check', 'App\Http\Controllers\AppController@account_change_check');

// Route::get('/account_change', 'App\Http\Controllers\AppController@account_change');
/* Route::get('/account_change', 'App\Http\Controllers\AccountchangeController@show')->name("account_manage_change.show"); */

// Route::post('/account_change', 'App\Http\Controllers\AccountchangeController@change')->name("account_change.change");

Route::get('/account_change', 'App\Http\Controllers\AccountController@change')->name("account_manage_change.change");
/* Route::post('/account_change', 'App\Http\Controllers\AccountchangeController@post')->name("account_manage_change.post"); */
Route::post('/account_change_check', 'App\Http\Controllers\AccountController@post1')->name("account_change.post");
Route::get('/account_change_check', 'App\Http\Controllers\AccountController@confirm1')->name("account_change.confirm");
Route::post('/account_change_check', 'App\Http\Controllers\AccountController@send1')->name("account_change.send1");
/* Route::get('/account_change_check', 'App\Http\Controllers\AccountchangeController@confirm')->name("account_manage_change.confirm");
Route::post('/account_change_check', 'App\Http\Controllers\AccountchangeController@send')->name("account_manage_change.send");
 */
Route::get('/account_delete_check', 'App\Http\Controllers\AppController@account_delete_check');

/* Route::get('/account_management_check', 'App\Http\Controllers\AppController@account_management_check'); */

//Route::get('/account_management', 'App\Http\Controllers\AppController@account_management');

//追記20201126：アカウント管理画面のフォームを表示、および遷移先のルーティング
Route::get('/account_management', 'App\Http\Controllers\AccountController@show')->name("account_manage.show");


Route::post('/account_management', 'App\Http\Controllers\AccountController@post')->name("account_manage.post");


//追記20201127：アカウント管理画面、アカウントリスト表示、のちにshowに合併予定
Route::get('/account_management', 'App\Http\Controllers\AccountController@list');

Route::get('/account_management_check', 'App\Http\Controllers\AccountController@confirm')->name("account_manage.confirm");

Route::post('/account_management_check', 'App\Http\Controllers\AccountController@send')->name("account_manage.send");


/* Route::get('/book_add', 'App\Http\Controllers\AppController@book_add'); */

//追記20201117：書籍登録画面のフォームを表示、および遷移先のルーティング
Route::get('/book_add', 'App\Http\Controllers\BookaddFormController@show')->name("book_add.show");
Route::post('/book_add', 'App\Http\Controllers\BookaddFormController@post')->name("book_add.post");

//追記20201117：書籍登録確認画面のフォームを表示、および遷移先のルーティング
Route::get('/book_add_check', 'App\Http\Controllers\BookaddFormController@confirm')->name("book_add.confirm");

// 20201119：書籍追加機能確認のためコメントアウト
Route::post('/book_add_check', 'App\Http\Controllers\BookaddFormController@send')->name("book_add.send");

// 201119：書籍追加機能
// Route::post('/book_add_check', 'App\Http\Controllers\B_addController@insertbook');

//
//追記20201117：完了画面のルーティング
// Route::get('/completion', 'App\Http\Controllers\BookaddFormController@complete')->name("book_add.complete");

//追記20201116：画像ファイルをアップロードする処理のルーティング
/* Route::post('/book_add', 'App\Http\Controllers\MemoryImageController@upload');
// */

// Route::get('/book_change_check', 'App\Http\Controllers\AppController@book_change_check');

// Route::get('/book_change', 'App\Http\Controllers\AppController@book_change');

// Route::get('/book_delete_check', 'App\Http\Controllers\AppController@book_delete_check');

Route::get('/category_check', 'App\Http\Controllers\AppController@category_check');

// Route::get('/category', 'App\Http\Controllers\AppController@category');
Route::get('/category', 'App\Http\Controllers\CategoryController@list_show')->name('category.list_show');
Route::post('/category', 'App\Http\Controllers\CategoryController@list_post')->name('category.list_post');

// Route::get('/completion_account', 'App\Http\Controllers\AppController@completion_account');

// Route::get('/completion_book', 'App\Http\Controllers\AppController@completion_book');
// Route::get('/completion_category', 'App\Http\Controllers\AppController@completion_category');

// Route::get('/completion', 'App\Http\Controllers\AppController@completion');

// Route::get('/information_of_book', 'App\Http\Controllers\AppController@information_of_book');
// Route::post('/information_of_book', 'App\Http\Controllers\ListbookController@listbook');
// Route::get('/information_of_book', 'App\Http\Controllers\GetbookController@i_show')->name("book.i_show");

// Route::get('/lend_book', 'App\Http\Controllers\AppController@lend_book');
// Route::post('/lend_book', 'App\Http\Controllers\ListbookController@lendbook');

Route::get('/lend_check', 'App\Http\Controllers\AppController@lend_check');

// Route::get('/list_of_books', 'App\Http\Controllers\AppController@list_of_books');
// Route::get('/list_of_books', 'App\Http\Controllers\GetbookController@getbook');
// Route::post('/list_of_books', 'App\Http\Controllers\GetbookController@i_post')->name("book.i_post");


Route::get('/login', 'App\Http\Controllers\AppController@login');

Route::get('/login_check', 'App\Http\Controllers\AppController@login_check');

Route::get('/mypage', 'App\Http\Controllers\AppController@mypage');

Route::get('/password_change', 'App\Http\Controllers\AppController@password_change');

Route::get('/return_book', 'App\Http\Controllers\AppController@return_book');

Route::get('/return_check', 'App\Http\Controllers\AppController@return_check');

Route::get('/RPA', 'App\Http\Controllers\AppController@RPA');


Route::get('/testpage', 'App\Http\Controllers\AppController@testpage');
Route::get('/testpage', 'App\Http\Controllers\TestController@test');

//loginのため追記
Route::post('/login', 'App\Http\Controllers\LoginController@check')->name("login.check");

//20201130追記　コントローラ変更
Route::get('/mypage', 'App\Http\Controllers\MypageshowController@showp')->name("mypage.showp");
Route::post('/mypage', 'App\Http\Controllers\MypageshowController@return_post')->name("mypage.return_post");
Route::get('/return_book', 'App\Http\Controllers\MypageshowController@return_show');
Route::post('/return_book', 'App\Http\Controllers\MypageshowController@return_send')->name("mypage.return_send");


Route::get('/testpage', 'App\Http\Controllers\TestController@getbook');
Route::post('/testpage', 'App\Http\Controllers\TestController@i_post')->name("book.i_post");

//書籍一覧画面からの遷移
//書籍一覧画面表示
Route::get('/list_of_books', 'App\Http\Controllers\TestController@getbook')->name("book.list");
//書籍一覧画面、各ボタン押下時
Route::post('/list_of_books', 'App\Http\Controllers\TestController@i_post')->name("book.i_post");
//書籍詳細画面表示
Route::get('/information_of_book', 'App\Http\Controllers\TestController@i_show')->name("book.i_show");
//書籍詳細画面、貸出ボタン押下時
Route::post('/information_of_book', 'App\Http\Controllers\TestController@l_post')->name("book.l_post");
//貸出画面表示
Route::get('/lend_book', 'App\Http\Controllers\TestController@lend_show');
//貸出画面、貸出ボタン押下時
Route::post('/lend_book', 'App\Http\Controllers\TestController@lc_post')->name("book.lc_post");
//貸出確認画面表示
Route::get('/lend_check', 'App\Http\Controllers\TestController@lend_check_show');
//貸出確認画面、確定ボタン押下時
Route::post('/lend_check', 'App\Http\Controllers\TestController@lend_send')->name("book.lend_send");
//書籍編集画面表示
Route::get('/book_change', 'App\Http\Controllers\TestController@book_change_show');
//書籍編集画面、各ボタン押下時
Route::post('/book_change', 'App\Http\Controllers\TestController@check_post')->name("book.check_post");
//書籍編集確認画面表示
Route::get('/book_change_check', 'App\Http\Controllers\TestController@book_change_check_show');
//書籍編集確認画面、確定ボタン押下時
Route::post('/book_change_check', 'App\Http\Controllers\TestController@change_check_send')->name("book.change_check_send");
//書籍削除確認画面表示
Route::get('/book_delete_check', 'App\Http\Controllers\TestController@delete_check_show');
//書籍削除確認画面、確定ボタン押下時
Route::post('/book_delete_check', 'App\Http\Controllers\TestController@delete_send')->name("book.delete_send");