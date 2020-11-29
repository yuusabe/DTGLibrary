<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Lend_book;
use Validator;
use Illuminate\Support\Facades\Log;

class AccountchangeController extends Controller
{
    //アカウント編集時のコントローラー
    private $formItems = ["acc_number","account_name", "address", "password","accounttype"];

    private $validator = [
        "account_name" => "required",
        "address" => "required",
        "password" => "required",
        "accounttype" => "required"
    ];

    function change(Request $request){
        $a_data_origin = $request;
        $request->session()->put("accountc_input", $a_data_origin);
        $a_data->$request->session()->get("accountc_input");
        return view('account_change', compact('a_data'));
        Log::debug($a_data);
    }

    // function show(){
    //     return view('account_change');
    // }

    function post(Request $request){
        $input = $request->only($this->formItems);
        
        $validator = Validator::make($input, $this->validator);
		if($validator->fails()){
			return view('account_change');
        }
        
        //セッションに書き込む
        $request->session()->put("accountc_input", $input);
        return redirect()->action('App\Http\Controllers\AccountchangeController@confirm');
    }

    function confirm(Request $request){
        //セッションから値を取り出す
        $input = $request->session()->get("accountc_input");
        //セッションに値が無い時はフォームに戻る
        if(!$input){
            return view('account_change');
        }
        return view("account_management_check",["input" => $input]);
    }

    function send(Request $request){
        //セッションから値を取り出す
        $input = $request->session()->get("accountc_input");
        //セッションに値が無い時はフォームに戻る
        if(!$input){
            return view('account_change');
        }



        //モデルクラスのインスタンス化
        $account_table = new Account();
        //テーブルのカウント
        $count_account=Account::get()->count();
        //登録アカウントのID用意
        $count_account++;
        //データ挿入
        if($input["accounttype"]=="一般ユーザ"){
            $account_table->create([
                'account_number' => $count_account,
                'account_name' => $input["account_name"],
                'mail_address' => $input["address"],
                'password' => $input["password"],
                'manager_flag' => FALSE,
                'a_logic_flag' => true
            ]);
        }else{
            $account_table->create([
                'account_number' => $count_account,
                'account_name' => $input["account_name"],
                'mail_address' => $input["address"],
                'password' => $input["password"],
                'manager_flag' => TRUE,
                'a_logic_flag' => TRUE
            ]);
        }
        //セッションを空にする
        $request->session()->forget("accountc_input");
        return view("completion");
    }


    function list(){
        $a_list = Account::select()
        ->where('a_logic_flag',TRUE)
        ->get();
        return view('account_management', compact('a_list'));
    }
}
