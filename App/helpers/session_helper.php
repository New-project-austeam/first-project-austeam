<?php

session_start();


// Flash message
// Example - flash('register_success', 'Your are now registered')
// Display in view echo flash('register_success')

function flash($name = '', $message = '', $class = 'alert alert-success')
{


  if (!empty($name)) {
    // setting the session to show the flash card right after registered
    if (!empty($message) && empty($_SESSION[$name])) {

      if (!empty($_SESSION['name'])) {
        unset($_SESSION['name']);
      }

      if (!empty($_SESSION[$name . '_class'])) {
        unset($_SESSION[$name . '_class']);
      }
      $_SESSION[$name] = $message;
      $_SESSION[$name . '_class'] = $class;
      //  show the registered message then unset the message session
    } else if (empty($message) && !empty($_SESSION[$name])) {

      $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : "";
      echo '<div class="' . $class . '" id="msg-flash">' . $_SESSION[$name] . '</div>';

      unset($_SESSION[$name]);
      unset($_SESSION[$name . "_class"]);
    }
  }
}




/// イベント投稿の編集の際にpost_idをkeepしておく機能
function post_id_keeper($post_id = null)
{

  if (isset($post_id)) {
    $_SESSION['post_id'] = $post_id;
  } else if (isset($_SESSION['post_id'])) {
    unset($_SESSION['post_id']);
  }
}