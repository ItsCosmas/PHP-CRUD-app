<?php
session_start();
setcookie(session_name(), '', 100);
session_unset();
session_destroy();
$_SESSION = array();
//redirects to Log in after Killing Session
header('Location: login.php');
exit();
?>