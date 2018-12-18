<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        require "dbConnect.php";
    ?>
    <?php
    
    $sql = "SELECT tenTheLoai FROM theloai";
    $result = $conn->query($sql);
    echo "haha";
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            // echo "<h1> id: " . $row["username"]. " - Name: " . $row["password"]. " " . $row["email"]. "<br> </h1>";
            echo $row["tenTheLoai"];
        }
    }else {
        echo "0 results";
    }

    $conn->close();
    ?>
    

</body>
</html>