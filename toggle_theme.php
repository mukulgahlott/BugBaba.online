<?php
session_start();
$_SESSION['darkMode'] = !isset($_SESSION['darkMode']) || !$_SESSION['darkMode'];
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit; 