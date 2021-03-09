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
$dbname = "course_reg" ;
///whereas new for OOP
$conn = mysqli_connect($procedural_local,$procedural_root,$procedural_empty, $dbname);


/*
$sql = "CREATE TABLE cse102(
    student_id int(5) unsigned auto_increment primary key ,
    student_name varchar(40) not null ,
    student_section varchar(50) not null ,
    student_intake varchar(50) not null ,
    student_email varchar(89) not null ,
    reg_date timestamp default current_timestamp on update current_timestamp
)";

$sql = "INSERT INTO `cse101` (`student_name`,`student_section`,`student_intake`,`student_email`)
VALUES('bipul hossain','4' , '32' , 'bipulphp94@gmaail.com')
";



if( $conn -> query($sql) === true )
    print("yes");
else
    print("not");


$sql = "SELECT student_name 
from cse101 
where student_section = 3 or  student_section = 2";

$sql = "DELETE from cse101 
 where student_section = 1  
";


if( $conn -> query($sql) === true )
    print("yes");
else
    print("not");
*/
$sql = "SELECT COUNT(student_section) as count_var from cse101";
$counter = 0 ;

$result = $conn->query($sql);

$output = "";
if( $result -> num_rows > 0 )
{
    while( $row = $result -> fetch_assoc())
    {   
        ++$counter ;
        $output = "Number of row ". $row['count_var'];

    }
    echo("The number of student = ". $counter) ;
}
echo("the output is = ".$output);


/*
                        $result = mysqli_query($conn, $sql);
                        $cnt = mysqli_num_rows($result);
                        if($cnt)
                        {
                          $data = "";
                          while($row = mysqli_fetch_assoc($result))
                          {
                            $data = $data."<option value='".$row["student_name"]."</option>";
                          }

                          echo $data;
                          
                        }
*/

 

?>