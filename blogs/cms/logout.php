<?php
session_start();
session_destroy();
header('Location: ' . $_SERVER['HTTP_REFERER']);

$_SESSION['is_logged_in'] = false;

?>
