<?php $title = "DTGBOOK【カテゴリ確認画面】";?>
<?php $csspath = "css/category_check.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="category">
        <p>{{$category}}</p>
        <!-- <div id="c_text"> 
       </div> -->
    </div>
    <div id="text">
        <p>カテゴリ変更の内容はこちらでよろしいですか？</p>
    </div>
    <div id="button_p">
        <form action="{{ route('category.change_send') }}" method="post">
            @csrf
            <div id="button">
                <button type="submit" class="btn btn-outline-secondary" name = "cancel">
                    キャンセル
                </button>
            </div>
        </form>
        <form action="{{ route('category.change_send') }}" method="post">
                @csrf
            <div id="button">
                <input type = "hidden" name="number" value="{{$num}}">
                <input type = "hidden" name="category" value="{{$category}}">
                <button type="submit" class="btn btn-outline-secondary" name = "change">
                    確定
                </button>
            </div>
        </form>
    </div>
</main>

@endsection