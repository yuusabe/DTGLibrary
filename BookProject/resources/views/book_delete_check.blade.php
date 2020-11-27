<?php $title = "DTGBOOK【書籍削除確認画面】";?>
<?php $csspath = "css/book_check.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="book_p">
        <div id="book">
            <img src="image/book_001.png" id="image" alt="表紙画像" width="135" height="130" />
        </div>
        <div id="book">
            <p id="title">タイトル：RPAのはじめかた</p>
            <p id="title_h">タイトル（フリガナ）：RPAのはじめかた</p>
            <p id="year">発行年：2001年</p>
            <p id="author">著者：技術評論社</p>
            <p id="author_h">著者（フリガナ）：技術評論社</p>
            <p id="publisher">出版社：技術評論社</p>
            <p id="category">カテゴリ：RPA</p>
        </div>
        <div id="text">
            <p>削除する本の内容はこちらでよろしいでしょうか。</p>
        </div>
        <div id="button_p">
            <div id="button">
                <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/completion'">
                    確定
                </button>
            </div>
            <div id="button">
                <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/book_change'">
                    キャンセル
                </button>
            </div>
        </div>
    </div>
</main>

@endsection