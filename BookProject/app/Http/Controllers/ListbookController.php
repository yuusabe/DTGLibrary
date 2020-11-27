<?php

namespace App\Http\Controllers;
use App\Models\Blist;

//use Illuminate\Http\Request;
use Request;


class ListbookController extends Controller
{
    function listbook(Request $request){
        $number =  $request::all();

        $info = Blist::where('book_number',$number['number']) -> first();

        return view('information_of_book',compact('info'));
    }

    function lendbook(Request $request){
        $lend =  $request::all();

        return view('information_of_book',compact('lend'));
    }
}
