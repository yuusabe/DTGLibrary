<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class CategoryController extends Controller
{
    function list_show(){
        $category = Category::where('c_logic_flag', TRUE)
        ->get();
        $category = json_decode($category, true);
        return view('category',compact('category'));
    }

    function list_post(Request $request){
        if($request->has('add')){
            $category = $request['category'];
            //モデルクラスのインスタンス化
            $category_table = new Category();
            //テーブルのカウント
            $count_category=Category::get()->count();
            $count_category++;

            $category_table->create([
                'category_number' => $count_category,
                'category_name'=> $category,
                'c_logic_flag'=> TRUE
            ]);
            return redirect()->route('category.list_show');

        }elseif($request->has('change')){
            $num = $request['number'];
            $category = $request['category'];
            return view('category_change_check',compact('num','category')); 

        }elseif($request->has('delete')){
            $num = $request['number'];
            $category = $request['category'];
            return view('category_delete_check',compact('num','category')); 
        }
    }

    function change_show(){
        return view('category_change_check');
    }

    function change_send(Request $request){
        if($request->has('change')){
            $num = $request['number'];
            $category = $request['category'];
            Category::where('c_logic_flag',TRUE)
            ->where('category_number',$num)
            ->update([
                'category_name' =>$category
            ]);
            return view('completion');
        }elseif($request->has('cancel')){
            return redirect()->route('category.list_show');
        }
    }

    function delete_show(){
        return view('category_delete_check');
    }

    function delete_send(Request $request){
        if($request->has('delete')){
            $num = $request['number'];
            $category = $request['category'];
            Category::where('c_logic_flag',TRUE)
            ->where('category_number',$num)
            ->update([
                'c_logic_flag' => FALSE
            ]);
            return view('completion');

        }elseif($request->has('cancel')){
            return redirect()->route('category.list_show');
        }
    }
}
