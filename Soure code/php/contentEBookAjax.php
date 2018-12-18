<?php
    require_once "dbConnect.php";
    $idsach = $_GET["idsach"]; 
    $chuong = $_GET["chuong"]; 
    $sql = " SELECT noidung from noidungsach where idsach = " ."'". $idsach ."' and chuong = " ."'". $chuong. "'" ;
    $sach = $conn->query($sql);
    while($row = $sach->fetch_assoc()){
        echo "<p>" .$row["noidung"] ."</p>";
    }
    ?>