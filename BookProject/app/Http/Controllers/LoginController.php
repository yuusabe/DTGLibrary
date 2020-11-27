<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Account;

class LoginController extends Controller
{
    

    function check(Request $request){
        
        $account = new Account;

        $email_in = $request["email"];
        $pass_in = $request["pass"];

        $adata = $account::where('mail_address', $email_in)->first();
        $pass = $adata["password"];

        if($pass != "" && $pass_in == $pass)
        {
            return view('login_check',compact('adata'));
        }

        return view('login');
    }
}