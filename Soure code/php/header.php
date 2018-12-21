<?php
    session_start();
?>

<style>
    li.nav-item {
        margin-left: 18px;
        }

    .dropdown-content a {
        float: left;
        font-size: 16px;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropbtn{
        background-color:  #343a40;
        border-color:  #343a40;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .show {
        display: block;
    }
}

</style>

<div class="header">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php"><i class="fas fa-home"></i>Trang Chủ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../php/ebook.php">Sách Điện Tử</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Truyện Tranh</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Nhập tên sách">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm Kiếm</button>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <?php
                            if(isset($_SESSION['username'])){
                                echo '<p class="dropbtn" onclick="myFunction()" style="color:white; cursor: pointer;">' .$_SESSION['username'] .'<i class="fa fa-caret-down"></i></p>
                                      <div class="dropdown-content" id="myDropdown">
                                            <a href="#">Tài khoản</a>
                                            <a href="logout.php">Đăng xuất</a></div>';
                            } else{
                                echo '<a class="nav-link-login" href="login.php"><i class="fas fa-user"></i>Đăng nhập</a>';
                            }
                        ?>
                    </li>
                </ul>
            </form>
        </div>
    </nav>
</div>

<script src="../js/jquery-3.3.1.js"></script>
<script>
    function myFunction(){
        document.getElementById("myDropdown").classList.toggle("show");
    }

    window.onclick = function(e) {
        if (!e.target.matches('.dropbtn')){
            var myDropdown = document.getElementById("myDropdown");
            if (myDropdown.classList.contains('show')) {
                myDropdown.classList.remove('show');
            }
        }
    }
</script>
