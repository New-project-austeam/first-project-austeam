<?php

namespace Core;




abstract class Controller
{

  protected $route_params = [];



  public function __construct($route_params)
  {
    $this->route_params = $route_params;
  }


  //マジックメソッドの一つ「__call()」メソッドは、アクセス不能なメソッドを実行しようとしたタイミングで呼び出されるものです。
  // アクセス不能というのは、下記のような形でメソッドが存在しないため、外部から実行できない状態となっています。
  // private
  // protected
  // __call()は、ユニットテストで使用するモックオブジェクト、スタブを作るときなどに便利です。
  // また、__call()を使って柔軟に外部からアクセスできるメソッドであるアクセサーを作ることも可能です。
  public function __call($name, $args)
  {
    $method = $name . 'Action';

    if (method_exists($this, $method)) {
      if ($this->before() !== false) {
        call_user_func_array([$this, $method], $args);
        $this->after();
      }
    } else {
      // echo "Method $method not found in controller" . get_class($this);
      throw new \Exception("Method $method not found in controller ") . get_class($this);
    }
  }

  protected function before()
  {
  }

  protected function after()
  {
  }
}