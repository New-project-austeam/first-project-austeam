<?php


include_once('./db.php');
$message = "";

if (isset($_SESSION["login"])) {
  session_regenerate_id(TRUE);
  header("Location: success.php");
  exit();
}

if (isset($_POST['submit'])) {


  $user_email = $_POST['user_email'];
  $user_password = $_POST['user_password'];


  //ユーザー名またはパスワードが送信されて来なかった場合
  if (empty($user_email) || empty($user_password)) {
    $message = "ユーザー名とパスワードを入力してください";
  }
  //ユーザー名とパスワードが送信されて来た場合
  else {
    //post送信されてきたユーザー名がデータベースにあるか検索
    try {
      $stmt = $pdo->prepare('SELECT * FROM users WHERE user_email=?');
      $stmt->bindParam(1, $_POST['user_email'], PDO::PARAM_STR);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);

      if (!$result) {


        echo "no one";
        $sql = 'insert into users (user_email, user_password) values (?, ?)';
        $stmt = $pdo->prepare($sql);
        $flag = $stmt->execute(array($user_email, $user_password));
        header("Location: login.php?newuser=true", true, 307);
      } else {
        echo "<b style='color: orange;'>that email address is already used...<br>Please try diffrent email address for signing up</b>";
      }
    } catch (PDOException $e) {
      exit('データベースエラー');
    }
  }
}





echo $message;




// echo "mail has been sent";
// mb_language("Japanese");
// mb_internal_encoding("UTF-8");
// $to = 'yuraokun0@gmail.com';
// $title = "hehe";
// $content = "hohofda";
// echo mail($to, $title, $content);
// if (mb_send_mail($to, $title, $content)) {
// echo "メールを送信しました";
// } else {
// echo "メールの送信に失敗しました";
// };




?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./dist/css/main.css">
</head>

<body>

  <header>
    <h3>sign up page</h3>

    <ul style="border: 1px solid orange">
      <li><a href="./signup.php">sign up</a></li>
      <li><a href="./login.php">login up</a></li>
    </ul>

    <form method="post" action="signup.php">
      <div class="row">
        <label for="email">Email</label>
        <input type="text" id="email" name="user_email">
      </div>
      <label for="password">password</label>
      <input type="password" id="password" name="user_password">
      </div>

      <button class="btn" name="submit">send</button>
    </form>

  </header>


  <script src="./dist/js/index.js"></script>
</body>

</html>