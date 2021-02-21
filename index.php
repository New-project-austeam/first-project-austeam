<?php
session_start();
?>



<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/cdd8505698.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./dist/css/main.css">
</head>

<body id="index">

  <header　id="header">
    <div class="header-content">
      <h1 class="logo"><a href="index.php">ゴミ<i class="fas fa-trash-alt"></i>マップ</a></h1>


      <ul class="header-list">
        <?php
        if (isset($_SESSION['user_email'])) {
          echo "<li><a>My page</a></li>";
          echo "<li><a href='./logout.php'>Log out</a></li>";
        } else {
          echo "<li><a href='./login.php'>Sign In</a></li>";
          echo "<li><a href='#'>Join Us</a></li>";
          echo "<li><a href='#'>English</a><li>";
        }

        ?>
      </ul>
    </div>
  </header>
  <main>
    <section class="top-visual">

      <div class="msg-1">
        <h2>ゴミ拾いで</h2>
        <span  class="slide">
        <h2>繋がる出会い</h2>
        </span>
      </div>

      <div class="msg-2">
        <h2>仲間と一緒に</h2>
        <span  class="slide">
          <h2> 海を守りませんか？</h2>
          </span>
      </div>
    </section>


    <section　class="instruction">
      <div>
        <div class="sec-title">
          <h3>このサイトの使い方</h3>
        </div>


        <div class="how-to">
          <h4>Step 1</h4>
          <img>
          <p>マイアカウントを作る</p>
        </div>

        <div class="how-to">
          <h4>Step 2</h4>
          <img>
          <p>イベントに参加・作成</p>
        </div>

        <div class="how-to">
          <h4>Step 3</h4>
          <img>
          <p>準備　地方自治体のゴミ処分の仕方を確認。必要な持ち物を用意する。天候に合わせた服装</p>
        </div>

        <div class="how-to">
          <h4>Step 4</h4>
          <img>
          <p>イベント後、あなたの経験を記録やシェア</p>
        </div>

      </div>
    </section>

    <section class="new-event">
      <div>
      <h3 class="sec-title">新着のイベント</h3>
      </div>

      <div><!-- ここでイベントを反映させたい -->
        <img>
        <img>
        <img>
        <img>
      </div>
    </section>

    <section>
      <h3 class="sec-title">ゴミマップに登録する</h3>
      <button type="submit"><a href="#">Join Us</a></button>
      <div class="sns">
      <i class="fab fa-facebook"></i>
      <i class="fab fa-twitter"></i>
      <i class="fab fa-instagram-square"></i>

      </div>
    </section>

    <footer>
      <div>
      <h5 class="logo"><a href="index.php">ゴミ<i class="fas fa-trash-alt"></i>マップ</a></h5>

      <uL>
        <li><a href="#">サイトポリシー</a></li>
        <li><a href="#">サイト設立の経緯</a></li>
        <li><a href="#">お問い合わせ</a></li>
      </uL>
      </div>



    </footer>





  </main>
</body>


</html>
