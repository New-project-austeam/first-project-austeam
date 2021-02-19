  <div class="header">
    <ul style="border: 1px solid orange">
      <?php
      if (isset($_SESSION['user_email'])) {
        $pageURL = get_page_url();

        if ($pageURL === "mypage.php") {

          echo "<li><a href='./index.php'>Top Page</a></li>";
          echo "<li><a href='./logout.php'>Log out</a></li>";
        } else {
          echo "<li><a href='./mypage.php'>My page</a></li>";
          echo "<li><a href='./logout.php'>Log out</a></li>";
        }
      } else {
        echo "<li><a href='./login.php'>Login</a></li>";
      }

      ?>
    </ul>


  </div>