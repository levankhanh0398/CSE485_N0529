<?php
   
   $note = null;

   if(isset($_POST['btnAdd'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
               
        require_once "../../php/dbConnect.php";
        $sql = " INSERT INTO users(username, password, email) VALUES (" ."'" .$username ."','" .md5($password) ."','" .$email ."')";
        if($conn->query($sql) == TRUE){
            $note = "Thêm thành công";
        }
        else {
            $note = "Username hoặc email đã có, mời nhập lại";
        }
   }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../css/pageStyle.css">   

    <style>
        input[type=text],  input[type=password]{
            width: 30%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 20%;
        }

        button:hover {
            opacity: 0.8;
        }

        span{
            margin-left: -26px;
        }
    </style>

    <title>Thêm mới</title>
</head>
<body>
    <?php
        require_once 'header.php';
    ?>
    <div class="page">
        <div class="title"><p>Thêm mới tài khoản</p></div>
            <form action="#" method="POST">
                <div class="container">
                    <label for="userName"><b>UserName</b></label><br>
                    <input type="text" placeholder="Enter Username" name="username" required><br>

                    <label for="email"><b>Email</b></label><br>
                    <input type="text" placeholder="Enter Email" name="email" required><br>

                    <label for="Password"><b>Password</b></label><br>
                    <input type="password" placeholder="Enter Password" name="password" required>

                    <?php
                        echo "<p style='color:red;'>" .$note ."</p>"; 
                    ?>
                    <button type="submit" name="btnAdd">Thêm mới</button>
                </div>
            </form>
        </div>
    </div>    
</body>
</html>