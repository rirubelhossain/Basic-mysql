<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this is home page</title>
</head>
<body>
    <?php
        echo("Welcome to my home page ..<br>");
        echo("Some more text Here<br>") ;
    ?>    
    <?php
        $var = 20 ;
    if( $var == 19)
    {
        include 'footer.php' ;
    }
    ?>
</body>
</html>