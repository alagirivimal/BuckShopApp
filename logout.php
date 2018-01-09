<?php session_start();
ob_start();

unset($_SESSION['oauth_token']);
unset($_SESSION['oauth_token_secret']);
session_unset();
session_destroy();
header('Location: index.php');
ob_end_flush();