<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../css/pageStyle.css">

    <script src="../js/jquery-3.3.1.js"></script>

    <script>
        $(document).ready(function(){
            $.get("bookDisplayAjax.php", {page:1}, function(data){
                $(".listBook").html(data);
            });
            $dem = 1;
            $(".next").click(function(){
                $dem = $dem + 1;
                $.get("bookDisplayAjax.php", {page:$dem}, function(data){
                    $(".listBook").html(data);
                    $(".previous").css("display", "block");
                });
            });
            $(".previous").click(function(){
                $dem = $dem - 1;
                $.get("bookDisplayAjax.php", {page:$dem}, function(data){
                    $(".listBook").html(data);
                    if($dem == 1){
                        $(".previous").css("display", "none");
                    }
                });
            });
        });
    </script>

    <title>Quản lý sách</title>
</head>
<body>
    <?php
        require_once 'header.php';
    ?>
    
    <div class="page" style="height: 850px;">
        <div class="title">
            <p>Quản lý sách</p>
            <button style="margin-bottom: 19px; margin-left: 21px; background-color: #4CAF50; cursor: pointer; width: 82px; height: 32px;">
                <a href="BookAdd.php" style="text-decoration: none; color: white;"><b>Thêm mới</b></a>
            </button>
        </div>
        <div class="display">
            <table class="table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Ảnh bìa</th>
                        <th>Tên sách</th>
                        <th>Tác giả</th>
                        <th>Thể loại</th>
                        <th>Dạng sách</th>
                        <th>Lượt xem</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="listBook">
                </tbody>
            </table>
        </div>
        <div class="center">
            <div class="pagination">
                <a href="#" class="previous">Previous</a>
                <a href="#" class="next">Next</a>
            </div>
        </div>
    </div>    
</body>
</html>