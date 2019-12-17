<?php 
session_start();
session_destroy();
setcookie('usuario', $_POST['usuario'], time()-1);
setcookie('password', $_POST['password'], time()-1);
setcookie('checked', '', time()-1);
header("Location:index.php");
exit;
?> 