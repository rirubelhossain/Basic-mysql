<?php
    $variable = new mysqli("localhost" , "root" , "" , "pp_1");

    if( $variable -> connect_error )
    {
        die("not connected yet");
    }
    echo("connection properly");


?>