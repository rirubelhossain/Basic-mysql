<?php

/*
$diect = "localhost" ;
$root_1 = "root" ;
$nothing = "" ;
//$database_name = "pp_3";
$variable = new mysqli($diect , $root_1 , $nothing );




if( $variable -> connect_error)
    echo("not scessful yet");
else
    echo("sccessfull connection");

echo("<br>");

// Create database
$sql = "CREATE DATABASE rubel_my_db";
if ($variable->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $variable->error;
}

$variable->close();

*/
$procedural_local = "localhost" ;
$procedural_root = "root";
$procedural_empty ="" ;
$procedural_pass ;
///whereas new for OOP
$conn = mysqli_connect($procedural_local,$procedural_root,$procedural_empty);

if( $conn)
    echo("sccessfully");
else
    echo("not sccessfully");

///now create database 

$sql = "DROP DATABASE rubel" ;
if( mysqli_query($conn , $sql))
    echo("Database create sccessfully");
else
    echo("not create properly");

mysqli_close($conn);

 

?>