<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Account;
use App\Models\Lend_book;
use App\Models\Book;

class MypageshowController extends Controller
{
    

    function showp(){

        $account = new Account;
        $book = new Book;

        $anum =  $_COOKIE["anum"];

        $adata = $account::where('a_logic_flag',TRUE)
        ->where('account_number', $anum)
        ->first();
        
        $ldata = Lend_book::where('return_flag', FALSE)
        ->where('l_account_number',$anum)
        ->get();

        foreach($ldata as $l)
        {
            $day = $l->return_day;
            $booknum = $l->l_book_number;
            $book= Book::where('b_logic_flag',TRUE)
            ->where('book_number', $booknum)
            ->first();
            $l->book_name = $book->title;
        }


        
        // $bdata = $book::where('book_number', $ldata["l_book_number"])->first();
        
        // setcookie("lcheck",1);
        return view('mypage', compact('adata','ldata'));
        // return view('mypage', compact('adata'));
    }
}