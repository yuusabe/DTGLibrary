<?php $title = "DTGBOOK【アカウント削除確認画面】";?>
<?php $csspath = "css/account_check.css";?>

@extends("common.header")
@section('body')
<main>
  <div id="account">
    <p>アカウント名：{{$name}}</p>
    <p>メールアドレス：{{$address}}</p>
    <p>アカウントタイプ：{{$manager_flag}}</p>
  </div>
  <div id="text">
    <p>削除するアカウント情報はこちらでよろしいでしょうか。</p>
  </div>
  <div id="button_p">
    <form method="post" action= "{{ route('account_delete.send') }}">
      @csrf
      <div id="button">
        <input type = "hidden" name="number" value="{{$num}}">
        <button type="submit" class="btn btn-outline-secondary" name = "delete">
          確定
        </button>
      </div>
    </form>
    <form method="post" action= "{{ route('account_delete.send') }}">
      @csrf
      <div id="button">
        <button type="submit" class="btn btn-outline-secondary" name = "cancel">
          キャンセル
        </button>
      </div>
    </form>
  </div>
</main>

@endsection