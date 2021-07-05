<?php
$servername = "localhost";
$username = "root";
$pass = "";


$conn = new mysqli($servername , $username , $pass );
///mysqli is the built in function which is strore some parameters 
if($conn -> connect_error )
{
    die("Not connected");
}else{
    echo "connection successful";
}

?
