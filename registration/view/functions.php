<?php

define("PWD", "not-epass");

function sec_session_start() {
        $session_name = 'sec_session_id';
        $secure = false;
        $httponly = true;
 
        ini_set('session.use_only_cookies', 1);
        $cookieParams = session_get_cookie_params();
        session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly); 
        session_name($session_name);
        session_start();
        session_regenerate_id(true);
}

function login($user_id, $password) {
	if($user_id == "admin@malharfest.org" and $password == hash('sha512', PWD))
	{
		$user_browser = $_SERVER['HTTP_USER_AGENT'];

        $user_id = preg_replace("/[^0-9]+/", "", $user_id);
        $_SESSION['user_id'] = $user_id; 
        $username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username);
        $_SESSION['username'] = $username;
        $_SESSION['login_string'] = hash('sha512', PWD.$user_browser);

		return true;
	}
	else return false;
}

function login_check() {   
   if(isset($_SESSION['user_id'], $_SESSION['username'], $_SESSION['login_string']))
   {
     $user_id = $_SESSION['user_id'];
     $login_string = $_SESSION['login_string'];
     $username = $_SESSION['username'];
     $user_browser = $_SERVER['HTTP_USER_AGENT'];
     $login_check = hash('sha512', PWD.$user_browser);
     if($login_check == $login_string) {		  
          return true;
     }
  }
	 return false;
}

function verify()
{
	sec_session_start();
	if(login_check() == false) {
		header('Location: main.php?error=fail');
	}
}

?>