<?php
    require_once "dbConnect.php";
    $sosach1trang = 10;

    $trang = $_GET["trang"];
    settype($trang, 'int');

    $from = ($trang - 1) * $sosach1trang;

    $sql = " Select tenSach from Sach limit $from, $sosach1trang ";
    $sql2 = " SELECT COUNT(idSach) as dem FROM sach";
    $sach = $conn->query($sql);
    $demSach =  $conn->query($sql2);
    $row2 = $demSach->fetch_assoc();
    $ds = $row2["dem"];
    settype($ds, 'int');
    if($ds == 0){
        echo "<div class='motSach'>Thể loại này chưa có sách, mời bạn quay lại sau!</div>";
    }
    if($from > $ds){
        echo "<div class='motSach'>Không còn sách, mời bạn quay lại</div>";
    }
    while($row = $sach->fetch_assoc()){
        echo "<div class='motSach'>";
        echo "<a href='infoBook.php?tensach=" .$row["tenSach"]. "'>" .$row["tenSach"]. "</a>";
        echo "</div>";
    }
    
?>