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
            setcookie("anum",$adata["account_number"]);
            setcookie("aname",$adata["account_name"]);
            setcookie("mflag",$adata["manager_flag"]);
            setcookie("login_e","ログインに失敗しました",time()-1800);
            return view('login_check',compact('adata'));
        }

        setcookie("login_e","ログインに失敗しました",time()+60*60);
        setcookie("login_c","クッキーテェック");
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