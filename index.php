<?php
session_start();





?>



<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <ul style="border: 1px solid orange">
    <?php
    if (isset($_SESSION['user_email'])) {
      echo "<li><a>My page</a></li>";
      echo "<li><a href='./logout.php'>Log out</a></li>";
    } else {
      echo "<li><a href='./login.php'>Login</a></li>";
    }

    ?>
  </ul>
  naoko
  nakazawa


  fkdsokd

  fdijflsid





</body>


</html>