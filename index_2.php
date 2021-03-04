<?php

$localhost_name = "localhost"; 
$root_name = "root" ;
$empty_space = "" ;


$connection = new mysqli($localhost_name , $root_name , $empty_space);


if( !$connection -> connect_error === true )
    echo("yes");
else
    echo("no");


$sql = "DROP DATABASE mydb " ;
    
if( $connection ->query($sql) === true )
    echo("database has been created");
else
    echo("not created yet");



    mysqli_close($connection);

?>