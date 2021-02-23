<?php

// include_once("./includes/function.php");

if (isset($_SESSION['user_nickname'])) {
  $nickname = $_SESSION['user_nickname'];
} else {
  $nickname = "";
}

?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/dist/css/main.css">

</head>

<body>