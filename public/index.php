<?php
// require '../App/Controllers/Posts.php';
// require '../Core/Router.php';




require_once  '../vendor/autoload.php';


// テンプレートファイルがあるディレクトリ（本サンプルではカレントディレクトリ）
// $loader = new Twig_Loader_Filesystem('.');

// $twig = new Twig_Environment($loader);

// $template = $twig->loadTemplate('sample.html.twig');
// $data = array(
//   'title' => 'sample',
//   'message'  => 'My Webpage!',
// );
// echo $template->render($data);

// spl_autoload_register(function ($class) {

//   $root = dirname(__DIR__); //get the parent directory;
//   $file = $root . "/" . str_replace('\\', '/', $class) . '.php';

//   if (is_readable($file)) {
//     require $file;
//   }
// });

error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');

$router = new Core\Router();



//echo get_class($router);

//Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);

$router->add('{controller}/{action}');

$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);


// Display the routing table
// echo '<pre>';
// var_dump($router->getRoutes());
// echo '</pre>';


// $url = $_SERVER['QUERY_STRING'];

$router->dispatch($_SERVER['QUERY_STRING']);


// $url = "honda&yuki&yukari";
// $parts = explode('&', $url, 4);
// print_r($parts);
// $pos = strpos($url, "yukari");
// echo $pos;

// if ($router->match($url)) {
//   // echo '<pre>';
//   // var_dump($router->getParams());
//   // echo '</pre>';

//   echo '<pre>';
//   echo htmlspecialchars(print_r($router->getRoutes(), true));
//   echo '</pre>';
//   print_r($router->getParams());
// } else {
//   echo "No route found for URL";
// }
// echo "<hr>";


// $reg_exp = '/\s+/';
// $replacement = ",";
// $string = "I am abc";
// $result = preg_replace($reg_exp, $replacement, $string);
// echo $result;
// echo "<hr>";
// $reg_exp = '/abc(.+)/';
// $replacement = "honda$1";
// $string = "I am abcだよ";
// $result = preg_replace($reg_exp, $replacement, $string);
// echo $result;

// echo "<hr>";
// $reg_exp = '/(\w+) and (\w+)/';
// $replacement = "$1 OR $2";
// $string = "Yuki and Yuka";
// $result = preg_replace($reg_exp, $replacement, $string);
// echo $result;



// echo "<br>";
// echo preg_match("/^re*d\d+.+$/i", "Rd1331!%", $matches);
// echo "<br>";
// echo preg_match("/^a[123]+c[^a-z123]+/i", "a2313c44", $matches);
// echo "<br>";

// echo preg_match("/a(b)c(?P<honda>\d*)/", "abc9999", $matches);
// print_r($matches);
// echo $matches['honda'];

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
// phpinfo();
?>