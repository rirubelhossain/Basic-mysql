<?php
$server_name = "localhost" ;
$username = "root";
$password = "" ;
$database_name = "mydb" ;

$conn = mysqli_connect($server_name , $username,$password ,$database_name) ;

if( $conn )
    echo("not connected") ;
else
    echo("connected");



?>