<?php

class Home extends Controller
{
  public function __construct()
  {
    // $this->postModel = $this->model('home');
  }


  public function index($param1 = null, $param2 = null)
  {


    $data = [
      "title" => 'Home Page'
    ];



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