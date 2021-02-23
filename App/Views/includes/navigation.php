  <header　id="header">
    <div class="header-content">
      <h1 class="logo"><a href="index.php">ゴミ<i class="fas fa-trash-alt"></i>マップ</a></h1>


      <?php if (isset($_SESSION["user_nickname"])) : ?>
      <!-- もしユーザーがログインしてたら -->

      <ul class="header-list">
        <li><?php echo $_SESSION["user_nickname"] . "さん　ようこそ！"; ?></li>
        <li><a href="/">Top</a></li>
        <li><a href="/home/logout">Log Out</a></li>
        <li><a href="/mypage/main">My Page</a></li>
        <li><a href="#">English</a></li>
      </ul>

      <?php else : ?>
      <!-- もしユーザーがログインしてないなら -->

      <ul class="header-list">
        <li><a href="/home/login">Log In</a></li>
        <li><a href="/home/signup">Join Us</a></li>
        <li><a href="#">English</a></li>
      </ul>

      <?php endif; ?>

    </div>
  </header>