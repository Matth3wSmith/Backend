<?php
//includeokban vannak függvények
session_start();
$url = "index.php";
$login = false;

include_once("include/check.php");
include_once("include/loginForm.php");
include_once("include/content.php");
include_once("include/content.php");

check();
if (!isset($_SESSION["belepve"]) || !$_SESSION["belepve"]) {
    loginForm();
} else {
    content();
}
?>