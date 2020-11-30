<?php $title = "DTGBOOK【貸出情報画面】";?>
<?php $csspath = "css/RPA.css";?>

@extends("common.header")
@section('body')
<main>
  <table border="1" id="apple">
    <thead>
      <tr>
        <th id="user">ユーザ</th>
        <th id="mail">メールアドレス</th>
        <th id="title">書籍タイトル</th>
        <th id="day">書籍返却期日</th>
      </tr>
    </thead>
    <tbody>
    @foreach($lenddata as $lend)
      <tr>
        <td>{{$lend->account_name}}</td>
        <td>{{$lend->mail_address}}</td>
        <td>{{$lend->title}}</td>
        <td>{{$lend->return_day}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
 </main> 

@endsection