<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class TestController extends Controller
{
    public function test() 
    {
        $md = new Account();
        $tests=Account::where('account_name', '阿部雄介')->first();

        return view('testpage', compact('tests'));
    }
}