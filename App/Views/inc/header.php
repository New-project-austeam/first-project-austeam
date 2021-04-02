  <header class="main_header">
    <div class="header-contents <?php echo isset($_SESSION["user_name"]) ? "header-color": ""; ?>">
      <h1 class="logo"><a href="<?php echo URLROOT; ?>/"><i
            class="fas fa-trash-alt"></i><span class="logo-g">G</span>oMimap</a></h1>

      <!--
              <div class="header-content <?php echo isset($_SESSION["user_name"]) ? "header-color" : ""; ?>">

             -->


      <?php if (isset($_SESSION["user_name"])) : ?>

      <!-- もしユーザーがログインしてたら -->
      <div class="account-name">
      <img
            src="<?php echo isset($_SESSION['user_image']) ? URLROOT . $_SESSION['user_image'] : URLROOT . "/dist/uploads/default/default_icon.png"; ?>"
            alt="" style="width: 50px; ">
      <?php echo $_SESSION["user_name"] . "さん　ようこそ！"; ?>
      </div>

      <ul class="header-list2">
        <li><a href="<?php echo URLROOT; ?>/" class="list">Top</a></li>
        <li><a href="<?php echo URLROOT; ?>/mypage/mypageTop" class="list">My page</a></li>
        <li><a href="#"class="list">お知らせ</a></li>
        <li><a href="<?php echo URLROOT; ?>/users/logout" class="list">Log out</a></li>

      </ul>


<div class="navbar">

      <?php else : ?>
      <!-- もしユーザーがログインしてないなら -->

      <ul class="header-list">
      <!-- これ取り除いてる a href="<?php echo URLROOT; ?>/users/login" -->
        <li id="login-test"><a>Log In<br><span>ログイン</span></a></li>
        <li id="signup-test"><a>Join Us<br><span>会員登録</span></a></li>
        <li><a href="#">English<br> <span>　英語</span></a></li>


      </ul>



      <?php endif; ?>

      <a class="navBtn" id="navBtn">
      <div></div>
      <div></div>
      <div></div>
    </a>
    </div>

    </div>






  </header>
