<?php
    session_start();
    unset($_SESSION['usernamead']);
    header("location:login.php");
?>