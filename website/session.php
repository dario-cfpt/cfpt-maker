<?php
    session_start();
    $_SESSION["id"]=$_GET["id"];
    $_SESSION["username"]=$_GET["username"];
    header('Location: mapList.php');
?>