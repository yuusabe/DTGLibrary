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
        $book = new Book;

        $anum =  $_COOKIE["anum"];

        $adata = $account::where('account_number', $anum)->first();
        
        $ldata = Lend_book::where('return_flag', FALSE)
        ->where('l_account_number',$anum)
        ->get();

        // foreach($lend as $l)
        // {
        //     $day = $l->l_book_number;
        //     $booknum = $l->l_book_number;
        //     $book_name = Book::where('b_logic_flag',TRUE);

        // }


        $lend_book->where('return_flag', 1);


        $bdata = $book::where('book_number', $ldata["l_book_number"])->first();
        
        setcookie("lcheck",1);
        return view('mypage', compact('adata','ldata','bdata'));
        // return view('mypage', compact('adata'));
    }
}