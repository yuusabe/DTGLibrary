<?php

namespace App\Http\Controllers;
use App\Models\Blist;

//use Illuminate\Http\Request;
use Request;


class LendbookController extends Controller
{
    function lendbook(Request $request){
        $lend =  $request::all();

        return view('information_of_book',compact('lend'));
    }
}
