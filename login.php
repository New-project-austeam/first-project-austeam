<?php
if (isset($_POST['submit'])) {


  // echo "mail has been sent";
  // mb_language("Japanese");
  // mb_internal_encoding("UTF-8");
  // $to = 'yuraokun0@gmail.com';
  // $title = "hehe";
  // $content = "hohofda";
  // echo mail($to, $title, $content);
  // if (mb_send_mail($to, $title, $content)) {
  //   echo "メールを送信しました";
  // } else {
  //   echo "メールの送信に失敗しました";
  // };
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
    <h3>logo</h3>

    <ul>
      <li><a href="#">sign up</a></li>
    </ul>

    <form method="post" action="login.php">
      <div class="row">
        <label for="email">Email</label>
        <input type="text" id="email">
      </div>
      <label for="password">password</label>
      <input type="password" id="password">
      </div>

      <button class="btn" name="submit">send</button>
    </form>

  </header>



</body>

</html>