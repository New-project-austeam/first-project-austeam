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

  // public function about($id = null, $id2 = null)
  // {
  //   echo "about " . $id . " " . $id2;
  // }

  public function confirm()
  {
    if ($_SERVER['REQUEST_METHOD']  == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = [
        "event_title" => trim($_POST["event_title"]),
        "event_date" => trim($_POST["event_date"]),
        "event_location" => trim($_POST["event_location"]),
        "event_category" => trim($_POST["event_category"]),
        "event_clothe" => nl2br(
          trim($_POST["event_clothe"])
        ),
        "event_equipment" => nl2br(
          trim($_POST["event_equipment"])
        ),
        "event_level" => trim($_POST["event_level"]),
        "event_details" => nl2br(
          trim($_POST["event_details"])
        ),
      ];

      $this->view('Posts/confirm', $data);
    } else {
    }
  }

  public function register()
  {
    if ($_SERVER['REQUEST_METHOD']  == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      if (isset($_POST['submitReturn'])) {
        header('Location:' .  URLROOT . '/mypage/mypageTop', true, 307);
        exit();
      } else if (isset($_POST['submitConfirm'])) {
        $data = [
          "post_data" => $_POST,
        ];

        $result = $this->postModel->register($_POST);
        if ($result) {
          flash('register_new_event', 'New Event successfully has been made !!');
          redirect('mypage/myevents');
        } else {
          die('something went wrong...');
        }
        exit();
      } else {

        $data = [
          "event_title" => trim($_POST["event_title"]),
          "event_date" => trim($_POST["event_date"]),
          "event_location" => trim($_POST["event_location"]),
          "event_category" => trim($_POST["event_category"]),
          "event_clothe" => nl2br(
            trim($_POST["event_clothe"])
          ),
          "event_equipment" => nl2br(
            trim($_POST["event_equipment"])
          ),
          "event_level" => trim($_POST["event_level"]),
          "event_details" => nl2br(
            trim($_POST["event_details"])
          ),
        ];

        $this->view('Posts/confirm', $data);
      }
    } else {
    }
  }
}