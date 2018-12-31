<?php
    require_once "../../php/dbConnect.php";
    $Category1page = 5;

    $page = $_GET["page"];
    settype($page, 'int');

    $from = ($page - 1) * $Category1page;

    $sql = " Select * from theloai limit $from, $Category1page ";
    $result = $conn->query($sql);
    $i = $from + 1;
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" .$i ."</td>";
        echo "<td>" .$row['tenTheLoai'] ."</td>";
        echo "<td><a href='categoryUpdate.php?theloai=" .$row['tenTheLoai'] ."&idtheloai=" .$row['idTheLoai'] ."'><img src='../img/update.png' alt='update' style='width:20px; height:20px; cursor: pointer;' title='Cập nhập'></a></td>";
        echo "<td><a href='categoryDelete.php?theloai=" .$row['tenTheLoai'] ."&idtheloai=" .$row['idTheLoai'] ."'><img src='../img/delete.png' alt='delete' style='width:20px; height:20px; cursor: pointer;' title='Xóa'></a></td>";
        echo "</tr>";
        $i = $i + 1;
    } 
?>
