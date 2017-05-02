<?php 
    #this is php example for beginner

    $x = 5 + 6;
    $text1 = "<br>this is sample var";

    echo "<br>$x" .$text1. "!";

    function myfunction() {  
        static $x = 0;
        echo $x;
        $x++;
    }
    echo "<br>";
    myfunction();
    echo "<br>";
    myfunction();
    echo "<br>";
    myfunction();
    echo "<br>";

    // This is a single-line comment

    # This is also a single-line comment

    /*
    This is a multiple-lines comment block
    that spans over multiple
    lines
    */

    // You can also use comments to leave out parts of a code line 

    $a = 115 /* + 15 */ ;
    $b = 30;

    if ($a == 15) {
    print "<br>this is right answer!!!";
    }
    else{
    print "this is wrong answer!!!";
    }
 ?>
