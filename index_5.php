<?php
$hostname = "localhost";
$servername = "root" ;
$pas = "" ;
$dbname = "practice_5";


$conn = new mysqli($hostname , $servername , $pas,$dbname );


if($conn -> connect_error)
{
    echo("not connected");
}
else{
    echo("connected finally ");
}

echo("<br>");

$sql = "CREATE TABLE MyGuests_3 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    
    )";
$sql_1 = "CREATE TABLE rubel_info(

    id int(10) unsigned auto_increment PRIMARY key ,
    first_name varchar(20) ,
    last_name varchar(30) 

)";

$sql_2 = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

$sql_3 = "CREATE TABLE cse_info(
    id int(6) unsigned auto_increment primary key ,
    cse_course varchar(20) not null ,
    cse_result varchar(30) not null ,
    cse_courrent_student varchar(20) not null ,
    reg_date timestamp default current_timestamp on update current_timestamp 


)";
/*
$sql_4 = "INSERT INTO cse_info(cse_course , cse_result , cse_courrent_student)
VALUES('CSE10', '80' , '45');"; 
*/
$sql_4 = "INSERT INTO cse_info(cse_course , cse_result , cse_courrent_student)
VALUES('CSE102' , '90' , '30')";
/*
$sql_4 .= "INSERT INTO cse_info(cse_course , cse_result , cse_courrent_student)
VALUES('CSE103' , '90' , '30')";
*/


if($conn -> query($sql_4) === true )
{
    echo("yes created");
}
else{
    echo("not created yet". $conn->error);
}





?>