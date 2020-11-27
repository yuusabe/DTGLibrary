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

// Route::get('/account_change', 'App\Http\Controllers\AccountChangeController@change_show')->name("account_manage_change.show");
Route::post('/account_change', 'App\Http\Controllers\AccountchangeController@change_post')->name("account_manage_change.post");
Route::post('/account_change', 'App\Http\Controllers\AccountchangeController@if')->name("account_manage_change.if");
//追記20201127：アカウント管理画面、アカウントリスト表示、のちにshowに合併予定
// Route::get('/account_change', 'App\Http\Controllers\AccountChangeController@list');

Route::get('/account_change_check', 'App\Http\Controllers\AccountchangeController@change_confirm')->name("account_manage_change.confirm");

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

Route::get('/book_change_check', 'App\Http\Controllers\AppController@book_change_check');

Route::get('/book_change', 'App\Http\Controllers\AppController@book_change');

Route::get('/book_delete_check', 'App\Http\Controllers\AppController@book_delete_check');

Route::get('/category_check', 'App\Http\Controllers\AppController@category_check');

Route::get('/category', 'App\Http\Controllers\AppController@category');

// Route::get('/completion_account', 'App\Http\Controllers\AppController@completion_account');

// Route::get('/completion_book', 'App\Http\Controllers\AppController@completion_book');
// Route::get('/completion_category', 'App\Http\Controllers\AppController@completion_category');

// Route::get('/completion', 'App\Http\Controllers\AppController@completion');

Route::get('/information_of_book', 
'App\Http\Controllers\AppController@information_of_book');
Route::post('/information_of_book', 'App\Http\Controllers\ListbookController@listbook');

Route::get('/lend_book', 'App\Http\Controllers\AppController@lend_book');
Route::post('/lend_book', 'App\Http\Controllers\ListbookController@lendbook');

Route::get('/lend_check', 'App\Http\Controllers\AppController@lend_check');

Route::get('/list_of_books', 'App\Http\Controllers\AppController@list_of_books');
Route::get('/list_of_books', 'App\Http\Controllers\GetbookController@getbook');

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
