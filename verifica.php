<?php 
if(!isset($_SESSION)) session_start();
if(!isset($_SESSION['login'])) {
    session_destroy();
    header("Location: index.php");
}
?>