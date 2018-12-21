<?php
    session_start();
    $tb = null;

    if(isset($_POST['btnRegister'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
                
        if($password == $confirmpassword){
            require_once "dbConnect.php";
            $sql = " INSERT INTO users(username, password, email) VALUES (" ."'" .$username ."','" .md5($password) ."','" .$email ."')";
            if($conn->query($sql) == TRUE){
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header("location:infoRegister.php");
            }
            else {
                $tb = "Username hoặc email đã có, mời nhập lại";
            }
        } else{
            $tb = "Mật khẩu nhập lại không đúng";
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
    <link rel="stylesheet" href="../css/registerStyle.css">
    <title>Register</title>
</head>
<body>
<form action="#" method="POST">
    <div class="container">
        <h1>Register</h1>

        <label for="userName"><b>UserName</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="Email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="Password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <label for="confirmPassword"><b>Confirm Password</b></label>
        <input type="password" placeholder="Enter Password" name="confirmpassword" required>
        <?php
            echo "<p style='color:red;'>" .$tb ."</p>"; 
        ?>
        <button type="submit" name="btnRegister">Register</button>
    </div>
</form>
</body>
</html>