<?php $title = "DTGBOOK【アカウント編集確認画面】";?>
<?php $csspath = "css/account_check.css";?>

@extends("common.header")
@section('body')
<main>
  <form method="post" action="{{ route('account_change.send1') }}">
    @csrf
    <div id="account">
      <p>アカウント名：{{ $input["account_name"] }}</p>
      <p>メールアドレス：{{ $input["address"] }}</p>
      <p>アカウントタイプ：{{ $input["accounttype"] }}</p>
    </div>
    <div id="text">
      <p>アカウント編集の変更内容はこちらでよろしいでしょうか。</p>
    </div>
    <div id="button_p">
      <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-booklibrary.tk/account_change'">
          キャンセル
        </button>
      </div>
      <div id="button">
        <button type="submit" class="btn btn-outline-secondary">
          確定
        </button>
      </div>
    </div>
  </form>
</main>

@endsection