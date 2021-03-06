<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome_3 </title>
</head>
<body>
    <?php
        $firstname = "firstname";
        $lastname = "lastname";
        $email = "email";


        echo("The first name is = ". $_POST[$firstname]."<br>");
        echo("The last name is = ". $_POST[$lastname]."<br>");
        echo("The email is = ". $_POST[$email]."<br>");

        if( !empty($firstname))
        {
            echo("The first name is = ". $_POST[$firstname]." this is my last name "."<br>");
        }
        else{
            echo("something went wrong");
        }

    
    ?>
</body>
</html>