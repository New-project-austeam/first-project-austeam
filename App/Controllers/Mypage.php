<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Database;

class Mypage extends \Core\Controller
{



  /*
show the index page


  */

  public function mainAction()
  {



    // echo "Hello from the index action in the Home controller";
    View::render(
      ['includes/head.php', 'includes/navigation.php', 'Mypage/mypage_main.php', 'includes/footer.php'],
      []
    );



    // View::renderTemplate('Posts/index.twig', [
    //   'data' => $data
    // ]);
  }

  // public function addNewAction()
  // {
  //   echo "Hello from the addNew Action in the Posts controller!";
  // }


  // public function editAction()
  // {
  //   echo "Hello from the edit action in the Posts controller!";
  //   echo "<p>Route parameters: <pre>" .
  //     htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
  // }
  public function settingAction()
  {



    // echo "Hello from the index action in the Home controller";
    View::render(
      ['includes/head.php', 'includes/navigation.php', 'Mypage/mypage_setting.php', 'includes/footer.php'],
      []

    );



    // View::renderTemplate('Posts/index.twig', [
    //   'data' => $data
    // ]);
  }
}