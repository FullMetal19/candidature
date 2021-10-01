
<?php
session_start();
$_SESSION['classement']="final";
header('Location: ' . $_SERVER['HTTP_REFERER']);