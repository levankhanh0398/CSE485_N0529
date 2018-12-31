<?php
    require_once "../../php/dbConnect.php";
    $Book1page = 5;

    $page = $_GET["page"];
    settype($page, 'int');

    $from = ($page - 1) * $Book1page;

    $sql = " Select * from sach limit $from, $Book1page ";
    $result = $conn->query($sql);
    $i = $from + 1;
    while($row = $result->fetch_assoc()){
        $sql2 = "Select * from theloai where idTheLoai = '" .$row['idTheLoai'] ."'";
        $result2 = $conn->query($sql2);
        while($row2 = $result2->fetch_assoc()){
            $tenTheLoai = $row2['tenTheLoai'];
        }
        echo "<tr>";
        echo "<td>" .$i ."</td>";
        echo "<td><img src='../../" .$row['anhbia'] ."' alt='anhbia' style='width:50px; height:80px;'></td>";
        echo "<td>" .$row['tenSach'] ."</td>";
        echo "<td>" .$row['tacgia'] ."</td>";
        echo "<td>" .$tenTheLoai ."</td>";
        echo "<td>" .$row['dangsach'] ."</td>";
        echo "<td>" .$row['luotxem'] ."</td>";
        echo "<td><a href='bookContent.php?book=" .$row['tenSach'] ."&idsach=" .$row['idSach'] ."'><img src='../img/content.png' alt='content' style='width:20px; height:20px; cursor: pointer;' title='Nội dung'></a></td>";
        echo "<td><a href='bookUpdate.php?book=" .$row['tenSach'] ."&idsach=" .$row['idSach'] ."'><img src='../img/update.png' alt='update' style='width:20px; height:20px; cursor: pointer;' title='Cập nhập'></a></td>";
        echo "<td><a href='bookDelete.php?book=" .$row['tenSach'] ."&idsach=" .$row['idSach'] ."'><img src='../img/delete.png' alt='delete' style='width:20px; height:20px; cursor: pointer;' title='Xóa'></a></td>";
        echo "</tr>";
        $i = $i + 1;
    } 
?>
