<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = $_POST["name"] ;
    $email = $_POST["email"] ;
    $wb = $_POST["web"] ;
    $comnt = $_POST["comment"] ;


    echo("name = ". $_POST[$name] . " ". "email" . $_POST[$email]. " ". $_POST[$wb]. " ". $_POST[$comnt] );

    
    ?>
</body>
</html>