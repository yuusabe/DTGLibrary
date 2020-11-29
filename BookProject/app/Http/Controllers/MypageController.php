<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Account;
use App\Models\Lend_book;
use App\Models\Book;

class MypageController extends Controller
{
    

    function showp(){

        $account = new Account;
        $lend_book = new Lend_book;
        $book = new Book;

        $anum =  $_COOKIE["anum"];

        $adata = $account::where('account_number', $anum)->first();
        
        // $book->where('l_account_number', $anum);
        // $book->where('return_flag', 1);
        // $ldata = $book->get();

        // $bdata = $book::where('book_number', $ldata["l_book_number"])->first();

        // if ($ldata == "")
        // {
        //     setcookie("lcheck",0);
        //     return view('login', compact('adata'));
        // }
        
        // setcookie("lcheck",1);
        // return view('login', compact('adata','ldata','bdata'));
        return view('login', compact('adata'));
    }
}