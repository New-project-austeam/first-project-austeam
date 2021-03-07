<?php


class Mypage extends Controller
{


  public function __construct()
  {
    $this->userModel = $this->model('Mypage_M');
  }


  public function mypageTop()
  {

    $userInfo = $this->userModel->getUserInfo();
    // echo "<pre>";
    // var_dump($userInfo);
    // echo "</pre>";

    $data = [
      "user_info" => $userInfo
    ];


    $this->view('Mypage/mypage_main', $data);
  }

  public function setting()
  {

    if ($_SERVER['REQUEST_METHOD']  == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = [
        'user_email' => $_SESSION['user_email'],
        'user_name' => trim($_POST['user_name']),
        "user_intro" => nl2br(
          trim($_POST['user_intro'])
        ),
        "user_experience" => nl2br(
          trim($_POST['user_experience'])
        ),
        "user_hobbies" => nl2br(
          trim($_POST['user_hobbies'])
        ),
        "user_location" => nl2br(
          trim($_POST['user_location'])
        ),
      ];

      $result = $this->userModel->editUserInfo($data);

      if ($result) {
        echo "success";
      } else {
        echo "failed";
      }
    } else {

      $userInfo = $this->userModel->getUserInfo();
      $data = [
        "user_info" => $userInfo
      ];



      $this->view('Mypage/mypage_setting', $data);
    }
  }
}