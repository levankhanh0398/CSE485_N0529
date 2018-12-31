<?php
    require_once "../../php/dbConnect.php";
    $User1page = 5;

    $page = $_GET["page"];
    settype($page, 'int');

    $from = ($page - 1) * $User1page;

    $sql = " Select username, email from users limit $from, $User1page ";
    $result = $conn->query($sql);
    $i = $from + 1;
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" .$i ."</td>";
        echo "<td>" .$row['username'] ."</td>";
        echo "<td>" .$row['email'] ."</td>";
        echo "<td><a href='userUpdate.php?username=" .$row['username'] ."'><img src='../img/update.png' alt='update' style='width:20px; height:20px; cursor: pointer;' title='Cập nhập'></a></td>";
        echo "<td><a href='userDelete.php?username=" .$row['username'] ."'><img src='../img/delete.png' alt='delete' style='width:20px; height:20px; cursor: pointer;' title='Xóa'></a></td>";
        echo "</tr>";
        $i = $i + 1;
    } 
?>
