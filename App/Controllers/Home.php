<?php

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
      $allPosts = $this->postModel->getAllPosts();
      $data = array_merge($data, array("allPosts" => $allPosts));
    }

    $this->view('Home/index', $data);
    // echo $id;
  }

  // public function about()
  // {
  //   $data = [
  //     "title" => 'About Page'
  //   ];
  //   $this->view('pages/about', $data);
  // }

  // public function contact()
  // {
  //   $data = [
  //     "title" => 'Contact Page'
  //   ];
  //   $this->view('pages/about', $data);
  // }
}