<?php
/// トップページの機能
class Home extends Controller
{
  public function __construct()
  {
    $this->postModel = $this->model('Post');
  }


  public function index($param1 = null, $param2 = null)
  {

    $data =  array();
    if (isset($_SESSION['user_id'])) {
      //ログインしてたら
      $allPosts = $this->postModel->getAllPosts();
      $data = array_merge($data, array("allPosts" => $allPosts));
    }

    $this->view('Home/index', $data);
  }
}