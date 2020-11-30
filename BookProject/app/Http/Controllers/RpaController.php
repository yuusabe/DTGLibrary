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

            $piece = explode("-", $lend->return_day);
            Log::debug($piece);
            if (!empty($piece[2])){
                $day = $piece[0]."年".$piece[1]."月".$piece[2]."日";
                $lend->day = $day;
            }else{
                $lend->day = $lend->return_day;
            }
            
            

        }
        return view('RPA',compact('lenddata'));
    }
}
