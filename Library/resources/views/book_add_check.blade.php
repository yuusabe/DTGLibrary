<?php $title = "DTGBOOK【書籍登録確認画面】";?>
<?php $csspath = "css/book_add_check.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="all">
        <div id="book">
            <p>書籍情報表示</p>
        </div>
        <div id="text">
            <p>登録する書籍の内容はこちらでよろしいですか？</p>
        </div>
        <div id="button_p">
            <div id="button">
                <button type="button" class="btn btn-outline-secondary" onclick="location.href='book_add.html'">
                    キャンセル
                </button>
            </div>
            <div id="button">
                <button type="button" class="btn btn-outline-secondary" onclick="location.href='completion_book.html'">
                    確定
                </button>
            </div>
        </div>
    </div>
</main>

@endsection
@extends("common.footer")