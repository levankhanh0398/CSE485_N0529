<?php
   
   $note = null;

   if(isset($_POST['btnAdd'])){
        $tentheloai = $_POST['tentheloai'];
               
        require_once "../../php/dbConnect.php";
        $kt = 0;
        $sql = " Select * from theloai ";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            if($tentheloai == $row['tenTheLoai']){
                $kt = 1;
            }
        }
        if($kt == 1){
            $note = "Thêm thất bại, tên thể loại đâ bị trùng";
        } else{
            $sql = " insert INTO theloai(tentheloai) VALUES ('" .$tentheloai ."')";
            if($conn->query($sql) == TRUE){
                $note = "Thêm thành công";
            } else{
                $note = "Thêm thất bại";
            }
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
        input[type=text]{
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
        <div class="title"><p>Thêm mới thể loại</p></div>
            <form action="#" method="POST">
                <div class="container">
                    <label for="Tentheloai"><b>Tên thể loại</b></label><br>
                    <input type="text" placeholder="Nhập tên thể loại" name="tentheloai" required><br>

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