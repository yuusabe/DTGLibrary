<?php $title = "DTGBOOK【マイページ】";?>
<?php $csspath = "css/mypage.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="account_p">
        <div id="text">
            <p>アカウント登録情報</p>
        </div>
        <div id="account">
            <p>アカウント名：DTG太郎</p>
            <p>メールアドレス：tarou@pasona.tech</p>
            <p>パスワード：・・・・・・・・・・</p>
        </div>
    </div>
    <div id="boo">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/password_change'">
            パスワード変更
        </button>
    </div>
    <div id="text">
        <p>貸出中書籍</p>
    </div>
    <div id="book_p">
        <div id="book">
            <img src="image/book_001.png" id="image" alt="アイコン" width="135" height="130" />
        </div>
        <div id="book">
            <p>タイトル：RPAのはじめかた</p>
            <p>発行年：2001年</p>
            <p>著者：DTG花子</p>
            <p>返却期限：yyyy/MM/dd</p>
        </div>
    </div>
    <div id="boo">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/return_book'">
            返却手続きへ
        </button>
    </div>
</main>

@endsection