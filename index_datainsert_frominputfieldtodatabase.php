<!DOCTYPE html>
<html>
<head>
    <!-- Site made with Mobirise Website Builder v3.12.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="Site Builder Description">
  <title>CONTACT US</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

     <!-- this is included swewtalert-->
  <script src="sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="sweetalert2/sweetalert2.css">

</head>
<body>  
    <form  action="index.php" method="post">
        <form>

            <div class="input">
                <input type="text" placeholder="Your Name" name="yourname">
            </div>
            <div class="input">
                <input type="number" placeholder="Your Phone Number" name="Phone">
            </div>
            <div class="input">
            <input type="email" placeholder="Your Email Address" name="email">
            </div>
         <a>   <button  name="submit">submit</button> </a>
         
        </form>
    </form>
</body>
</html>
<?php

if(isset($_POST["submit"]))
{   
    
    $name = $_POST["yourname"];
    $phone = $_POST["Phone"];
    $email = $_POST["email"];

    $servername = "localhost"; 
    $username = "root";
    $password = "";
    $dbname = "edustage";

    $conn = new mysqli($servername , $username , $password,$dbname);
/*
    if( $conn -> query($sql) === true)
    {
        die("Not connected yet");
    }
    else{
        echo("Yes connected");
    }
*/
    /*
    $sql = "CREATE TABLE course_info(
        id_serial int(6) unsigned auto_increment primary key ,
        student_name varchar(20) not null ,
        student_phn varchar(20) not null ,
        student_email varchar(20) not null ,
        reg_date timestamp default current_timestamp on update current_timestamp 
    )";
    */
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
            $a = $b = $c = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $a = test_input($_POST["yourname"]);
          $b = test_input($_POST["Phone"]);
          $c = test_input($_POST["email"]);
          
        }
        $name = $a ;
        $phone = $b ;
        $email = $c ;
        echo "the name is = ". $name ."<br>";
        echo "the phne is = ". $phone ."<br>";
        echo("the email is = ".$email."<br>");

    $sql = "INSERT INTO `course_info` ( `student_name`, `student_phn`, `student_email`) VALUES ( '$name', '$phone', '$email')";

    if( $conn -> query($sql) === true )
    {
        echo("data insert sccessfully");
    }
    else{
        echo("Not insert sccessfully" . $conn->error);
    }
    /*
        $servername = "localhost"; 
        $username = "root";
        $password = "";
        $dbname = "edustage";

        $connection = new mysqli($servername,$username, $password, $dbname);
        //database linking 
        $name = $_POST['yourname'];
        $phone = $_POST['Phone'];
        $email = $_POST['email'];
        
        $sql2 = "select *from course_info";
        $tresult = mysqli_query($connection, $sql2);
        $total = mysqli_num_rows($tresult);
        $total =$total+1;

        $sql = "INSERT INTO `course_info` (`id_serial`, `student_name`, `student_phn`, `student_email`) VALUES (      '$total', '$name', '$phone', '$email')";

        $result= mysqli_query($connection,$sql);
        //echo $result ;
        if($result)
        {
            echo "<script language='javascript'>
                    swal(
                          'Thank You',
                          'We have accepted your message',
                          'success'
                        )
                </script>";
        }
        else
        {
            echo "<script language='javascript'>
                    
                    swal(
                  'Sorry!!!',
                  'Somethign wet wrong check again',
                  'error'
                )           
            </script>";
        }
        */
}
?>