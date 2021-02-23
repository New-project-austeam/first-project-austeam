<?php
include_once('config.php');

$dbh = new PDO($dsn, $user, $root_pass);
try {

  $dbh->exec('CREATE DATABASE IF NOT EXISTS gominet');
} catch (Exception $e) {
  echo $e;
}

$dsn = "mysql:host=localhost;dbname=$db_name";
$dbh = new PDO($dsn, $user, $root_pass);

// drop_user_table("users");
try {
  $sql = "CREATE TABLE IF NOT EXISTS users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
user_email VARCHAR(50),
user_password VARCHAR(50)
)";
  $res = $dbh->query($sql);


  add_column_if_not_exist("users", "user_nickname");
} catch (Exception $e) {
  echo $e;
}

function add_column_if_not_exist($table, $column, $column_attr = "VARCHAR( 255 ) NULL")
{

  global $dbh;
  $exists = false;
  $stmt = $dbh->prepare("show columns from $table");
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach ($result as $col) {
    if ($col['Field'] == $column) {
      $exists = true;
      break;
    }
  }
  if (!$exists) {
    $dbh->query("ALTER TABLE `$table` ADD `$column`  $column_attr");
  } else {
  }
}

function drop_user_table($tbl_name)
{
  global $dbh;
  $dbh->query("DROP TABLE IF EXISTS $tbl_name");
}