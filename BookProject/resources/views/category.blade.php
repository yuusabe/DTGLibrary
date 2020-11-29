<?php $title = "DTGBOOK【カテゴリ管理画面】";?>
<?php $csspath = "css/category.css";?>
<?php $jspath = "js/add_del.js";?>

@extends("common.header")
@section('body')

<main>
    <div id="text">
        <p>カテゴリを追加してください。</p>
    </div>
    <div id="category_a">
        <form action="{{ route('category.post') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div id="category">
                <input type="text" id="textbox" name="category" class="form-control" placeholder="入力して下さい">
            </div>
            <div id="button_p">
                <div id="button">
                    <button type="submit" class="btn btn-outline-secondary" name = "add">
                        登録
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div id="text">
        <p>カテゴリを編集してください。</p>
    </div>
    <div id="category_p">
        @foreach($category as $c)
            <div id="category_ch">
                <input type="text" id="textbox_ch" name="category" class="form-control" value = "{{c['category_name']}}">
            </div>
            <div id="category_ch">
                <div id="button_p">
                    <div id="button">
                        <button type="submit" class="btn btn-outline-secondary" name = "change">
                            編集
                        </button>
                    </div>
                    <div id="button">
                        <button type="submit" class="btn btn-outline-secondary" name = "delete">
                            削除
                        </button>
                </div>
        @endforeach
        </div>
    </div>
</main>

@endsection