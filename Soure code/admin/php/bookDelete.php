<?php
    $idSach = $_GET["idsach"];
    $tenSach = $_GET["book"];

    if(isset($_POST['btnDelete'])){
        require_once "../../php/dbConnect.php";
        $sql = " delete from sach WHERE idSach = '" .$idSach ."'";
        $conn->query($sql);
        header("location:bookManagement.php");
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
            width: 100%;
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
            width: 10%;
        }

        button:hover {
            opacity: 0.8;
        }

        span{
            margin-left: -26px;
        }
    </style>

    <title>Quản lý người dùng</title>
</head>
<body>
    <?php
        require_once 'header.php';
    ?>
    <div class="page">
        <div class="title"><p>Xóa sách: <?php echo $tenSach; ?></p></div>
            <form action="#" method="POST">
                <div class="container">
                    <label for="delete"><b>Bạn chắc chắn muốn xóa?</b></label><br>
                    <button type="submit" name="btnDelete">Xóa</button>
                </div>
            </form>
        </div>
    </div>    
</body>
</html>