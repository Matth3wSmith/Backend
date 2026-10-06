<?php

session_start();
$url = "index.php";
$login = false;

include("include/check.php");

if (!isset($_SESSION["belepve"]) || !$_SESSION["belepve"]) {
    include("include/loginForm.php");

} else {
    include("include/content.php");
}
?>