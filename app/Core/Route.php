<?php

namespace App\Core;

class Route
{

  public static $routes = [];

  //routes handler(
  public static function routeHandler($uri, $controlargs, $method)
  {

    //save route

    //covert uri to preg
    if(preg_match_all('/\{[a-zA-Z0-9]+\}/', $uri,$matches)
    )
  {

    $uri2 = preg_replace('/\{[a-zA-Z0-9]+\}/', '([^/]+)', $uri);
  
  }
    

    self:
    $routes[] = [
      'uri' => $uri,
      'controlargs' => $controlargs,
      'method' => $method
    ];

  }

  //GET
  public static function get($uri, $controlargs)
  {
    self::routeHandler($uri, $controlargs, 'GET');
  }

  //POST
  public static function post($uri, $controlargs)
  {
    self::routeHandler($uri, $controlargs, 'POST');
  }

  //PUT
  public static function put($uri, $controlargs)
  {
    self::routeHandler($uri, $controlargs, 'PUT');
  }

  //DELETE
  public static function delete($uri, $controlargs)
  {
    self::routeHandler($uri, $controlargs, 'DELETE');
  }

  //ANY
  public static function any($uri, $controlargs)
  {
    self::routeHandler($uri, $controlargs, 'ANY');
  }

  //404
  public static function notFound()
  {
    echo '404';
  }

  //404 HEADER
  public static function notFoundHeader()
  {
    echo "No route found for this request";
  }

  //CLASS NOT FOUND

  public static function classNotFound($class)
  {
    echo "'class' not found";
  }

  //RUN

  public static function run()
  {

    echo "Running";

  }

}