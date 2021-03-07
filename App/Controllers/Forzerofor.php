<?php

class Forzerofor extends Controller
{
  public function __construct()
  {
    $this->postModel = $this->model('Post');
  }


  public function index()
  {
    $data = [
      "title" => 'Error Page'
    ];

    $posts = $this->postModel->getPosts();

    $data = array_merge($data, array("posts" => $posts));


    $this->view('Error/index', $data);
    // echo $id;
  }
}