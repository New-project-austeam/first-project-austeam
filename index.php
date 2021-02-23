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
      <h1 class="logo"><a href="index.php"><span class="logo-g">G</span>oMimap<i class="fas fa-trash-alt"></i></a></h1>


      <ul class="header-list">
        <?php
        if (isset($_SESSION['user_email'])) {
          echo "<li><a>My page</a></li>";
          echo "<li><a href='./logout.php'>Log out</a></li>";
        } else {
          echo "<li><a href='./login.php'>Log In<br><span>ログイン</span></a></li>";
          echo "<li><a href='#'>Join Us<br><span>会員登録</span></a></li>";
          echo "<li><a href='#'>English<br>　<span>言語</span></a><li>";
        }

        ?>
      </ul>
    </div>
  </header>

  <main>

    <section class="top-visual" id=slideshow>


      <div class="msg-1">
        <h2>ゴミ拾いで</h2>
        <span class="slide">
          <h2>繋がる出会い</h2>
        </span>
      </div>

      <div class="msg-2">
        <h2>仲間と一緒に</h2>
        <span class="slide">
          <h2> 海を守りませんか？</h2>
        </span>
      </div>
    </section>


    <section class="main-contents">

      <span class="space">スペース</span>

      <section class="instruction">

        <div class="section-title">


          <h3>HOW TO START</h3>
          <p>このサイトのはじめ方</p>
        </div>

        <div class="how-to">
          <h4 class="step-ribbon">Step.1</h4>
          <div class="how-to-contents">
            <p>
              アカウント登録をして、マイページを作成！
            </p>
            <img src="./dist/images/g0462.png" width="150px">
          </div>

        </div>


        <div class="how-to">
          <h4 class="step-ribbon">Step.2</h4>
          <div class="how-to-contents">
            <p>イベントに参加・作成</p>
            <img src="./dist/images/y0805.png" width="150px" 　alt="イベントを開催、参加" 　>

          </div>

        </div>

        <div class="how-to">
          <h4 class="step-ribbon">Step.3</h4>
          <div class="how-to-contents">
            <p>準備　地方自治体のゴミ処分の仕方を確認。必要な持ち物を用意する。天候に合わせた服装</p>
            <img src="./dist/images/r0590.png" width="150px" 　alt="準備をしてイベントに参加">
          </div>

        </div>

        <div class="how-to">
          <h4 class="step-ribbon">Step.4</h4>
          <div class="how-to-contents">
            <p>イベント後、あなたの経験を記録やシェア</p>
            <img src="./dist/images/g0313.png" width="150px" alt="イベントの経験をシェア">
          </div>


          <div　class="how-to">


            <div class="how-to-contents">
              <div>
                <i class="fas fa-angle-double-down arrow"></i>
              </div>
              <p>あなたの行動が<br>環境破壊を止め、野生動物や自然を守る</p>

              <img src="./dist/images/Wavy_Eco-08_Single-04.jpg" width="230px" alt="地球のと動物">
              <p><a href='https://jp.freepik.com/vectors/abstract'>Vectorjuice - jp.freepik.com</a></p>



            </div>
          </div>

        </div>

      </section><!-- instruction -->
      <span class="space">スペース</span>



      <section class="new-event">
        <div class="section-title">
          <h3>NEW EVENT</h3>
          <p>新着のイベント</p>
        </div>

        <div>
          <!-- ここでイベントを反映させたい -->
          <img>
          <img>
          <img>
          <img>
        </div>
      </section>
      <span class="space">スペース</span>

      <section class="registration">
        <div class="section-title">
          <h3>JOIN US</h3>
          <p>ゴミマップに登録する</p>
        </div>

        <div class="join-button">
          <button type="submit"><a href="#">Join Us</a></button>
        </div>

        </div>
        <div class="sns">
          <a href="#">
            <i class="fab fa-facebook"></i>
          </a>


          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>



          <a href="#">
            <i class="fab fa-instagram-square"></i>
          </a>

          <div class="eco-image">
            <img src="./dist/images/8441.jpg" width="190px">
            <p><a href='https://www.freepik.com/vectors/tree'>Tree vector created by pch.vector - www.freepik.com</a>
            </p>
          </div>


        </div>
      </section>
      <span class="space">スペース</span>


      <footer class="footer">
        <div class="footer-content">

          <h5 class="logo"><a href="index.php"><i class="fas fa-trash-alt"></i><span class="logo-g">G</span>oMimap</a>
          </h5>




          <ul class="footer-list">
            <li><a href="#">サイトポリシー</a></li>
            <span>|</span>
            <li><a href="#">サイト設立の経緯</a></li>
            <span>|</span>
            <li><a href="#">お問い合わせ</a></li>
          </ul>

        </div>
      </footer>


    </section><!-- main-contents -->


  </main>











<script src="./dist/js/index.js"></script>
</body>


</html>