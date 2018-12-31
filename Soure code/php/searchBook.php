<?php
    if(isset($_POST['btnSearch'])){
        $bookName = $_POST['bookName'];

        require_once "dbConnect.php";
        $sql = "Select count(tenSach) as dem from sach where tenSach = '" .$bookName ."'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $dem = $row["dem"];
        echo "Số kết quả tìm kiếm: " .$dem ."<br>";

        $sql = "Select * from sach where tenSach = '" .$bookName ."'";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            echo "<a href='infoBook.php?tensach=" .$row['tenSach'] ."&id=" .$row['idSach'] ."'>$bookName</a><br>";
        }
    }



?>