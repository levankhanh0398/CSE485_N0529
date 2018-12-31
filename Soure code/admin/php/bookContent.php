<?php
    $idsach = $_GET["idsach"];
    $tensach = $_GET["book"];
?>
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
            $id = $('.btnAdd').val();
            $.get("bookContentAjax.php", {page:1, idsach:$id}, function(data){
                $(".listContent").html(data);
            });
            $dem = 1;
            $(".next").click(function(){
                $id = $('.btnAdd').val();
                $dem = $dem + 1;
                $.get("bookContentAjax.php", {page:$dem, idsach:$id}, function(data){
                    $(".listContent").html(data);
                    $(".previous").css("display", "block");
                });
            });
            $(".previous").click(function(){
                $id = $('.btnAdd').val();
                $dem = $dem - 1;
                $.get("bookContentAjax.php", {page:$dem, idsach:$id}, function(data){
                    $(".listContent").html(data);
                    if($dem == 1){
                        $(".previous").css("display", "none");
                    }
                });
            });
        });
    </script>

    <title><?php echo $tensach ?></title>
</head>
<body>
    <?php
        require_once 'header.php';
    ?>
    
    <div class="page" style="height: 850px;">
        <div class="title">
            <p>Tên sách: <?php echo $tensach ?></p>
            <button class="btnAdd" style="margin-bottom: 19px; margin-left: 21px; background-color: #4CAF50; cursor: pointer; width: 82px; height: 32px;" value="<?php echo $idsach ?>">
                <a href="bookContentAdd.php?tensach=<?php echo $tensach ?>&idsach=<?php echo $idsach ?>" style="text-decoration: none; color: white;"><b>Thêm mới</b></a>
            </button>
        </div>
        <div class="display">
            <table class="table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên chương</th>
                        <th>Nội dung</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="listContent">
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