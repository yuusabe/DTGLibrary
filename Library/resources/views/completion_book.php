<?php $title = "DTGBOOK【完了画面】";?>
<?php $csspath = "css/completion.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="apple">
        <p>
            完了しました。
        </p>
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='book_add.html'">
            OK
        </button>
    </div>
</main>

@endsection
@extends("common.footer")