<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Book;
use App\Models\Book_category;
use App\Models\Category;
use App\Models\Lend_book;
use Illuminate\Support\Facades\Log;

class B_addController extends Controller
{
    Public function insertbook(Request $request){
        // モデルクラスのインスタンス化
        $account_table=new Account();
        $book_table=new Book();
        $book_category_table=new Book_category();
        $category_table=new Category();
        $lend_book_table=new Lend_book();

        // テーブルのカウント
        $count_account=Account::get()->count();
        $count_book=Book::get()->count();
        $count_book_category=Book_category::get()->count();
        $count_category=Category::get()->count();
        $count_lend_book=Lend_book::get()->count();

                // 挿入データID用意
                $count_account++;
                $count_book++;
                $count_book_category++;
                $count_category++;
                $count_lend_book++;

        // 該当データのID検索
        $category='バックエンド';
        $category_array=Category::where('category_name', $category)->first();

        // 挿入データ用意
            $title='test';
            $title_furigana='テスト';
            $year_of_issue='2020年11月11日';
            $Author='テスト太郎';
            $Author_furigana='テストタロウ';
            $publisher='テスト社';

            $category_number=(integer)$category_array['category_number'];

            // Log::debug($title);
            // Log::debug($category_number);
            // Log::debug($count_book);

        // データ挿入
        $book_table->create([
            'book_number' => $count_book,
            'title' => $title,
            'title_furigana' => $title_furigana,
            'cover_pic' => 'testpass',
            'publisher' => $publisher,
            'Author' => $Author,
            'Author_furigana' => $Author_furigana,
            'year_of_issue' => $year_of_issue,
            'logic_flag' => true
        ]);
        $book_category_table->create([
            'category_kanrinum' => $count_book_category,
            'book_number' => $count_book,
            'category_number' => $category_number,
            'logic_flag' => true
        ]);
    }
}
