<?php

include_once('./includes/db.php');
session_start();

// $stmt = $pdo->query("SELECT * FROM users");


$result = "";
if (isset($_GET['newuser'])) {
  echo "<b style='color: orange;'>Please Log in by using the email address and password that you signed up before</b>";
}

if (isset($_POST['submit_login'])) {
  $user_email = $_POST['user_email'];
  $user_password = $_POST['user_password'];

  $stmt = $pdo->prepare('SELECT * FROM users WHERE user_email=? AND user_password=?');
  $stmt->bindParam(1, $_POST['user_email'], PDO::PARAM_STR);
  $stmt->bindParam(2, $_POST['user_password'], PDO::PARAM_STR);
  $stmt->execute();
  $result = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($result) {
    $_SESSION['user_email'] = $result['user_email'];
    $_SESSION['user_nickname'] = $result['user_nickname'];

    header('Location: ./index.php');
  } else {
    echo "<b style='color: orange;'>Sorry the user is not registered yet with that email address and password... please try again..</b>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <header>
    <h3>Log in page</h3>

    <ul style="border: 1px solid orange">
      <li><a href="./index.php">Top Page</a></li>
      <li><a href="./signup.php">sign up</a></li>

    </ul>

    <form method="post" action="login.php">

      <div class="row">
        <label for="email">Email</label>
        <input type="text" id="email" name="user_email">
      </div>
      <label for="password">password</label>
      <input type="password" id="password" name="user_password">
      </div>

      <button class="btn" name="submit_login">send</button>
    </form>

  </header>

  <div class="main">
    <?php
    if ($result) {
      var_dump($result);
      // while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      //   echo "<b>user_email : </b> " . $row['user_email'] . " <br>";
      //   echo "<b>user_password: </b> " . $row['user_password'];
      //   echo "<br><hr>";
      // }

      echo $result["user_email"];
    }



    ?>
  </div>



</body>

</html>