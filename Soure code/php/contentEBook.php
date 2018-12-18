<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="../js/jquery-3.3.1.js"></script>
    <script>
        $(document).ready(function(){
            $id = $('.btnHienThi').val();
            $chap = $('select').val();
            $.get("contentEBookAjax.php", {idsach:$id, chuong:$chap}, function(data){
                $(".contentBook").html(data);
            });
            $(".btnHienThi").click(function(){
                $id = $('.btnHienThi').val();
                $chap = $('select').val();
                $.get("contentEBookAjax.php", {idsach:$id, chuong:$chap}, function(data){
                    $(".contentBook").html(data);
                });
            })
        })
    </script>

</head>
<body>
    <style>
        .contentBook p{
            font-size:25px;
        }
    </style>
    <div class="mucluc">
        <?php
            $idsach = $_GET["idsach"];
            require_once "dbConnect.php";

            $sql = " SELECT chuong from noidungsach where idsach = " ."'". $idsach ."'";
            $sach = $conn->query($sql);

            echo "Chọn chương:  <select>";
            while($row = $sach->fetch_assoc()){
                echo "<option>" .$row["chuong"] ."</option>";
            }
            echo "</select>";

            echo "<button class='btnHienThi' value=". $idsach .">Hiển thị</button>";
            echo "<div class='contentBook'></div>";
        ?>
    </div>

</body>
</html>
