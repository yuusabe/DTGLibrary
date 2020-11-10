<?php $title = "DTGBOOK【アカウント登録確認画面】";?>
<?php $csspath = "css/account_management_check.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="all">
        <div id="account">
            <p>アカウント情報表示</p>
        </div>
        <div id="text">
            <p>アカウント登録の内容はこちらでよろしいですか？</p>
        </div>
        <div id="button_p">
            <div id="button">
                <button type="button" class="btn btn-outline-secondary" onclick="location.href='http://www.dtg-shosekikanri2020-test.tk/account_management'">
                    キャンセル
                </button>
            </div>
            <div id="button">
                <button type="button" class="btn btn-outline-secondary" onclick="location.href='http://www.dtg-shosekikanri2020-test.tk/completion'">
                    確定
                </button>
            </div>
        </div>
    </div>
</main>

@endsection
@extends("common.footer")