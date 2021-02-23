<?php

namespace Core;


class View
{


  public static function render($views, $args = [])
  {
    extract($args, EXTR_PREFIX_ALL, "test");

    foreach ($views as $view) {

      $file = "../App/Views/$view"; // relative to Core directory;

      if (is_readable($file)) {
        require $file;
      } else {
        throw new \Exception("$file not found ");
      }
    }
  }


  public static function renderTemplate($template, $args = [])
  {
    static $twig = null;
    if ($twig === null) {
      $loader = new \Twig_Loader_Filesystem('../App/Views');
      $twig = new \Twig_Environment($loader);
    }
    echo $twig->render($template, $args);
  }
}