<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function account_change_check()
    {
        return view('account_change_check');
    }
    public function account_change()
    {
        return view('account_change');
    }
    public function account_delete_check()
    {
        return view('account_delete_check');
    }
    public function account_management_check()
    {
        return view('account_management_check');
    }
    public function account_management()
    {
        return view('account_management');
    }
    public function book_add_check()
    {
        return view('book_add_check');
    }
    public function book_add()
    {
        return view('book_add');
    }
    public function book_change_check()
    {
        return view('book_change_check');
    }
    public function book_change()
    {
        return view('book_change');
    }
    public function book_delete_check()
    {
        return view('book_delete_check');
    }
    public function category_check()
    {
        return view('category_check');
    }
    public function category()
    {
        return view('category');
    }
    public function completion_account()
    {
        return view('completion_account');
    }
    public function completion_book()
    {
        return view('completion_book');
    }
    public function completion_category()
    {
        return view('completion_category');
    }
    public function completion()
    {
        return view('completion');
    }
    public function information_of_book()
    {
        return view('information_of_book');
    }
    public function lend_book()
    {
        return view('lend_book');
    }
    public function lend_check()
    {
        return view('lend_check');
    }
    public function list_of_books()
    {
        return view('list_of_books');
    }
    public function login()
    {
        return view('login');
    }
    public function login_check()
    {
        return view('login_check');
    }
    public function mypage()
    {
        return view('mypage');
    }
    public function password_change()
    {
        return view('password_change');
    }
    public function return_book()
    {
        return view('return_book');
    }
    public function return_check()
    {
        return view('return_check');
    }
    public function RPA()
    {
        return view('RPA');
    }
    public function testpage()
    {
        return view('testpage');
    }
}
