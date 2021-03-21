  <header class="main_header">
    <div class="header-content <?php echo isset($_SESSION["user_name"]) ? "header-color" : ""; ?>">
      <h1 class="logo"><a href="<?php echo URLROOT; ?>/"><span class="logo-g">G</span>oMimap<i class="fas fa-trash-alt"></i></a></h1>

      <!--
              <div class="header-content <?php echo isset($_SESSION["user_name"]) ? "header-color" : ""; ?>">

             -->


      <?php if (isset($_SESSION["user_name"])) : ?>
        <!-- もしユーザーがログインしてたら -->


        <ul class="header-list">
          <li><?php echo $_SESSION["user_name"] . "さん　ようこそ！"; ?></li>
          <li><a href="<?php echo URLROOT; ?>/">Top</a></li>
          <li><a href="<?php echo URLROOT; ?>/users/logout">Log Out</a></li>
          <li><a href="<?php echo URLROOT; ?>/mypage/mypageTop">My Page</a></li>
          <li><a href="#">Message 1️⃣</a></li>
          <li><a href="#">English</a></li>
        </ul>

      <?php else : ?>
        <!-- もしユーザーがログインしてないなら -->

        <ul class="header-list">
          <li><a href="<?php echo URLROOT; ?>/users/login">Log In<br><span>ログイン</span></a></li>
          <li><a href="<?php echo URLROOT; ?>/users/signup">Join Us<br><span>会員登録</span></a></li>
          <li><a href="#">English<br> <span>　英語</span></a></li>
        </ul>

      <?php endif; ?>

      <button id="login-test">ログイン</button>
      <button id="signup-test">Join In</button>

    </div>



  </header>
