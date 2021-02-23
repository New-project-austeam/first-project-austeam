<?php


namespace App\Models;

use PDO;


class Database extends \Core\Model
{



  public static function getAll()
  {

    $pdo = static::getDB();
    $stmt = $pdo->prepare('SELECT * FROM users');
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
  }
}