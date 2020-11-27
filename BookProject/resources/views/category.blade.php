<?php $title = "DTGBOOK【カテゴリ管理画面】";?>
<?php $csspath = "css/category.css";?>
<?php $jspath = "js/add_del.js";?>

@extends("common.header")
@section('body')

<main>
    <div id="text">
        <p>カテゴリを編集してください。</p>
    </div>
    <div id="category_p">
        <div id="category">
            <div id="input_pluralBox">
                <div id="input_plural" style="display:inline-flex">
                  <input type="text" id="textbox" name="category" value="category" class="form-control" placeholder="入力して下さい">
                  <input type="button" id="add_del" value="追加" class="add pluralBtn btn btn-outline-secondary">
                  <input type="button" id="add_del" value="削除" class="del pluralBtn btn btn-outline-secondary">
                </div>
            </div>
        </div>
    </div>
    <div id="button_p">
        <div id="button">
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/list_of_books'">
                キャンセル
            </button>
        </div>
        <div id="button">
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/category_check'">
                変更
            </button>
        </div>
     </div>
</main>

@endsection