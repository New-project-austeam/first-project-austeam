<?php




namespace App\Controllers\Admin;


class Users extends \Core\Controller
{

  protected function before()
  {
    // Make sure an admin user is loggedin for example
  }

  public function indexAction()
  {
    echo 'User admin index';
  }


  protected function after()
  {
  }
}