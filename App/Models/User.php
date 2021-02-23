<?php


namespace App\Models;

use PDO;


class User extends \Core\Model
{

  public static function signup($user_nickname, $user_email, $user_password)
  {
    try {
      $pdo = static::getDB();
      $stmt = $pdo->prepare('SELECT * FROM users WHERE user_email=?');
      $stmt->bindParam(1, $user_email, PDO::PARAM_STR);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);

      if (!$result) {


        echo "no one";
        $sql = 'insert into users (user_email, user_password, user_nickname) values (?, ?, ?)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array($user_email, $user_password, $user_nickname));

        return true;
      } else {
        return false;
      }
    } catch (\PDOException $e) {
      throw new \Exception("No route not matched");
    }
  }


  public static function login($user_email, $user_password)
  {
    $pdo = static::getDB();
    $stmt = $pdo->prepare('SELECT * FROM users WHERE user_email=? AND user_password=?');
    $stmt->bindParam(1, $user_email, PDO::PARAM_STR);
    $stmt->bindParam(2, $user_password, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
      session_start();
      $_SESSION['user_email'] = $result['user_email'];
      $_SESSION['user_nickname'] = $result['user_nickname'];
      session_write_close();

      return true;
    } else {
      return false;
    }
  }

  public static function logout()
  {
    session_start();
    $_SESSION = array();
    session_write_close();
  }
}