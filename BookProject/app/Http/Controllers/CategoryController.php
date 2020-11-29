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

    function listpost(){

    }
}
