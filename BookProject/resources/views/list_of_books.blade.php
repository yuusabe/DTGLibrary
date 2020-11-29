<?php $title = "DTGBOOK【書籍一覧】";?>
<?php $csspath = "css/list_of_books.css";?>
<?php $jspath = "js/dropdown.js";?>

@extends("common.header")
@section('body')

<main>
<!-- バリューはkeywordの変数 -->
<!-- <form action="http://54.248.141.223/list_of_books" method="GET">
  <div id="search">
    <input id="sbox" name="s" type="text" value=keyword placeholder="キーワードを入力" />
  
  <div class="dropdown">
    <button type="button" id="dropdown" id="search"
      class="btn btn-outline-secondary dropdown-toggle"
      data-toggle="dropdown"
      aria-haspopup="true"
      aria-expanded="false">
    カテゴリ検索
    </button>
    <ul class="dropdown-menu">
      <li><button class="dropdown-item" value="RPA">RPA</button></li>
      <li><button class="dropdown-item" value="統計学">統計学</button></li>
      <li><button class="dropdown-item" value="AI">AI</button></li>
    </ul>
  </div>
  
  <div class="dropdown">
    <button type="button"  id="dropdown" id="search"
      class="btn btn-outline-secondary dropdown-toggle"
      data-toggle="dropdown"
      aria-haspopup="true"
      aria-expanded="false">
    並び替え
    </button>
    <ul class="dropdown-menu">
      <li><button class="dropdown-item" value="発行年">発行年</button></li>
      <li><button class="dropdown-item" value="著者">著者</button></li>
      <li><button class="dropdown-item" value="タイトル">タイトル</button></li>
    </ul>
  </div>
  
  <input id="sbtn" id="search" type="submit" value="検索" /></div>
  </form> -->


  @foreach($data as $d)
  <div id="book_p">
    <div id="book">
      <img src="{{$d->path}}" id="image" alt="表紙画像" width="135" height="135" />
    </div>
    
    <div id="book">
      <div id="text">
        <p id="category">
        {{$d -> category_name}}
        </p>
        <p id="title">タイトル：{{$d -> title}}</p>
        <p>発行年：{{$d -> year_of_issue}}</p>
        <p>出版社：{{$d -> publisher}}</p>
        @if(empty($d->return_flag))
          <p>貸出状況：貸出可</p>
        @elseif($d->return_flag == TRUE)
          <p>貸出状況：貸出可</p>
        @else
          <p>貸出状況：貸出中</p>
        @endif
      </div>
    </div>
  </div>
  <div id="button_p">
    <div id="button">

    <form action="{{ route('book.i_post') }}" method="post" enctype="multipart/form-data">
      @csrf
      <input type = "hidden" name="number" value="{{$d->book_number}}">
        <button type="submit" class="btn btn-outline-secondary" name = "info">
          詳細表示
        </button>
    </form>
    </div>
    <div id="button">
    <form action="{{ route('book.i_post') }}" method="post" enctype="multipart/form-data">
      @csrf
      <input type = "hidden" name="number" value="{{$d->book_number}}">
      <input type = "hidden" name="path" value="{{$d->path}}"> 
      <input type = "hidden" name="category" value="{{$d->category_name}}">

      <?php
      if (!empty($_COOKIE["mflag"]))
      {
        $mflag = $_COOKIE["mflag"];
      }
      else
      {
          $mflag = "なし";
      }
      if ($mflag == "1")
      {
          echo '<button type="submit" class="btn btn-outline-danger" name = "change">
                書籍編集
              </button>';
            }
      ?>
    </form>
    </div>
  </div>
  @endforeach

  <div id="button_p">
    <div id="button" id="next">
      <button type="button" class="btn btn-outline-success" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/information_of_book'">
        前
      </button>
    </div>
    <div id="button" id="next">
      <button type="button" class="btn btn-outline-success">
        次
      </button>
    </div>
  </div>
</main>
@endsection