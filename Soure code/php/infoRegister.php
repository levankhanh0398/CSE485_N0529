<?php
    session_start();

    echo "<div>";
    echo "<h1>Đăng kí tài khoản thành công, thông tin tài khoản của bạn là:</h1>";
    echo "<p>Tên tài khoản: " .$_SESSION['username'] ."</p>";
    echo "<p>Email: " .$_SESSION['email'] ."</p>";
    echo "<p>Mật khẩu: " .$_SESSION['password'] ."</p>";
    echo "<a href='login.php'>Đăng nhập ngay</a>";
    echo "</div>";

    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['password']);

?>