<?php $title = "DTGBOOK【書籍一覧】";?>
<?php $csspath = "css/book_change.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="text">
        <p>書籍を編集します〜情報表示したり画像を選択</p>
    </div>
    
    <div id="button">
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='list_of_books.html'">
            キャンセル
        </button>
    </div>
    <div id="button_p">
        <div id="button">
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='book_change_check.html'">
                書籍編集
            </button>
        </div>
        <div id="button">
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='book_delete_check.html'">
                削除
            </button>
        </div>
    </div>
</main>

@endsection
@extends("common.footer")