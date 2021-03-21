<?php

class Posts extends Controller
{
  public function __construct()
  {
    $this->postModel = $this->model('Post');
  }

  public function index($id = null)
  {

    $data = [
      "title" => 'Posts Page'
    ];
    $this->view('posts/index', $data);
    // echo $id;
  }


  public function details($post_id = null)
  {

    $postData = $this->postModel->getPostDetails($post_id);

    if ($postData == "") {
      redirect("Forzerofor/index");
      exit();
    }
    $data = [
      "postData" => $postData
    ];

    $this->view('Posts/details', $data);
  }
}