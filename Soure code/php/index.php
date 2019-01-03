<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/indexStyle.css">
    <link rel="stylesheet" href="../css/bookStyle.css">
    <link rel="stylesheet" href="../css/css/bootstrap.min.css">

    <title>Sách hay</title>

</head>

<body>
    <?php
        require_once "header.php";
    ?>
    <div class="container">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../img/sach1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../img/sach2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../img/sach3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>

    <div class="container-content">
        <div class="hot"><p>HOT<p></div>
        <div class="content">
            <?php
            require_once "dbConnect.php";
            $sql = " SELECT * FROM `sach` ORDER by luotxem DESC limit 0, 6 ";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
                echo "<div class='book'>";
                echo "<div class='imgBook'>";
                echo "<a href='infoBook.php?tensach=" .$row['tenSach'] ."&id=" .$row['idSach'] ."'><img src='../" .$row['anhbia'] ."' alt='update' style='width:160px; height:226px; cursor: pointer;' ></a>";
                echo "</div>";
                echo "<div class='titleBook'>";
                echo "<a href='infoBook.php?tensach=" .$row["tenSach"] ."&id=" .$row['idSach'] ."'>" .$row["tenSach"]. "</a>";
                echo "<p class='view' style= margin-top:150px;'>Lượt xem: " .$row['luotxem'] ."</p>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

    <?php
        require_once "footer.php";
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
    <script src="../css/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>
    <!-- Holder.js for placeholder images -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>

    
</body>
</html>