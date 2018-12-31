<?php
        session_start();

        $idsach = $_GET["id"];
        $tensach = $_GET["tensach"];

        if(isset($_POST['btnComment'])){
            if(isset($_SESSION['username'])){
                $comment = $_POST['comment'];
                require_once "../php/dbConnect.php";
                $sql = " INSERT INTO binhluan(idSach, username, noidung) VALUES (" ."'" .$idsach ."','" .$_SESSION['username'] ."','" .$comment ."')";
                $conn->query($sql);
            } else{
                header("location:login.php");
            }
        }

?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <script src="../js/jquery-3.3.1.js"></script>


    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bookStyle.css"> -->
    <link rel="stylesheet" href="../css/css/bootstrap.min.css">
    
    <style>
        .title{
            width: 1000px;
        }

        .title p{
            font-size: 20px;
        }

        .info{
            width: 1000px;
            height: 585px;
        }

        .imgBook{
            width: 400px;
            height: 600px;
        }

        .infoBook{
            width: 400px;
            height: 600px;
            float: left;
        }

        .comment{
            width: 1150px;
        }

        .labComment{
            margin-left: -798px;
        }

        input[type=text]{
            width: 40%;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        } 

        .listComment{
            margin-left: 10px;
            margin-top: 20px;
            width: auto;
        }

        .cmt{
            width: auto;
        }


    </style>

    <title>Document</title>

</head>
<body>
    <?php
        require_once "header.php";
    ?>
    
    <div class="containers">
        <div class="title">
            <p><b>Thông tin cuốn sách</b></p>
        </div><br>
        <div class="info">
            <?php
                require_once "dbConnect.php";
                $sql = " SELECT tacgia, tentheloai, anhbia, luotxem, mota from sach JOIN theloai on sach.idTheLoai = theloai.idTheLoai where idSach = " ."'". $idsach ."'";
                $sach = $conn->query($sql);
                while($row = $sach->fetch_assoc()){
                    echo "<div class='imgBook'>";
                    echo "<img src='../" .$row['anhbia'] ."' alt='image' style='width:300px; height:500px; cursor: pointer;'>";
                    echo "</div>";

                    echo "<div class='infoBook'>";
                    echo "<p>" ."Tên: " .$tensach ."</p>";
                    echo "<p>" ."Tác giả: " .$row["tacgia"] ."</p>";
                    echo "<p>" ."Thể loại: " .$row["tentheloai"] ."</p>";
                    echo "<p>" ."Lượt xem: " .$row["luotxem"] ."</p>";
                    echo "<p>Mô tả, tóm tắt: " .$row["mota"] ."</p>";
                    echo "<a href='contentEBook.php?idsach=" .$idsach. "'><button class='read' style='color: #FFFFFF; background-color: #00FF00'>Đọc ngay</button></a>";
                    echo "</div>";
                }
            ?>
        </div>
        <div class="comment">
            <form action="#" method="POST">
                <div class="container">
                    <br><label class="labComment" for="Comment"><b>Bình luận</b></label><br>
                    <input type="text" placeholder="Viết bình luận vào đây" name="comment" required>
                    <button type="submit" name="btnComment">Gửi</button>
                </div>
            </form>
            <div class="listComment">
                <?php
                    require_once "dbConnect.php";
                    $sql = " Select username, noidung from binhluan where idSach = '" .$idsach ."' order by idComment DESC" ;
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                        echo "<div class='cmt'>";
                        echo "<img src='../img/avatar.png' alt='update' style='width:40px; height:40px; float: left'>";
                        echo "<p style='margin-left: 5px;'><b>" .$row['username'] .":</b></p>";
                        echo "<p style='margin-left: 50px;'>" .$row['noidung'] ."</p>";   
                        echo "</div>";                     
                    }           
                ?>   
            </div>
        </div>
    </div>
    
    <?php
        require_once "footer.php";
    ?>

</body>
</html>