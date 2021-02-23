<?php

namespace Core;

/**
 * Router
 *
 * PHP version 5.4
 */
class Router
{

  /**
   * Associative array of routes (the routing table)
   * @var array
   */
  protected $routes = [];

  /**
   * Parameters from the matched route
   * @var array
   */
  protected $params = [];

  /**
   * Add a route to the routing table
   *
   * @param string $route  The route URL
   * @param array  $params Parameters (controller, action, etc.)
   *
   * @return void
   */
  public function add($route, $params = [])
  {
    // $this->routes[$route] = $params;

    // Convert the route to a regularexpression: escape forward slashes
    $route = preg_replace("/\//", "\\/", $route);
    // print_r($route);
    // echo "<br>";

    //Convert variables e.g. {controller}
    $route = preg_replace('/\{([a-z-]+)\}/', '(?P<$1>[a-z-]+)', $route);
    // print_r($route);
    // echo "<br>";
    // Convert vaiables with cutom regular expressions e.g. {id:\d+}
    $route = preg_replace('/\{([a-z-]+):([^\}]+)\}/', '(?P<$1>$2)', $route);
    // print_r($route);


    // Add start and end delimiters, and case insensitive flag
    $route = '/^' . $route . '$/i';


    $this->routes[$route] = $params;
  }

  /**
   * Get all the routes from the routing table
   *
   * @return array
   */
  public function getRoutes()
  {
    return $this->routes;
  }


  public function match($url)
  {
    //Match to the fiexed URL format /controller/action
    // $reg_exp = "/^(?P<controller>[a-z-]+)\/(?P<action>[a-z-]+)$/";

    foreach ($this->routes as $route => $params) {
      if (preg_match($route, $url, $matches)) {
        // Get named capture group values
        // $params = [];
        // print_r($matches);
        foreach ($matches as $key => $match) {
          if (is_string($key)) {
            $params[$key] = $match;
          }
        }

        $this->params = $params;
        return true;
      }
    }
  }

  /**
   * Get the currently matched parameters
   *
   * @return array
   */
  public function getParams()
  {
    return $this->params;
  }



  public function dispatch($url)
  {

    $url = $this->removeQueryStringVariables($url);
    if ($this->match($url)) {
      $controller = $this->params['controller'];
      $controller = $this->convertToStudlyCaps($controller);
      // $controller = "App\Controllers\\$controller";

      $controller = $this->getNamespace() . $controller;

      if (class_exists($controller)) {
        $controller_object = new $controller($this->params);

        $action = $this->params['action'];

        $action = $this->convertToCamelCase($action);
        // print_r($action);
        // echo "<br>";
        // var_dump($controller_object);
        // print_r(is_callable([$controller_object, $action], true, $callablename));
        if (is_callable([$controller_object, "hofda"], true, $callablename)) {
          // print_r($callablename);
          $controller_object->$action();
        } else {
          throw new \Exception("Method $action (in controller $controller)not found ");
        }
      } else {
        throw new \Exception("Controller class $controller not found ");
      }
    } else {
      throw new \Exception("No route not matched");
    }
  }



  /**
   * Convert the string with hyphens to StudlyCaps,
   * e.g. post-authors => PostAuthors
   *
   * @param string $string The string to convert
   *
   * @return string
   */
  protected function convertToStudlyCaps($string)
  {
    return str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));
  }

  /**
   * Convert the string with hyphens to camelCase,
   * e.g. add-new => addNew
   *
   * @param string $string The string to convert
   *
   * @return string
   */
  protected function convertToCamelCase($string)
  {
    return lcfirst($this->convertToStudlyCaps($string));
  }






  protected function removeQueryStringVariables($url)
  {
    if ($url != '') {
      $parts = explode('&', $url, 2);

      if (strpos($parts[0], '=') === false) {
        $url = $parts[0];
      } else {
        $url = '';
      }
    }

    return $url;
  }



  protected function getNamespace()
  {
    $namespace = 'App\Controllers\\';

    if (array_key_exists('namespace', $this->params)) {
      $namespace .= $this->params['namespace'] . '\\';
    }

    return $namespace;
  }
}