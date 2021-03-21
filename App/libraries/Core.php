<?php

class Core
{
  protected $currentController = 'Forzerofor';
  protected $currentMethod = 'index';
  protected $params = [];


  public function __construct()
  {
    $url = $this->getUrl();
    $controller = null;

    $this->data_keeper();

    if (!$url) {

      $this->setController("home");
      $this->setMethod("index");

      exit();
    }


    if (file_exists('../App/controllers/' . ucwords($url[0]) . '.php')) {

      $this->currentController = ucwords($url[0]);
      $controller = $url[0];
      unset($url[0]);
    }

    $this->setController($this->currentController);


    //Check for second part of url
    if (isset($url[1])) {
      if (method_exists($this->currentController, $url[1])) {
        $this->currentMethod = $url[1];
        unset($url[1]);
        $this->setMethod($this->currentMethod, $url);
        exit();
      }
    } else {

      $this->redirectForzerofor_list($controller);
      $this->setMethod("index", null);
      exit();
    }

    $this->redirectForzerofor_list();
  }

  public function setController($controller)
  {
    // Require the controller
    require_once '../App/controllers/' . $controller . '.php';

    // Instatiate controller class

    $this->currentController = new $controller;

    // if (is_callable($this->currentController, "test2")) {
    //   echo "yes";
    //   exit();
    // } else {
    //   echo "no";
    //   exit();
    // }
  }


  public function setMethod($method, $params = null)
  {


    // Get params
    $params = $params ? array_values($params) : [];

    // Call a callback with array of params
    call_user_func_array([$this->currentController, $method], $params);
  }


  public function getUrl()
  {

    if (isset($_GET['url'])) {

      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url,  FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      return $url;
    }
  }

  public function redirectForzerofor_list($controller = null)
  {
    $list = [
      "users",
      "mypage",
      "posts"
    ];


    if (in_array($controller, $list) || !isset($controller)) {

      $this->setController("Forzerofor");
      $this->setMethod("index");
      exit();
    }
  }


  // urlがpost_editのページならpost_idを編集が終わるまでkeepしておく。
  public function data_keeper()
  {
    $url = $this->getUrl();
    if ($url[0] == "mypage" && $url[1] == "post_edit" && isset($url[2])) {

      post_id_keeper($url[2]);
    } else if ($url[1] != "post_edit" && isset($_SESSION['post_id'])) {
      post_id_keeper();
    }
  }
}