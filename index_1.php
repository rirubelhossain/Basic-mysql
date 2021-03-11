<?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $dbname = "pera_time";

    $conn = new mysqli($servername , $username,$pass,$dbname);


    if( $conn -> connect_error)
        echo("not connected");
    else
        echo("yes connected");

/* 
    $sql = "CREATE table sub_per(

        id int(6) unsigned auto_increment primary key ,
        first_name varchar(30) not null ,
        last_name varchar(30) not null ,
        reg_date timestamp default current_timestamp on update current_timestamp
    ) ";


    $sql = "INSERT INTO sub_per(first_name,last_name)
    VALUES('rubel', 'hossain')
    ";


    if( $conn -> query($sql) === true )
        echo("database created<br>");
    else
        echo("not connected");
*/


?>