<?php
$hostname = "localhost" ;
$root_name = "root" ;
$pas = "";
$db_naem = "w3chool_sql_practice";

$conn = new mysqli($hostname , $root_name , $pas , $db_naem);


///create database here 
///$sql = "CREATE DATABASE w3chool_sql_practice";
//create table for database w3school 

/* 
$sql = "CREATE TABLE customers(
    customersID int(6) unsigned auto_increment primary key ,
    customersName varchar(30) not null ,
    contactName varchar(30) not null , 
    customersAddress varchar(30) not null ,
    city varchar(30) not null ,
    postalCode varchar(30) not null ,
    country varchar(30) not null ,
    reg_date timestamp default current_timestamp on update current_timestamp 

)";
$sql = "INSERT INTO customers(customersName , contactName , customersAddress , city , postalCode , country)
VALUES('Bs Beverages', 'Victoria Ashworth' ,'Fauntleroy Circus' , 'London', 'EC2 5NT','UK')";
*/
$sql = "SELECT * from customers where country ='Germany' and postalCode = '68306' ";

/* 
if( $conn -> query($sql) === true )
{
    echo("yes database has been created <br>");
}
else{
    echo("no database has been created ". $conn->error);
}
*/
$resutl = $conn -> query($sql);

if( $resutl -> num_rows > 0 )
{
    while( $row = $resutl -> fetch_assoc())
    {
        echo($row["customersName"]." ".$row["contactName"]." ".$row["customersAddress"]." ".$row["city"]." ".$row["postalCode"]." ".$row["country"]."<br>" );
    }
}



$conn->close();


?>