<?php
session_start();
session_destroy();
unset($_SESSION["name"]);
$_SESSION["msg"]="you are now logged out";
header('location:index.html')


?>