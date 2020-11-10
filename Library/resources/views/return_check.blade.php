<?php $title = "DTGBOOK【返却確認画面】";?>
<?php $csspath = "css/return_check.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="all">
        <div id="book_p">
            <div id="book">
                <img src="image/book_001.png" id="icon" alt="表紙画像" width="135" height="130" />
            </div>
            <div id="book">
                <div id="text">
                    <p id="title">タイトル：RPAのはじめかた</p>
                    <p>発行年：2001年</p>
                    <p>著者：DTG花子</p>
                    <p>出版社：技術評論社</p>
                    <p>カテゴリ：RPA</p>
                </div>
            </div>
        </div>
        <div id="return">
            <p>返却書籍の内容はこちらでよろしいですか？</p>
        </div>
        <div id="button_p">
            <div id="button">
                <button type="button" class="btn btn-outline-secondary" onclick="location.href='return_book.html'">
                    キャンセル
                </button>
            </div>
            <div id="button">
                <button type="button" class="btn btn-outline-secondary" onclick="location.href='completion.html'">
                    確定
                </button>
            </div>
        </div>
    </div>
</main>

@endsection
@extends("common.footer")