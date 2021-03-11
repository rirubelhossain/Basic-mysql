<?php
    $color = array('red' , 'black' , 'blue' , 'green') ;

    $counter = 0 ;


    for($i = 0 ; $i < 4 ; ++$i)
    {
        echo($color[$i]."<br>");
    }
    echo("this is first time <br>");

    function call_again()
    {
        echo("finally you got me!!...very nice<br>");
    }
    function call_red()
    {
        call_again() ;
    }
    foreach( $color  as $i )
    {   
        ++$counter ;
        echo($i . "<br>") ;

        if( $i == 'red')
        {
            call_red();
        }
    }

    echo("the total result is = ". $counter );


    
?>