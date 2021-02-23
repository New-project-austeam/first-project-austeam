<?php

namespace App\Controllers;

use \Core\View;
use App\Models\User;


class Home extends \Core\Controller
{

  protected function before()
  {
    // echo "(before)";
  }

  protected function after()
  {
    // echo " (after)";
  }

  public function indexAction()
  {



    View::render(
      ['includes/head.php', 'includes/navigation.php', 'Home/index.php', 'includes/footer.php'],
      []
    );
    // View::renderTemplate('Home/index.twig', [
    //   'name' => 'Dave',
    //   'colors' => ['red', 'green', 'blue']
    // ]);
  }


  public function loginAction()
  {
    $args = [
      "is_login" => null,
      "is_signup" => null
    ];

    if (isset($_POST["submit_login"])) {
      $user_email = $_POST['user_email'];
      $user_password = $_POST['user_password'];

      $result = User::login($user_email, $user_password);

      if ($result) {
        header("Location: /home/index");
        exit();
      } else {
        $args["is_login"] = "failed";
      }
    }

    View::render(
      ['includes/head.php', 'includes/navigation.php', 'Home/login.php', 'includes/footer.php'],
      $args
    );
  }

  public function logoutAction()
  {
    User::logout();
    $this->indexAction();
  }



  public function signupAction()
  {

    $args = [
      "is_signup" => null

    ];

    if (isset($_POST["submit_signup"])) {

      $user_nickname = $_POST['user_nickname'];
      $user_email = $_POST['user_email'];
      $user_password = $_POST['user_password'];

      $result = User::signup($user_nickname, $user_email, $user_password);

      if ($result) {
        $args["is_signup"] = true;
        $args["is_login"] = false;

        View::render(
          ['includes/head.php', 'includes/navigation.php', 'Home/login.php', 'includes/footer.php'],
          $args
        );
        exit();
      } else {
        $args["is_signup"] = "failed";
      }
    }

    View::render(
      ['includes/head.php', 'includes/navigation.php', 'Home/signup.php', 'includes/footer.php'],
      $args
    );
  }
}