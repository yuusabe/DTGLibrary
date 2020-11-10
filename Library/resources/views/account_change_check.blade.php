<?php $title = "DTGBOOK【アカウント編集確認画面】";?>
<?php $csspath = "css/account_change_check.css";?>

@extends("common.header")
@section('body')
<main>
  <div id="all">
    <div id="account">
      <p>アカウント情報表示</p>
    </div>
    <div id="text">
      <p>アカウント編集の変更内容はこちらでよろしいでしょうか</p>
    </div>
    <div id="button_p">
      <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='http://www.dtg-shosekikanri2020-test.tk/account_change'">
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