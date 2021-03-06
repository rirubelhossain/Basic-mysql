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
        $name = $email = $gender = $commnet = $website = "" ;
        if( $_SERVER["REQUEST_METHOD"] == "POST"){
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]) ;
            $website = test_input($_POST["website"]);
            $commnet = test_input($_POST["commnet"]);
            $gender = test_input($_POST["gender"]) ;
        }
        function test_input($data)
        {
            $data = trim($data) ;
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return($data) ;
        }
    ?>


    <form action = "<?php
        echo(htmlspecialchars($_SERVER["PHP_SELF"]));
    ?>" method = "post">
    <!-- Text field area -->
    Name : <input type = "text"  name = "name"><br>
    E-mail : <input type = "text"  name = "email"><br>
    Website : <input type = "text" name = "website"><br>
    Comment : <textarea name = "commnet" row = "5" clos = "40" ></textarea>

    <!--Radion Buttons area-->
    <br>
    Gender :
    <input type = "radio"  name = "gender" value = "female">Female
    <input type = "radio"  name = "gender" value = "male">Male 
    <input type = "radio" name = "gender" value = "Others">Others
    <br>
    <input type = "submit">
    </from>

    <?php
    echo("<h2>Your Input : </h2>") ;
    echo($name);
    echo("<br>") ;
    echo($email) ;
    echo("<br>");
    echo($website);
    echo("<br>");
    echo($commnet);
    echo("<br>");
    echo($gender);
    
    ?>

    
</body>
</html>