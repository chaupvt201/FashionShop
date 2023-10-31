<!DOCTYPE html> 
<html>
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, inittial-scale=1.0"> 
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title> Web phu kien </title> 
</head> 
<body> 
    <div class="wrapper">
        <?php
        session_start(); 
        include("admincp/config/config.php");
        include("header.php"); 
        include("menu.php"); 
        include("main.php"); 
        include("footer.php");
        ?> 
        
        
</div>
        
    </div>
</body> 
</html> 