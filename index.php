<?php 

session_start() ;

if (!isset($_SESSION['row'])) {
    return header('location: controller/LoginRegister.php?id=view-login') ; 
} ;

return header("location: controller/Home.php") ;