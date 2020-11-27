<?php $title = "DTGBOOK【アカウント編集画面】";?>
<?php $csspath = "css/account.css";?>

@extends("common.header")
@section('body')

<main>
  <form>
    <div id="text">
      <p>編集する内容を入力してください。</p>
    </div>
    <div id=tb_p>
        <div id="tb">
          <p>アカウント番号</p>
        </div>
        <input type="text" id="tbox" name="account_name"  readonly>
        <div id="tb">
          <p>{{$num}}</p>
        </div>
        <input type="text" id="tbox" name="account_name" placeholder="DTG太郎">
        <div id="tb">
          <p>メールアドレス</p>
        </div>
        <input type="email" id="tbox" name="address" placeholder="abc@example.com">
        <div id="tb">
          <p>パスワード</p>
        </div>
        <input type="text" id="tbox" placeholder="password">
        <div id="radio">
          <div id="tb">
            <p>管理者権限</p>
          </div>
            <input type="radio" name="accounttype" value="1">一般ユーザ
            <input type="radio" name="accounttype" value="2">管理者ユーザ
        </div>
      </div>
    <div id="button_p">
      <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-booklibrary.tk/account_management'">
          キャンセル
        </button>
      </div>
      <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-booklibrary.tk/account_change_check'">
          更新
        </button>
      </div>
    </div>
  </form>
</main>

@endsection