<?php
$pathAdmin = "http://" . $_SERVER["HTTP_HOST"] . '/admin/';
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION["loggedin"])) {
    session_destroy();
} else {
    header("Location:" . $pathAdmin);
}
