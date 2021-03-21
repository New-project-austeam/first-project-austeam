<?php

class Controller
{

  // Load model
  public function model($model)
  {
    // Require model file
    require_once '../app/models/' . $model . '.php';

    // Instantiate model
    return new $model();
  }

  // Load view
  public function view($view, $data = [])
  {


    // Check for view file
    if (file_exists('../app/views/' . $view . '.php')) {

      require_once '../app/views/' . $view . '.php';
    } else {
      die('View ' . $view . ' file does not exist');
    }
  }

  public function make_user_image_dir($user_id)
  {
    mkdir(ROOT . "/public/dist/uploads/user_" . $user_id, 0700);
    chmod(ROOT . "/public/dist/uploads/user_" . $user_id, 0777);
    mkdir(ROOT . "/public/dist/uploads/user_" . $user_id . "/events", 0700);
    chmod(ROOT . "/public/dist/uploads/user_" . $user_id . "/events", 0777);
    mkdir(ROOT . "/public/dist/uploads/user_" . $user_id . "/profile", 0700);
    chmod(ROOT . "/public/dist/uploads/user_" . $user_id . "/profile", 0777);
  }
}