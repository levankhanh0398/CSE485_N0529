<?php
    session_start();

    $note = null;
    if(isset($_POST['btnLogin'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        require_once "../php/dbConnect.php";
        $sql = " SELECT * FROM users WHERE admin = '" .$username ."' and password = '" .md5($password) ."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            $_SESSION['usernamead'] = $username;
            header("location:index.php");
        } else{
            $note = "Tài khoản hoặc mật khẩu không đúng";
        }   
    }
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/loginStyle.css">
    <title>Login</title>
</head>

<body>
    <form action="#" method="POST">
        <h1>Login</h1>
        <div class="container">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <?php
                echo "<p style='color:red;'>" .$note ."</p>"; 
            ?>
            <button type="submit" name="btnLogin">Login</button>
        </div>
    </form>


</body>

</html>