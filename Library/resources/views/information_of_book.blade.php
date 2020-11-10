<?php $title = "DTGBOOK【書籍詳細画面】";?>
<?php $csspath = "css/information_of_book.css";?>

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
                    <p>貸出状況：貸出可</p>
                </div>
            </div>
        </div>
        <div id="button_p">
            <div id="button">
                <button type="button" class="btn btn-outline-secondary"  onclick="location.href='list_of_books.html'">
                    一覧へ
                </button>
            </div>
            <div id="button">
                <button type="button" class="btn btn-outline-secondary" onclick="location.href='lend_book.html'">
                    貸出手続きへ
                </button>
            </div>
        </div>
    </div>
 </main>

@endsection
@extends("common.footer")