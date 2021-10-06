<?php
if(!isset($_SESSION)) session_start();
if($_POST['login'] == 'keven' && $_POST['senha'] == '123') {
    $_SESSION['login'] = $_POST['login'];
    header("Location: restrito.php");
}
else {
    session_start();
    session_destroy();
    header('Location: index.php');
}
 ?>