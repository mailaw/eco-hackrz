<?php
session_start();
if (!isset($_COOKIE['LOGIN_AUTH']) || ($_COOKIE['LOGIN_AUTH'] != md5($_SESSION['username']))) {
	echo $_SESSION['username'];
  header('Location: authenticate.html');
  exit();
} else {
	header ('Location: landing.php');
}