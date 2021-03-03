  <header　id="header">
    <div class="header-content">
      <h1 class="logo"><a href="<?php echo URLROOT; ?>/"><span class="logo-g">G</span>oMimap<i
            class="fas fa-trash-alt"></i></a></h1>


      <?php if (isset($_SESSION["user_nickname"])) : ?>
      <!-- もしユーザーがログインしてたら -->

      <ul class="header-list">
        <li><?php echo $_SESSION["user_nickname"] . "さん　ようこそ！"; ?></li>
        <li><a href="<?php echo URLROOT; ?>/">Top</a></li>
        <li><a href="<?php echo URLROOT; ?>/home/logout">Log Out</a></li>
        <li><a href="<?php echo URLROOT; ?>/mypage/main">My Page</a></li>
        <li><a href="#">English</a></li>
      </ul>

      <?php else : ?>
      <!-- もしユーザーがログインしてないなら -->

      <ul class="header-list">
        <li><a href="<?php echo URLROOT; ?>/home/login">Log In<br><span>ログイン</span></a></li>
        <li><a href="<?php echo URLROOT; ?>/home/signup">Join Us<br><span>会員登録</span></a></li>
        <li><a href="#">English<br> <span>　英語</span></a></li>
      </ul>

      <?php endif; ?>

    </div>
  </header>