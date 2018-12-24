<?php
    session_start();

    if(!isset($_SESSION['usernamead'])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../css/pageStyle.css">

    <title>Trang quản trị</title>
</head>
<body>
    <?php
        require_once 'header.php';
    ?>
    <div class="page">
        <div class="title"><p>Tổng quan</p></div>
        <div class="number-of-people-accessing"><p>Số người đang truy cập</p></div>
        <div class="number-of-visitors-today"><p>Số người truy cập hôm nay</p></div>
        <div class="number-of-visitors-in-the-month"><p>Số người truy cập trong tháng</p></div>
    </div>
</body>
</html>