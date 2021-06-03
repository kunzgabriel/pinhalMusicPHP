<?php
session_name("PinhalMusic");
setcookie('login');
setcookie('senha');

header('location:index.php');

session_start();
session_destroy();

?>