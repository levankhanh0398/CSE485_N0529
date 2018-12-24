<style>
    ul {
        list-style-type: none;
        /* margin: -8px; */
        margin-top: 48px;
        margin-right: -8px;
        margin-bottom: -8px;
        margin-left: -8px;
        padding: 0px;
        width: 14%;
        background-color: #343a40;
        position: fixed;
        height: 100%;
        overflow: auto;
    }

    li{
        margin-top: 7px;
    }

    li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
        color: white;
    }

    .menu{
        width: 1366px;
        height: 56px;
        padding: 0px;
        background-color: black;
        margin: -8px;
        position: fixed;
    }

    .mp{
        color: whitesmoke;
        float: left;
        margin-left: 10px;
        font-size: 20px;
    }

    .mp p{
        margin-bottom: 4px;
        width: 100%;
    }

    .ma a{
        color: whitesmoke;
        float: left;
        text-decoration: none;
        margin-top: 18px;
        margin-left: 1115px;
        font-size: 19px;
    }

</style>

<div class="menu">
    <div class="mp"><p class="hello">Xin chào! Admin</p></div>
    <div class="ma"><a href="logout.php">Đăng xuất</a></div>
</div>
<ul>
    <li><a href="index.php">Tổng quan</a></li>
    <li><a href="userManagement.php">Quản lý người dùng</a></li>
    <li><a href="categoryManagement.php">Quản lý thể loại</a></li>
    <li><a href="bookManagement.php">Quản lý sách</a></li>
</ul>
