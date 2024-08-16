<?php 

namespace App\Core;

class Request {

  //Base Path
  public static function base(){
    return  trim(dirname($_SERVER['SCRIPT_NAME']).'/');
  }


  //uri

  public static function uri(){

    //CHECK IF SSL 

    if (!self::secure()){
      $t = trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),'/');

      //GET BASE PATH
      $b = self::base();

      //Check if base if in URI

      if (strpos($t, $b) === 0){
        $t = substr($t, strlen($b));
      }

      return $t ?: '/';

    }
    

  }
  
  //SSL

  public static function secure(){
    return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'Off';
  }

  // IS POST
  
  public static function isPost(){
    return self::method() == 'POST';
  }
  

  // IS GET 

  public static function isGet(){
    return self::method() == 'GET';
  }
  
  // IS Ajax

  public static function isAjax(){
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
  }

  // IS PUT
  public static function isPut(){
  return self::method() == 'PUT';
}

  // IS DELETE

  public static function isDelete(){
    return self::method() == 'DELETE';
  }

  // IS PATCH

  public static function isPatch(){
    return self::method() == 'PATCH';
  }

}