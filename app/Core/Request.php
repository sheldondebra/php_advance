<?php 

namespace App\Core;

class Request {

  //Base Path
  public static function base(){
    return  trim(dirname($_SERVER['SCRIPT_NAME']).'/');
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
    return self:method() == 'GET';
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