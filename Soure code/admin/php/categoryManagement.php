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
            $.get("categoryDisplayAjax.php", {page:1}, function(data){
                $(".listCategory").html(data);
            });
            $dem = 1;
            $(".next").click(function(){
                $dem = $dem + 1;
                $.get("categoryDisplayAjax.php", {page:$dem}, function(data){
                    $(".listCategory").html(data);
                    $(".previous").css("display", "block");
                });
            });
            $(".previous").click(function(){
                $dem = $dem - 1;
                $.get("categoryDisplayAjax.php", {page:$dem}, function(data){
                    $(".listCategory").html(data);
                    if($dem == 1){
                        $(".previous").css("display", "none");
                    }
                });
            });
        });
    </script>
    

    <title>Quản lý thể loại</title>
</head>
<body>
    <?php
        require_once 'header.php';
    ?>
    <div class="page">
        <div class="title">
            <p>Quản lý thể loại</p>
            <button style="margin-bottom: 19px; margin-left: 21px; background-color: #4CAF50; cursor: pointer; width: 82px; height: 32px;">
                <a href="categoryAdd.php" style="text-decoration: none; color: white;"><b>Thêm mới</b></a>
            </button>
        </div>
        <div class="display">
            <table class="table">
                <thead>
                    <tr>
                        <th>Number</th>
                        <th>Thể loại</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="listCategory">
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