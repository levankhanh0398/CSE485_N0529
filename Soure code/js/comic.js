$(document).ready(function(){
    $dem = 1;
    $theloai = $('.theloai').val();
    $.get("comicAjax.php", {trang:$dem, theloai:$theloai}, function(data){
        $(".listBook").html(data);
    });
    $(".next").click(function(){
        $dem = $dem + 1;
        $.get("comicAjax.php", {trang:$dem, theloai:$theloai}, function(data){
            $(".listBook").html(data);
            $(".back").css("display", "block");
        });
    });
    $(".back").click(function(){
        $dem = $dem - 1;
        $.get("comicAjax.php", {trang:$dem, theloai:$theloai}, function(data){
            $(".listBook").html(data);
            if($dem == 1){
                $(".back").css("display", "none");
            }
        });
    });
    $('.theloai').change(function(){
        $theloai = $('.theloai').val();
        $dem = 1;
        $(".back").css("display", "none");
        $.get("comicAjax.php", {trang:$dem, theloai:$theloai}, function(data){
            $(".listBook").html(data);
        });
    });
});