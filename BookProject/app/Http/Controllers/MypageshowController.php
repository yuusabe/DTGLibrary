<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Account;
use App\Models\Book;
use App\Models\Book_category;
use App\Models\Category;
use App\Models\Lend_book;

use Storage;

class MypageshowController extends Controller
{
    

    function showp(){

        $account = new Account;
        $book = new Book;

        $anum =  $_COOKIE["anum"];

        $adata = $account::where('a_logic_flag',TRUE)
        ->where('account_number', $anum)
        ->first();
        $adata = json_decode(json_encode($adata), true);

        
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
            $path = Storage::disk('s3')->url($book->cover_pic);
            $l->path = $path;
        }


        
        // $bdata = $book::where('book_number', $ldata["l_book_number"])->first();
        
        // setcookie("lcheck",1);
        return view('mypage', compact('adata','ldata'));
        // return view('mypage', compact('adata'));
    }

    function return_post(Request $request){
        $l_num = $request['number'];
        $b_array = Book::where('b_logic_flag',TRUE)
                ->where('book_number', $l_num)
                ->first();
                $b_array = json_decode(json_encode($b_array), true);
                $path = Storage::disk('s3')->url($b_array['cover_pic']);
        
        $b_number = Lend_book::where('lend_number',$l_num)
        ->first();
        $num = $b_number->l_book_number;

        $ldata = Book::where('b_logic_flag',TRUE)
                ->where('book_number',$num)
                ->first();
                $category_exist = Book_category::where('bc_logic_flag',TRUE)
                ->where('bc_book_number',$num)
                ->exists();
            if($category_exist == TRUE){
                $category_data = Book_category::where('bc_logic_flag',TRUE)
                ->where('bc_book_number',$num)
                ->first();
            }else{
                $category_data = new \stdClass();
                $category_data->bc_category_number = 0;
            }
                $category_exist2 = Category::where('c_logic_flag',TRUE)
                ->where('category_number',$category_data->bc_category_number)
                ->exists();
            if($category_exist == TRUE){
                $category_data2 = Category::where('c_logic_flag',TRUE)
                ->where('category_number',$category_data->bc_category_number)
                ->first();
            }else{
                $category_data2 = new \stdClass();
                $category_data2->category_name = 'a';
            }
            $category_name = $category_data2->category_name;
        return view('return_book',compact('num','path','ldata','category_name'));
    }

    function return_show(){
        return view('return_book');
    }

    function return_send(Request $request){
        if($request->has('return')){
            
            $num = $request['number'];
            Lend_book::where('return_flag',FALSE)
                ->where('l_book_number',$num)
                ->update([
                    'return_flag' => TRUE
                ]);
            return view('completion');

        }elseif($request->has('cancel')){
            return redirect()->route('mypage.showp');
        }
        
    }
}