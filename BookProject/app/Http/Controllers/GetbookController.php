<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Book_category;
use Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class GetbookController extends Controller
{
    public function getbook() 
    {
        // 書籍一覧情報取得
        $data = DB::table('books')
        ->leftjoin('book_categories',function ($bc){
            $bc->on('book_categories.bc_book_number', 'books.book_number')
            ->where('bc_logic_flag',TRUE);
        })
        ->leftjoin('categories','categories.category_number', 'book_categories.bc_category_number')
        ->leftjoin('lend_books','lend_books.l_book_number', 'books.book_number')
        ->where('b_logic_flag', TRUE)
        ->orderBy('book_number', 'asc')
        // ->where('bc_logic_flag', TRUE)
        ->select('book_number','title','year_of_issue','publisher','cover_pic','category_name','return_flag')
        ->get();

        // $data = (array)$obj_data;

        // S3の画像パス取得
        $before = 255;
        foreach($data as $index => $d){
            $path = Storage::disk('s3')->url($d->cover_pic);
            $d->path = $path;

            if($d->book_number == $before){
                $d->multi = 'ON' ;
            }else{
                $d->multi = 'OFF' ;
            }
            $before = $d->book_number;
        }

        return view('list_of_books', compact('data'));

        Log::debug($data);
    }
}