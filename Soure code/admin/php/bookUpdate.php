<?php
    $idsach = $_GET["idsach"];
    $tensach = $_GET["book"];

    $note = null;

    if(isset($_POST['btnUpdate'])){
        $tensach = $_POST['tensach'];
        $tacgia = $_POST['tacgia'];
        $theloai = $_POST['theloai'];
        $dangsach = $_POST['dangsach'];
        $mota = $_POST['mota'];
        
        require_once "../../php/dbConnect.php";
        $sql = " SELECT * FROM theloai WHERE tenTheLoai = '" .$theloai ."'";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            $idTheLoai = $row['idTheLoai'];
        }
        
        if($_FILES['upAnhBia']['error'] > 0){
            require_once "../../php/dbConnect.php";
            $sql = " update sach set tenSach = '" .$tensach ."', tacgia = '" .$tacgia ."', idTheLoai = '" .$idTheLoai ."', dangsach = '" .$dangsach ."', mota = '" .$mota . "' WHERE idSach = '" .$idsach ."'";
            if ($conn->query($sql) === TRUE){
                $note = "Cập nhập thành công";
            } else {
                $note = "Cập nhập thất bại";
            }
        } else{
            move_uploaded_file($_FILES['upAnhBia']['tmp_name'], '../../img/' .$_FILES['upAnhBia']['name']);
            $anhbia = 'img/' .$_FILES['upAnhBia']['name'];
            require_once "../../php/dbConnect.php";
            $sql = " update sach set tenSach = '" .$tensach ."', tacgia = '" .$tacgia ."', idTheLoai = '" .$idTheLoai ."', dangsach = '" .$dangsach ."', anhbia = '" .$anhbia ."', mota = '" .$mota ."' WHERE idSach = '" .$idsach ."'";
            if ($conn->query($sql) === TRUE){
                $note = "Cập nhập thành công";
            } else {
                $note = "Cập nhập thất bại";
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
        input[type=text], select,  input[type=file]{
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

        $sql = " select * from sach where idSach = '" .$idsach ."'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $tacgia = $row['tacgia'];
        $mota = $row['mota'];
    ?>
    <div class="page">
        <div class="title"><p>Cập nhập sách: <?php echo $tensach; ?></p></div>
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="container">
                    <label for="Tensach"><b>Tên sách</b></label><br>
                    <input type="text" value="<?php echo $tensach; ?>" name="tensach" required><br>

                    <label for="Tacgia"><b>Tác giả</b></label><br>
                    <input type="text" value="<?php echo $tacgia; ?>" name="tacgia" required><br>

                    <label for="Theloai"><b>Thể loại</b></label><br>
                    <select name="theloai">
                        <?php
                            require_once "../../php/dbConnect.php";
                            $sql = " Select tenTheLoai from TheLoai ";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                echo "<option>" .$row['tenTheLoai'] ."</option>";
                            }
                        ?>
                    </select><br>

                    <label for="Dangsach"><b>Dạng sách</b></label><br>
                    <select name="dangsach">
                        <option>Sách điện tử</option>
                        <option>Truyện tranh</option>
                        <option>Sách nói</option>
                    </select><br>

                    <label for="Anhbia"><b>Ảnh bìa</b><p> Chú ý: chỉ chọn ảnh có định dạng png, jpg. </p></label>
                    <input type="file" name="upAnhBia"><br>

                    <label for="Mota"><b>Mô tả, tóm tắt</b></label><br>
                    <input type="text" value="<?php echo $mota; ?>" name="mota" required><br>
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