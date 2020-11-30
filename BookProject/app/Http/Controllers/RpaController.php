<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Book;
use App\Models\Book_category;
use App\Models\Category;
use App\Models\Lend_book;
use Illuminate\Support\Facades\Log;

class RpaController extends Controller
{
    function show(){
        $lenddata = Lend_book::where('return_flag',FALSE)
        ->get();
        foreach($lenddata as $lend){
            $bookdata = Book::where('b_logic_flag', TRUE)
            ->where('book_number', $lend['l_book_number'])
            ->first();
            $lend->title = $bookdata['title'];
            $accountdata = Account::where('a_logic_flag', TRUE)
            ->where('account_number', $lend->l_account_number)
            ->first();
            $lend->account_name = $accountdata->account_name;
            $lend->mail_address = $accountdata->mail_address;
        }
        return view('RPA',compact('lenddata'));
    }
}
