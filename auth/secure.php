<?php
$pathLogin = "http://" . $_SERVER["HTTP_HOST"] . '/login.php';
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
    header("Location:" . $pathLogin);
    exit();
}
