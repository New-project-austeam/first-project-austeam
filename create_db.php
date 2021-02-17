<?php
include_once('./config.php');

$dbh = new PDO($dsn, $user, $root_pass);
try {

  $dbh->exec('CREATE DATABASE IF NOT EXISTS gominet');
} catch (Exception $e) {
  echo $e;
}

$dsn = "mysql:host=localhost;dbname=gominet";
$dbh = new PDO($dsn, $user, $root_pass);

try {
  $sql = "CREATE TABLE IF NOT EXISTS users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
user_email VARCHAR(50),
user_password VARCHAR(50)
)";
  $res = $dbh->query($sql);
} catch (Exception $e) {
  echo $e;
}