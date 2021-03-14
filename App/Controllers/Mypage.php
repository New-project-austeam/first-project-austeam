<?php


class Mypage extends Controller
{


  public function __construct()
  {
    $this->userModel = $this->model('Mypage_M');
    $this->postsModel = $this->model('Post');
  }


  public function mypageTop()
  {

    $userInfo = $this->userModel->getUserInfo();


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
        flash('edit_intro_success', "編集は成功しました。");
        $userInfo = $this->userModel->getUserInfo();
        $data = [
          "user_info" => $userInfo
        ];

        $this->view('Mypage/mypage_setting', $data);
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

  public function myevents()
  {

    $user_id = $_SESSION['user_id'];
    $allPosts = $this->postsModel->getUserPosts($user_id);

    $data = [
      "myposts" => $allPosts
    ];

    $this->view('Mypage/myevents', $data);
  }


  public function post_edit($postId = null)
  {
    if ($_SERVER['REQUEST_METHOD']  == 'POST') {


      //削除の場合
      if (isset($_POST['d_post_id'])) {
        $post_id = $_POST['d_post_id'];
        $result = $this->postsModel->delete($post_id);
        if ($result["result"]) {
          flash('delete_myevent', $result['post_data']->event_title . 'は削除されました。');
          redirect("mypage/myevents");
        }
        // 編集の場合
      } else if (isset($_POST['e_post_id'])) {
        echo "submit";
      }
      //編集ページに飛んできたとき。
    } else {

      $result = $this->postsModel->getPostDetails($postId);

      $data = [
        "post_detail" => $result,
        "isEditPage" => true
      ];
      echo "honda";
      $this->view('Mypage/myeventDetail', $data);
    }
  }



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
      redirect("Forzerofor/index");
      exit();
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

        $result = $this->postsModel->register($_POST);
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