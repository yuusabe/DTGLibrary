<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Book_category;
use App\Models\Category;
use Validator;
use Illuminate\Support\Facades\Log;
use Storage;

class BookaddFormController extends Controller
{
    private $formItems = ["img_file", "title", "title_h","year", "author", "author_h","publisher","category"];
    private $validator = [
        //"img_file" => "required",
        "title" => "required",
        "title_h" => "required",
        "year" => "required",
        "author" => "required",
        "author_h" => "required",
        "publisher" => "required",
        "category" => "required"
    ];
    function show(){
        return view('book_add');
    }
    function post(Request $request){
        $input = $request->except('img_file');
        $img_file = $request->file('img_file');

        if (!$img_file) {
            return redirect()->action('App\Http\Controllers\BookaddFormController@show');
        }
        $temp_path = $img_file->store('public/temp');
        
        

        //$temp_path = array($temp_path);
        $read_temp_path = str_replace('public/', 'storage/', $temp_path);
        //$read_temp_path = array($read_temp_path);
        $input = array_merge(
            $input, array('temp_path' => $temp_path),array('read_temp_path' => $read_temp_path)
        );
        $validator = Validator::make($input, $this->validator);
        if($validator->fails()){
            return redirect()->action('App\Http\Controllers\BookaddFormController@show')
                ->withInput()
                ->withErrors($validator);
        }
        //セッションに書き込む
        $request->session()->put("form_input", $input);
        return redirect()->action('App\Http\Controllers\BookaddFormController@confirm');
    }
    function confirm(Request $request){
        //セッションから値を取り出す
        $input = $request->session()->get("form_input");
        //セッションに値が無い時はフォームに戻る
        if(!$input){
            return redirect()->action('App\Http\Controllers\BookaddFormController@show');
        }
        return view("book_add_check",["input" => $input]);
    }
    function send(Request $request){
        //セッションから値を取り出す
        $input = $request->session()->get("form_input");
        //セッションに値が無い時はフォームに戻る
        if(!$input){
            return redirect()->action('App\Http\Controllers\BookaddFormController@show');
        }

        $path = Storage::disk('s3')->putFile('/picture', $input['read_temp_path'], 'public');
        //モデルクラスのインスタンス化
        $book_table = new Book();
        $book_category_table = new Book_category();
        $category_table=new Category();
        //テーブルのカウント
        $count_book=Book::get()->count();
        $count_book_category=Book_category::get()->count();
        //登録書籍のID用意
        $count_book++;
        $count_book_category++;
        //登録書籍の割り当てたいカテゴリID検索
        $category_array=Category::where('category_name', $input["category"])->first();
        $category_number=(integer)$category_array['category_number'];
        Log::debug($input);
        //データ挿入
        $book_table->create([
            'book_number' => $count_book,
            'title' => $input["title"],
            'title_furigana' => $input["title_h"],
            'cover_pic' => $path,
            'publisher' => $input["publisher"],
            'Author' => $input["author"],
            'Author_furigana' => $input["author_h"],
            'year_of_issue' => $input["year"],
            'b_logic_flag' => true
        ]);
        $book_category_table->create([
            'category_kanrinum' => $count_book_category,
            'bc_book_number' => $count_book,
            'bc_category_number' => $category_number,
            'bc_logic_flag' => true
        ]);
        //セッションを空にする
        $request->session()->forget("form_input");
        return view("completion");
        //return redirect()->action("App\Http\Controllers\BookaddFormController@complete");
    }
}