<?php
    $idtheloai = $_GET["idtheloai"];
    $tentheloai = $_GET["theloai"];
    $note = null;
    if(isset($_POST['btnUpdate'])){
        $tentheloai = $_POST['tentheloai'];

        require_once "../../php/dbConnect.php";
        $sql = " update theloai set tenTheLoai ='" .$tentheloai ."' WHERE idTheLoai = '" .$idtheloai ."'";
        if ($conn->query($sql) === TRUE){
            $note = "Cập nhập thành công";
        } else {
            $note = "Cập nhập thất bại";
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
    ?>
    <div class="page">
        <div class="title"><p>Cập nhập thể loại: <?php echo $tentheloai; ?></p></div>
            <form action="#" method="POST">
                <div class="container">
                    <label for="Tentheloai"><b>Tên thể loại</b></label><br>
                    <input type="text" value="<?php echo $tentheloai; ?>" name="tentheloai" required>
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