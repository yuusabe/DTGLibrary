<?php $title = "DTGBOOK【書籍編集確認画面】";?>
<?php $csspath = "css/book_check.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="book_p">
        <div id="book">
            <img src="image/book_001.png" id="image" alt="表紙画像" width="135" height="130" />
        </div>
        <div id="book">
            <p>タイトル：RPAのはじめかた</p>
            <p>タイトル（フリガナ）：RPAのはじめかた</p>
            <p>発行年：2001年</p>
            <p>著者：技術評論社</p>
            <p>著者（フリガナ）：技術評論社</p>
            <p>出版社：技術評論社</p>
            <p>カテゴリ：RPA</p>
        </div>
    </div>
        <div id="text">
            <p>書籍の情報はこちらでよろしいですか。</p>
        </div>
        <div id="button_p">
            <div id="button">
                <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/book_change'">
                    キャンセル
                </button>
            </div>
            <div id="button">
                <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/completion'">
                    確定
                </button>
            </div>
        </div>
    </div>
</main>

@endsection