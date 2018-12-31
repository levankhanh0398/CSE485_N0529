<?php
    $idsach = $_GET["idsach"];
    $tensach = $_GET["tensach"];

   $note = null;

   if(isset($_POST['btnAdd'])){
        $tenchuong = $_POST['tenchuong'];

        if($_FILES['upFile']['error'] > 0){
            $note = 'Lỗi khi upload file';
        } else{
            move_uploaded_file($_FILES['upFile']['tmp_name'], '../../book/' .$_FILES['upFile']['name']);
            $file = 'book/' .$_FILES['upFile']['name'];
            require_once "../../php/dbConnect.php";

            $sql = " insert into noidungsach(tenchuong, idSach, noidung) 
                     values ('" .$tenchuong ."','" .$idsach ."','" .$file ."')";
            if($conn->query($sql) == TRUE){
                header("location:bookContent.php?book=" .$tensach ."&idsach=" .$idsach);
            } else{
                echo "<script>alert('Thêm thất bại, mời thử lại')</script>";
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
        input[type=text],  input[type=file]{
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

    <script src="../js/jquery-3.3.1.js"></script>
    
    <title><?php echo $tensach ?></title>
</head>
<body>
    <?php
        require_once 'header.php';
    ?>
    <div class="page" style="height: 630px">
        <div class="title"><p>Thêm mới chương</p></div>
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="container">
                    <label for="Tenchuong"><b>Tên chương</b></label><br>
                    <input type="text" placeholder="Nhập tên chương" name="tenchuong" required><br>

                    <label for="fileSach"><b>Ảnh bìa</b><p> Chú ý: chỉ chọn tệp có định dạng pdf. </p></label>
                    <input type="file" name="upFile"><br>
                   
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
