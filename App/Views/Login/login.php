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