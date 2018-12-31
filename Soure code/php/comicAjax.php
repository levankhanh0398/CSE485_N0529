<?php
    require_once "dbConnect.php";
    $sosach1trang = 6;

    $trang = $_GET["trang"];
    $theloai = $_GET["theloai"];
    settype($trang, 'int');

    $from = ($trang - 1) * $sosach1trang;

    if($theloai == "Tất cả"){
        $sql = " Select idSach, tenSach, anhbia, luotxem from Sach where dangsach = 'Truyện tranh' limit $from, $sosach1trang ";
        $sql2 = " SELECT COUNT(idSach) as dem FROM sach where dangsach = 'Truyện tranh'";
        $sach = $conn->query($sql);
        $demSach =  $conn->query($sql2);
        $row2 = $demSach->fetch_assoc();
        $ds = $row2["dem"];
        $ds = (int)$ds;
        if($ds == 0){
            echo "<div class='motSach'>Thể loại này chưa có sách, mời bạn quay lại sau!</div>";
        } else{
            if($from >= $ds){
                echo "<div class='motSach'>Không còn sách, mời bạn quay lại</div>";
            }
            while($row = $sach->fetch_assoc()){
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
        }
        
    } else{
        $sql = " Select * from theloai where tenTheLoai = '" .$theloai ."'";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            $idTheLoai = $row['idTheLoai'];
        }

        $sql = " Select idSach, tenSach, anhbia, luotxem from Sach where dangsach = 'Truyện tranh' and idTheLoai = '" .$idTheLoai ."' limit $from, $sosach1trang ";
        $sql2 = " SELECT COUNT(idSach) as dem FROM sach where idTheLoai = $idTheLoai and dangsach = 'Truyện tranh'";
        $sach = $conn->query($sql);
        $demSach =  $conn->query($sql2);
        $row2 = $demSach->fetch_assoc();
        $ds = $row2["dem"];
        $ds = (int)$ds;
        if($ds == 0){
            echo "<div class='motSach'>Thể loại này chưa có sách, mời bạn quay lại sau!</div>";
        } else{
            if($from >= $ds){
                echo "<div class='motSach'>Không còn sách, mời bạn quay lại</div>";
            }
            while($row = $sach->fetch_assoc()){
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
        }
    }
?>