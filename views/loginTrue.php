<?php include_once 'header.php';

if($login->isLoggedIn() == true){
    include("views/dashboard.php");   // Else prompt login form
}
else
{
    header('Location: index.php');    // If user is not logged in redirect back to index.php
}
