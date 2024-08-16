<?php

namespace App\Core;

class Session
{
  public function __construct()
  {
   if  (session_status() == PHP_SESSION_NONE){
    session_start();
   };
  }

  //set session

  public function set($key, $value)
  {
    $_SESSION[$key] = $value;
    return $_SESSION[$key];
  }

  //get Session

  public function get($key)
  {
    return isset($_SESSION[$key]) ? $_SESSION[$key] : null;

  }

  //delete Session

  public function delete($key){
    if (isset($_SESSION[$key])){
      if(isset($_SESSION[$key])){
        unset($_SESSION[$key]);
      }
    }
  }

  //destroy session
  public function destroy(){
    session_destroy();
  }

}