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
      //ユーザーのプロフィールを編集した時。
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
      //ユーザーのプロフィールに初めて飛んできた時。

      $userInfo = $this->userModel->getUserInfo();
      $data = [
        "user_info" => $userInfo
      ];



      $this->view('Mypage/mypage_setting', $data);
    }
  }

  public function myevents()
  {
    //現在登録されている自分の投稿一覧を出力するページ。
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
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


      if (isset($_POST['d_post_id'])) {
        //削除の場合
        $post_id = $_POST['d_post_id'];
        $result = $this->postsModel->delete($post_id);
        if ($result["result"]) {
          //削除することに確認した時。
          flash('delete_myevent', $result['post_data']->event_title . 'は削除されました。');
          redirect("mypage/myevents");
        }
      } else if (isset($_POST['e_post_id'])) {
        // 編集ページで確定ボタンを押した時。

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
          "is_edit" => true
        ];

        $this->view('Mypage/confirm', $data);
      } else if (isset($_POST['editConfirm'])) {
        //編集ページの確認ページで確定した時。



        $result = $this->postsModel->edit($_POST);

        if ($result) {
          flash('edit_new_event', '投稿の編集は成功しました。');
          $this->view('Mypage/myeventDetail', null);
        } else {
          die('something went wrong...');
        }
        exit();
      } else if (isset($_POST['editReturn'])) {
        //編集の確認ページから戻ってきたとき。

        $this->view('Mypage/myeventDetail', null);
      }
    } else {
      //編集ページに最初に飛んできたとき。
      $result = $this->postsModel->getPostDetails($postId);

      $data = [
        "post_id" => $postId,
        "post_detail" => $result,
        "isEditPage" => true
      ];


      $this->view('Mypage/myeventDetail', $data);
    }
  }



  public function confirm()
  {
    if ($_SERVER['REQUEST_METHOD']  == 'POST') {
      //編集や新しく投稿を作成した時にその投稿データを確認ページに飛ばす。
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

      $this->view('Mypage/confirm', $data);
    } else {
      // URLで直接確認ページに飛んできた時は404ページに飛ばす。
      redirect("Forzerofor/index");
      exit();
    }
  }

  public function register()
  {
    if ($_SERVER['REQUEST_METHOD']  == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      if (isset($_POST['submitReturn'])) {
        //新しく投稿を作成して確認ページで戻ってきた時。
        header('Location:' .  URLROOT . '/mypage/mypageTop', true, 307);
        exit();
      } else if (isset($_POST['submitConfirm'])) {
        //新しく投稿を作成して確認ページで確定した時。
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
        //新しく投稿を作成してそのデータを確認ページに飛ばす。
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

        $this->view('Mypage/confirm', $data);
      }
    } else {
    }
  }
}