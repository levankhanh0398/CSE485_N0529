<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/comic.js"></script>

    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bookStyle.css">
    <link rel="stylesheet" href="../css/css/bootstrap.min.css">

    <title>Truyện tranh</title>
    
</head>
<body>
    <?php
        require_once "header.php";
    ?>
    <div class="containers">
        <div class="menu">
            <div class="title">
                <p><b>Truyện tranh</b></p>
            </div>
            <div class="select">
                <select class="theloai">
                    <option>Tất cả</option>
                    <?php
                        require_once "../php/dbConnect.php";
                        $sql = " Select tenTheLoai from TheLoai ";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()) {
                            echo "<option>" .$row['tenTheLoai'] ."</option>";
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="containers-listBook">
            <div class="listBook">
            </div>
            <div class="ctrlPage">
                <button class="next" style="color: #FFFFFF; background-color: #00FF00">Tiếp</button>
                <button class="back" style="color: #FFFFFF; background-color: #00FF00; display : none; float: left ">Quay lại</button>
            </div>
        </div>        
    </div>
    <?php
        require_once "footer.php";
    ?>
</body>
</html>