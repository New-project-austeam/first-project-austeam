<?php


class Users extends Controller
{


  public function __construct()
  {
    $this->userModel = $this->model('User');
  }

  public function signup()
  {
    // Init data;


    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // Check for Post
    if ($_SERVER['REQUEST_METHOD']  == 'POST') {

      $data = [
        "title" => "Register Page",
        'user_name' => trim($_POST['user_nickname']),
        'user_email' => trim($_POST['user_email']),
        "user_password" => trim($_POST['user_password']),
        "confirm_password" => trim($_POST['confirm_password']),
        "name_err" => "",
        "email_err" => "",
        "password_err" => "",
        "confirm_password_err" => ""
      ];


      if (empty($data['user_name'])) {
        $data['name_err'] = 'Please enter name';
      }

      if (empty($data['user_email'])) {
        $data['email_err'] = 'Please enter email';
      } else if ($this->userModel->findUserByEmail($data['user_email'])) {
        $data['email_err'] = 'Email is already taken..';
      }

      if (empty($data['user_password'])) {
        $data['password_err'] = 'Please enter password';
      } else if (strlen($data['user_password']) < 6) {
        $data['password_err'] = 'Password must be at least 6 characters';
      }

      if (empty($data['confirm_password'])) {
        $data['confirm_password_err'] = 'Please confirm password';
      } else if ($data['user_password'] != $data['confirm_password']) {

        $data['confirm_password_err'] = 'Passwords do not match';
      }

      if (empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {


        $data['user_password'] = password_hash($data['user_password'], PASSWORD_DEFAULT);

        // Register User
        if ($this->userModel->register($data)) {
          flash('register_success', 'You are successfully registered!! Please login with  the your account ');
          redirect('users/login');
        } else {
          die('Something went wrong');
        }
      } else {

        $this->view('users/signup', $data);
      }
    } else {
      // Load form;
      $data = [
        "title" => "Register Page",
        'user_name' => "",
        'user_email' => "",
        "user_password" => "",
        "confirm_password" => "",
        "name_err" => "",
        "email_err" => "",
        "password_err" => "",
        "confirm_password_err" => ""
      ];
      $this->view('Users/signup', $data);
    }
  }

  public function login()
  {
    // Init data;

    // Check for Post
    if ($_SERVER['REQUEST_METHOD']  == 'POST') {
      $data = [

        'user_email' => trim($_POST['user_email']),
        "user_password" => trim($_POST['user_password']),
        "email_err" => "",
        "password_err" => "",
      ];

      if (empty($data['user_email'])) {
        $data['email_err'] = 'Please enter email';
      }

      if (empty($data['user_password'])) {
        $data['password_err'] = 'Please enter password';
      }

      if ($this->userModel->findUserByEmail($data['user_email'])) {
      } else {
        $data['email_err'] = "No user found..";
      }


      if (empty($data['email_err']) && empty($data['password_err'])) {

        $loggedInUser = $this->userModel->login($data['user_email'], $data['user_password']);

        if ($loggedInUser) {

          $this->createUserSession($loggedInUser);
        } else {
          $data['password_err'] = 'Password incorrect..';
          $this->view('Users/login', $data);
        }
      } else {
        $this->view('Users/login', $data);
      }
    } else {
      // Load form;
      $data = [

        'user_email' => "",
        "user_password" => "",
        "email_err" => "",
        "password_err" => "",

      ];
      $this->view('Users/login', $data);
    }
  }


  public function createUserSession($user)
  {


    $_SESSION['user_id'] = $user->id;
    $_SESSION['user_email'] = $user->user_email;
    $_SESSION['user_name'] = $user->user_name;
    redirect('home/index');
  }

  public function logout()
  {
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
    unset($_SESSION['user_email']);
    session_destroy();
    redirect('users/login');
  }


  public function isLoggedIn()
  {
    if (isset($_SESSION['user_id'])) {
      return true;
    } else {
      return false;
    }
  }
}