<?php 

session_start() ;
session_destroy() ;

header('location: LoginRegister.php?id=view-login') ;

exit ;