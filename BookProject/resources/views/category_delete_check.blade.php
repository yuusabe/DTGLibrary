<?php $title = "DTGBOOK【カテゴリ確認画面】";?>
<?php $csspath = "css/category_check.css";?>

@extends("common.header")
@section('body')

<main>
    <!-- <div id="category">
        <p>カテゴリ情報表示</p>
        <div id="c_text"> 
            <p>{{$category}}</p>
       </div>
    </div> -->
    <div id="text">
        <p>このカテゴリを削除してもよろしいですか？</p>
    </div>
    <div id="button_p">
        <form action="{{ route('category.delete_send') }}" method="post">
            @csrf
            <div id="button">
                <button type="submit" class="btn btn-outline-secondary" name = "cancel">
                    キャンセル
                </button>
            </div>
        </form>
        <form action="{{ route('category.delete_send') }}" method="post">
            @csrf
            <div id="button">
                <input type = "hidden" name="number" value="{{$num}}">
                <input type = "hidden" name="category" value="{{$category}}">
                <button type="submit" class="btn btn-outline-secondary" name = "delete">
                    確定
                </button>
            </div>
        </form>
    </div>
</main>

@endsection