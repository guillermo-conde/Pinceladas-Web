<?php 
session_start();

session_destroy();
setcookie("PHPSESSIONID", "", time() - 3600);


header('location: ../../panel.php');

?>