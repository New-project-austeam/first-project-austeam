<?php
require '../Core/Router.php';

$router = new Router();

//echo get_class($router);

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('posts/new', ['controller' => 'Posts', 'action' => 'new']);

// Display the routing table
echo '<pre>';
var_dump($router->getRoutes());
echo '</pre>';


?>


<?php

// session_start();
// include('./includes/head.php');
// include('./includes/navigation.php');

?>


<h1>
  <?php
  //  echo $nickname ? "ようこそ！ " . $nickname . "さん" : "ごみネットへようこそ　ログインしてね" 
  ?>
</h1>

<?php
// echo 'Requested URL = "' . $_SERVER['QUERY_STRING'] . '"';
?>



<?php

// include('./includes/footer.php');