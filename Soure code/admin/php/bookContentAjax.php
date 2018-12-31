<?php
    require_once "../../php/dbConnect.php";
    $chap1page = 5;

    $page = $_GET["page"];
    $idsach = $_GET["idsach"];
    settype($page, 'int');

    $from = ($page - 1) * $chap1page;

    $sql = " Select * from noidungsach where idSach = '" .$idsach ."' limit $from, $chap1page";
    $result = $conn->query($sql);
    $i = $from + 1;
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" .$i ."</td>";
        echo "<td>" .$row['tenchuong'] ."</td>";
        echo "<td><a href='../../" .$row['noidung'] ."'><img src='../img/pdf.png' alt='content' style='width:20px; height:20px; cursor: pointer;' title='Nội dung'></a></td>";
        echo "<td><a href='bookContentUpdate.php?chuong=" .$row['tenchuong'] ."&idsach=" .$idsach ."'><img src='../img/update.png' alt='update' style='width:20px; height:20px; cursor: pointer;' title='Cập nhập'></a></td>";
        echo "<td><a href='bookContentDelete.php?chuong=" .$row['tenchuong'] ."&idsach=" .$idsach ."'><img src='../img/delete.png' alt='delete' style='width:20px; height:20px; cursor: pointer;' title='Xóa'></a></td>";
        echo "</tr>";
        $i = $i + 1;
    } 
?>
