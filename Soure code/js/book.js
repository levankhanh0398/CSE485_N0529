$(document).ready(function(){
    $.get("ebookAjax.php", {trang:1}, function(data){
        $(".listBook").html(data);
    });
    $dem = 1;
    $(".next").click(function(){
        $dem = $dem + 1;
        $.get("ebookAjax.php", {trang:$dem}, function(data){
            $(".listBook").html(data);
            $(".back").css("display", "block");
        });
    });
    $(".back").click(function(){
        $dem = $dem - 1;
        $.get("ebookAjax.php", {trang:$dem}, function(data){
            $(".listBook").html(data);
            if($dem == 1){
                $(".back").css("display", "none");
            }
        });
    });
});