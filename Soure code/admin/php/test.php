<!-- <?php

    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
?>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
 
    <style>
    #book{
        width:600px;
        height:300px;
    }
    #book .turn-page{
        width:300px;
        height:300px;
    }
    </style>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="http://www.turnjs.com/turn.min.js"></script>
    <script>
    $(function(){
        $("#book").turn();
        $("#previous, #next").click(function()
        {
            $("#book").turn($(this).text());
        });
    });
    </script>
 
</head>
<body>
    <!-- <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="fileUpdate" id="fileUpdate">
        <input type="submit" value="Update">
    </form> -->
    <div align="center">
    <h1>turn.js</h1>
    <h3>The awesome paper-like effect made for HTML5</h3>
        <button id="previous">previous</button>
    <button id="next">next</button>
    <hr/>
    <div id='book'>
        <img src="../../img/1165.jpg"/>
        <img src="../../img/5769.jpg"/>
        <img src="../../img/5858.jpg"/>
        <img src="../../img/5928.jpg"/>
        <img src="../../img/13376.jpg"/>
    </div>
    <hr/>
 
</div>
</body>
</html> 


