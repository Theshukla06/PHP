<!DOCTYPE html>
<html lang="en">
<head>
    <title>First PHP Page</title>
</head>
<body>
    <?php
    /*
    echo "Ankit Shukla <br>";

    $str1 = "This Is A String <br>";
    var_dump ($str1);
    echo $str1;

    $a = 10.5;
    $b = 10;
    echo $a + $b;
    echo "<br>";
    var_dump($a);
    
    
    $fruit = array('Apple','Orange','Pappaya','Grapes');
    var_dump($fruit);
*/

    $str1 = "Hy My Self Ankit Shukla";
    echo $str1,"<br>";
    echo strlen($str1),"<br>";
    echo str_word_count($str1),"<br>";
    echo strrev($str1),"<br>";

    //REPLACE FUNCTION
    echo str_replace('Hy','Hello',$str1),"<br>";
    ?>
    
</body>
</html>