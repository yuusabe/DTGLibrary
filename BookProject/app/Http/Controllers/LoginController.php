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

        $adata = $account::where('a_logic_flag',TRUE)
        ->where('mail_address', $email_in)->first();
        $pass = $adata["password"];

        setcookie("login_e","ログインに失敗しました",time()+10);

        if($pass != "" && $pass_in == $pass)
        {
            setcookie("anum",$adata["account_number"]);
            setcookie("aname",$adata["account_name"]);
            setcookie("mflag",$adata["manager_flag"]);
            setcookie("login_e","aa",time()-1800);
            return view('login_check',compact('adata'));
        }

        return view('login');
    }

    function block_lob(){
        if (empty($_COOKIE["anum"]))
        {
            return view('login');
        }
        else
        {
            return view('list_of_books');
        }
    }
}