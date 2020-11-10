<?php $title = "DTGBOOK【仮パスワード送信画面】";?>
<?php $csspath = "css/password_change.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="text">
        <p>仮パスワードを発行いたします</p>
        <p>メールアドレスを入力してください</p>
    </div>
    <div id="mail">
        <form>
            <input type="email" id="email" name="email" size="50" value="abc@example.com">
        </form>
    </div>
    <div id="botton_p">
        <div id="button">
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='mypage.html'">
                キャンセル
            </button>
        </div>
        <div id="button">
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='completion.html'">
                送信
            </button>
        </div>
    </div>
</main>

@endsection
@extends("common.footer")