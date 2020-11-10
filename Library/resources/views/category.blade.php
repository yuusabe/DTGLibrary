<?php $title = "DTGBOOK【カテゴリ管理画面】";?>
<?php $csspath = "css/category.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="category">
        <p>カテゴリ</p>
    </div>
    <button type="button" class="btn btn-outline-secondary">
        削除
    </button>
    <div id="button_p">
        <div id="button">
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='list_of_books.html'">
                キャンセル
            </button>
        </div>
        <div id="button">
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='category_check.html'">
                変更
            </button>
        </div>
    </div>
</main>

@endsection
@extends("common.footer")