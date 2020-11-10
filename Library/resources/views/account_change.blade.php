<?php $title = "DTGBOOK【アカウント編集画面】";?>
<?php $csspath = "css/account_change.css";?>

@extends("common.header")
@section('body')

<main>
  <form>
    <div id=tb_p>
      <div id="account" id="tb">
        <div id="text">
          <p>アカウント名</p>
        </div>
        <input type="text" id="tbox" placeholder="DTG太郎">
      </div>
      <div id="email" id="tb">
        <div id="text">
          <p>メールアドレス</p>
        </div>
        <input type="email" id="tbox" placeholder="abc@example.com">
      </div>
      <div id="password" id="tb">
        <div id="text">
          <p>パスワード</p>
        </div>
        <input type="text" id="tbox" placeholder="password">
      </div>
      <div class="dropdown">
        <button type="button"  id="dropdown" id="tb"
          class="btn btn-outline-secondary dropdown-toggle"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false">
        管理者権限
        </button>
        <ul class="dropdown-menu">
          <li><button class="dropdown-item" value="発行年">管理者</button></li>
          <li><button class="dropdown-item" value="著者">一般ユーザ</button></li>
        </ul>
      </div>
    </div>
    <div id="button_p">
      <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='http://www.dtg-shosekikanri2020-test.tk/account_management'">
          キャンセル
        </button>
      </div>
      <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='http://www.dtg-shosekikanri2020-test.tk/account_change_check'">
          更新
        </button>
      </div>
    </div>
  </form>
</main>

@endsection
@extends("common.footer")