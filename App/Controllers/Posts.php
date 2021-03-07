<?php

class Posts extends Controller
{
  public function __construct()
  {
    // echo "Posts loaded";
  }

  public function index($id = null)
  {

    $data = [
      "title" => 'Posts Page'
    ];
    $this->view('posts/index', $data);
    // echo $id;
  }

  public function about($id = null, $id2 = null)
  {
    echo "about " . $id . " " . $id2;
  }
}