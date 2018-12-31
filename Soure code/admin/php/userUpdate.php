<?php
    $username = $_GET["username"];
    $note = null;
    if(isset($_POST['btnUpdate'])){
        $email = $_POST['email'];

        require_once "../../php/dbConnect.php";
        $sql = " update users set email ='" .$email ."' WHERE username = '" .$username ."'";
        if ($conn->query($sql) === TRUE){
            $note = "Cập nhập thành công";
        } else {
            $note = "Email đã tồn tại";
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
        input[type=text] {
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

    <title>Chỉnh sửa</title>
</head>
<body>
    <?php
        require_once 'header.php';
        require_once "../../php/dbConnect.php";

        $sql = " select email from users where username = '" .$username ."'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $email = $row['email'];
    ?>
    <div class="page">
        <div class="title"><p>Cập nhập tài khoản: <?php echo $username; ?></p></div>
            <form action="#" method="POST">
                <div class="container">
                    <label for="email"><b>Email</b></label><br>
                    <input type="text" value="<?php echo $email; ?>" name="email" required>
                    <?php
                        echo "<p style='color:red;'>" .$note ."</p>"; 
                    ?>
                    <button type="submit" name="btnUpdate">Cập nhập</button>
                </div>
            </form>
        </div>
    </div>    
</body>
</html>