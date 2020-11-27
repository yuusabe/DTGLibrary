<?php $title = "DTGBOOK【アカウント管理画面】";?>
<?php $csspath = "css/account.css";?>

@extends("common.header")
@section('body')

<main>
  <form method="post" action="{{ route('account_manage.post') }}">
    @csrf
    <!-- <form action="hhttps://www-cf.dtg-booklibrary.tk/account_management_check" method="get"> -->
    <div id="text">
      <p>登録する内容を入力してください。</p>
    </div>
    
      
    <div id=tb_p>
      <div>
        <div id="tb">
          <p>アカウント名</p>
        </div>
        <input type="text" id="tbox" name="account_name" placeholder="DTG太郎">
      </div>
      <div>
        <div id="tb">
          <p>メールアドレス</p>
        </div>
        <input type="email" id="tbox" name="address" placeholder="abc@example.com">
      </div>
      <div>
        <div id="tb">
          <p>パスワード</p>
        </div>
        <input type="text" id="tbox" name="password" placeholder="password">
      </div>
      <div id="radio">
        <div id="tb">
          <p>管理者権限</p>
        </div>
          <input type="radio" name="accounttype" value="一般ユーザ">一般ユーザ
          <input type="radio" name="accounttype" value="管理者ユーザ">管理者ユーザ
      </div>
    </div>
    <div id="button_p">
      <div id="button">
        <button type="submit" class="btn btn-outline-secondary" >
          アカウント登録
        </button>
      </div>
    </div>
  </form>

  <div id="text">
    <p>アカウント一覧</p>
  </div>

  @foreach($a_list as $a)
  <form method="post" action="{{ route('account_manage_change.if') }}">
  @csrf
  <div id="account_p">
    <div id="account">
      <nobr id="a_text">
      @if($a->manager_flag == FALSE)
      {{$a->account_name }}：一般ユーザ
      @else
      {{$a->account_name }}：管理者ユーザ
      @endif
      </nobr>
    </div>
    <div id="account">
      <div id="button_p">
        <div id="button">
          <button type="submit" class="btn btn-outline-secondary" value='{{$a->account_number}}' name = 'change'>
            編集
          </button>
        </div>
        <div id="button">
          <button type="submit" class="btn btn-outline-secondary" value='{{$a->account_number}}' name = 'delete'>
            削除
          </button>
        </div>
      </div>
    </div>
  </div>
  </form>
  @endforeach
<!--   </form> -->
</main>

@endsection