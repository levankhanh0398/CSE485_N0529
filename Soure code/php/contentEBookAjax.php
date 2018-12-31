<?php
    require_once "dbConnect.php";
    $idsach = $_GET["idsach"]; 
    $chuong = $_GET["chuong"]; 
    $sql = " SELECT tenchuong, noidung from noidungsach where idsach = " ."'". $idsach ."' and tenchuong = " ."'". $chuong. "'" ;
    $sach = $conn->query($sql);
    while($row = $sach->fetch_assoc()){
        echo "<p><a href='../" .$row["noidung"] ."'>" .$row["tenchuong"] ."</a></p>";
    }
    ?>