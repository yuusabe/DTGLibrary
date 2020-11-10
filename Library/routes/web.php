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


Route::get('/test', 'App\Http\Controllers\AppController@test');
Route::get('/test', 'App\Http\Controllers\TestController@testdata');



Route::get('/account_change_check', 'App\Http\Controllers\AppController@account_change_check');

Route::get('/account_change', 'App\Http\Controllers\AppController@account_change');

Route::get('/account__delete_check', 'App\Http\Controllers\AppController@account_delete_check');

Route::get('/account_management_check', 'App\Http\Controllers\AppController@account_management_check');

Route::get('/account_management', 'App\Http\Controllers\AppController@account_management');

Route::get('/book_add_check', 'App\Http\Controllers\AppController@book_add_check');

Route::get('/book_add', 'App\Http\Controllers\AppController@book_add');

Route::get('/book_change_check', 'App\Http\Controllers\AppController@book_change_check');

Route::get('/book_change', 'App\Http\Controllers\AppController@book_change');

Route::get('/book_delete_check', 'App\Http\Controllers\AppController@book_delete_check');

Route::get('/category_check', 'App\Http\Controllers\AppController@category_check');

Route::get('/category', 'App\Http\Controllers\AppController@category');

Route::get('/completion_account', 'App\Http\Controllers\AppController@completion_account');

Route::get('/completion_book', 'App\Http\Controllers\AppController@completion_book');
Route::get('/completion_category', 'App\Http\Controllers\AppController@completion_category');

Route::get('/completion', 'App\Http\Controllers\AppController@completion');

Route::get('/information_of_book', 'App\Http\Controllers\AppController@information_of_book');

Route::get('/lend_book', 'App\Http\Controllers\AppController@lend_book');

Route::get('/lend_check', 'App\Http\Controllers\AppController@lend_check');

Route::get('/list_of_books', 'App\Http\Controllers\AppController@list_of_books');

Route::get('/login', 'App\Http\Controllers\AppController@login');

Route::get('/mypage', 'App\Http\Controllers\AppController@mypage');

Route::get('/password_change', 'App\Http\Controllers\AppController@password_change');

Route::get('/return_book', 'App\Http\Controllers\AppController@return_book');

Route::get('/return_check', 'App\Http\Controllers\AppController@return_check');


