<?php $title = "DTGBOOK【書籍編集確認画面】";?>
<?php $csspath = "css/book_change_check.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="all">
        <div id="book">
            <p>書籍情報表示</p>
        </div>
        <div id="text">
            <p>書籍の情報はこちらでよろしいですか？</p>
        </div>
        <div id="button_p">
            <div id="button">
                <button type="button" class="btn btn-outline-secondary" onclick="location.href='book_change.html'">
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