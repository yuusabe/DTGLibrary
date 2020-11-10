<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blist;

class TestController extends Controller
{
    public function testdata() 
    {
        $md = new Blist();
        $data = $md->getData();

        return view('test', compact('data'));
    }
}
