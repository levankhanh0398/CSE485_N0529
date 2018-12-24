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
            $.get("userDisplayAjax.php", {page:1}, function(data){
                $(".listUser").html(data);
            });
            $dem = 1;
            $(".next").click(function(){
                $dem = $dem + 1;
                $.get("userDisplayAjax.php", {page:$dem}, function(data){
                    $(".listUser").html(data);
                    $(".previous").css("display", "block");
                });
            });
            $(".previous").click(function(){
                $dem = $dem - 1;
                $.get("userDisplayAjax.php", {page:$dem}, function(data){
                    $(".listUser").html(data);
                    if($dem == 1){
                        $(".previous").css("display", "none");
                    }
                });
            });
        });
    </script>
    

    <title>Quản lý người dùng</title>
</head>
<body>
    <?php
        require_once 'header.php';
    ?>
    <div class="page">
        <div class="title"><p>Quản lý người dùng</p></div>
        <div class="display">
            <table class="table">
                <thead>
                    <tr>
                        <th>Number</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="listUser">
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