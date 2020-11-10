<link href="css/login.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="/Users/user/Documents/bootstrap/dtg_book_logo.png" id="icon" alt="アイコン" />
    </div>

    <!-- Login Form -->
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="メールアドレス">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="パスワード">
      <input type="submit" class="fadeIn fourth" value="ログイン" onclick="location.href='http://localhost:8001/書籍一覧'">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">パスワードを忘れた方はこちら</a>
    </div>

  </div>
</div>