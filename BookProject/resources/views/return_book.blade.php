<?php $title = "DTGBOOK【書籍返却画面】";?>
<?php $csspath = "css/return.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="book_p">
        <div id="book">
            <img src="{{$path}}" id="image" alt="表紙画像" width="135" height="130" />
        </div>
        <div id="book">
            <div id="text">
                <p id="title">タイトル：{{$ldata->title}}</p>
                <p>発行年：{{$ldata->year_of_issue}}</p>
                <p>著者：{{$ldata->Author}}</p>
                <p>出版社：{{$ldata->publisher}}</p>
                <p>カテゴリ：{{$category_name}}</p>
            </div>
        </div>
    </div>
    <div id="return">
        <p>この本を返却します</p>
    </div>
    <div id="button_p">
        <form action="{{ route('mypage.return_send') }}" method="post">
            @csrf
            <div id="button">
                <button type="submit" class="btn btn-outline-secondary" name = "cancel">
                    キャンセル
                </button>
            </div>
        </form>
        <form action="{{ route('mypage.return_send') }}" method="post">
            @csrf
            <div id="button">
                <input type = "hidden" name="number" value="{{$num}}">
                <button type="submit" class="btn btn-outline-secondary" name = "return">
                    返却
                </button>
            </div>
        </form>
    </div>
</main>

@endsection