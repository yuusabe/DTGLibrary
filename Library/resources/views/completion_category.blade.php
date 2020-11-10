<?php $title = "DTGBOOK【完了画面】";?>
<?php $csspath = "css/completion.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="apple">
        <div id="text">
            <p>完了しました。</p>
        </div>
        <button type="button" class="btn btn-outline-secondary" onclick="location.href='category.php'">
            OK
        </button>
    </div>
</main>

@endsection
@extends("common.footer")