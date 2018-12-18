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
    
    <title>Document</title>

</head>
<body>
    <?php
        require_once "header.php";
        $tensach  = $_GET["tensach"];
    ?>
    
    <div class="containers">
        <p class="title" style="font-size: 20px"><b>Thông tin cuốn sách</b></p>
        <?php
            require_once "dbConnect.php";
            $sql = " SELECT  idsach, tensach, tacgia, tentheloai from sach JOIN theloai on sach.idTheLoai = theloai.idTheLoai where tensach = " ."'". $tensach ."'";
            $sach = $conn->query($sql);
            while($row = $sach->fetch_assoc()){
                $idsach = $row["idsach"];
                echo "<div class='infoBook'>";
                echo "<p>" ."Tên: " .$row["tensach"] ."</p>";
                echo "<p>" ."Tác giả: " .$row["tacgia"] ."</p>";
                echo "<p>" ."Thể loại: " .$row["tentheloai"] ."</p>";
                echo "<a href='contentEBook.php?idsach=" .$idsach. "'><button class='read' style='color: #FFFFFF; background-color: #00FF00'>Đọc ngay</button></a>";
                echo "</div>";
            }
        ?>
    </div>
    
    <?php
        require_once "footer.php";
    ?>

</body>
</html>