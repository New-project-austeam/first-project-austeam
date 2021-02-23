<?php

namespace App\Controllers;

use \Core\View;

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

    // echo "Hello from the index action in the Home controller";
    View::render(
      ['includes/head.php', 'includes/navigation.php', 'Home/index.php',],
      []
    );



    // View::renderTemplate('Home/index.twig', [
    //   'name' => 'Dave',
    //   'colors' => ['red', 'green', 'blue']
    // ]);
  }
}