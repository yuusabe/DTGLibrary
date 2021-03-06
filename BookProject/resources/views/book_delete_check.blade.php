<?php $title = "DTGBOOK【書籍削除確認画面】";?>
<?php $csspath = "css/book_check.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="book_p">
        <div id="book">
            <img src="image/book_001.png" id="image" alt="表紙画像" width="135" height="130" />
        </div>
        <div id="book">
            <p id="title">タイトル：{{$booktitle}}</p>
            <p id="year">発行年：{{$year}}</p>
            <p id="author">著者：{{$author}}</p>
            <p id="publisher">出版社：{{$publisher}}</p>
            <p id="category">カテゴリ：{{$category}}</p>
        </div>
        <div id="text">
            <p>削除する本の内容はこちらでよろしいでしょうか。</p>
        </div>
        <div id="button_p">
            <form action="{{ route('book.delete_send') }}" method="post">
                @csrf
                <div id="button">
                <input type = "hidden" name="number" value="{{$num}}">
                    <button type="submit" class="btn btn-outline-secondary" name = "delete">
                        確定
                    </button>
                </div>
            </form>
            <form action="{{ route('book.delete_send') }}" method="post">
                @csrf
                <div id="button">
                    <button type="submit" class="btn btn-outline-secondary" name = "cancel">
                        キャンセル
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>

@endsection