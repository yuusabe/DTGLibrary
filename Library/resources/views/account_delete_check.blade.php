<?php $title = "DTGBOOK【アカウント削除確認画面】";?>
<?php $csspath = "css/account_delete_check.css";?>

@extends("common.header")
@section('body')

<main>
  <div id="all">
    <div id="account">
      <p>アカウント情報表示</p>
    </div>
    <div id="text">
      <p>削除するアカウント情報はこちらでよろしいでしょうか</p>
    </div>
    <div id="button_p">
      <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='http://www.dtg-shosekikanri2020-test.tk/account_management'">
          キャンセル
        </button>
      </div>
      <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='http://www.dtg-shosekikanri2020-test.tk/completion'">
          確定
        </button>
      </div>
    </div>
  </div>
</main>

@endsection
@extends("common.footer")