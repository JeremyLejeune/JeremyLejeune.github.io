<?php
if(!isset($_SESSION)) { session_start();}

/* Require login.php to call login function */
require("classes/UserClass.php");

/* Call for login function */
$login = new UserClass();
  
if($login->isLoggedIn() == true){
  include("views/loginTrue.php");
} else {
  include("views/loginFalse.php");
}