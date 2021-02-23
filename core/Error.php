<?php

namespace Core;


class Error
{

  public static function errorHandler($level, $message, $file, $line)
  {
    if (error_reporting() !== 0) {
      throw new \ErrorException($message, 0, $level, $file, $line);
    }
  }


  public static function exceptionHandler($exception)
  {

    if (\App\Config::SHOW_ERRORS) {
      echo "<h1>Fatal Error</h1>";
      echo "<p>Uncought exception: '" . get_class($exception) . "'</p>";
      echo "<p>Message: '" . $exception->getMessage() . "'</p>";
      echo "<p>Stack trace:<pre>" . $exception->getTraceAsString() . "</pre></p>";
      echo "<p>Trown in '" . $exception->getFile() . "' on line " . $exception->getLine() . "</p>";
    } else {
      $log = dirname(__DIR__) . '/logs/' . date('Y-m-d') . '.txt';
      ini_set('error_log', $log);
      $message = "<p>Uncought exception: '" . get_class($exception) . "'</p>";
      $message .= "<p>Message: '" . $exception->getMessage() . "'</p>";
      $message .=  "<p>Stack trace:<pre>" . $exception->getTraceAsString() . "</pre></p>";
      $message .= "<p>Trown in '" . $exception->getFile() . "' on line " . $exception->getLine() . "</p>";
      error_log($message);
      echo "<h1>An error ocurred</h1>";
    }
  }
}