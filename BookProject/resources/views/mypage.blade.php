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
            <p>アカウント名：{{$adata -> account_name}}</p>
            <p>メールアドレス：{{$adata -> mail_address}}</p>
            <p>パスワード：{{$adata -> password}}</p>
        </div>
    </div>
    <div id="boo">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-booklibrary.tk/password_change'">
            パスワード変更
        </button>
    </div>
    <div id="text">
        <p>貸出中書籍</p>
    </div>
    @foreach($ldata as $l)
    <div id="book_p">
    <div id="book">
                        <img src="image/book_001.png" id="image" alt="アイコン" width="135" height="130" />
                    </div>
                    <div id="book">
                        <p>タイトル：{{$l -> book_name}}</p>
                        <p>返却期限：{{$l -> return_day}}</p>
                    </div>
    </div>
    <div id="boo">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-booklibrary.tk/return_book'">
            返却手続きへ
        </button>
    </div>
    @endforeach
</main>

@endsection