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


    $str1 = "Hy My Self Ankit Shukla";
    echo $str1,"<br>";
    echo strlen($str1),"<br>";
    echo str_word_count($str1),"<br>";
    echo strrev($str1),"<br>";

    //REPLACE FUNCTION
    echo str_replace('Hy','Hello',$str1),"<br>";
    

    // OPERATOR
    
    echo "The Value Of a + b is :- ", 10+10, "<br>";
    echo "The Value Of a - b is :- ", 10-10, "<br>";
    echo "The Value Of a * b is :- ", 10*10, "<br>";
    echo "The Value Of a / b is :- ", 10/10, "<br>";
    

    // IF ELSE CONDITON

    $a = 10;
    if ($a <= "11") {
        echo $a ," is a good time";
    }
    else {
        echo $a ," is bad time";
    }
    

    // LOOP USE
    $var1 = 1;
    while ($var1 <= 11) {
        if ($var1 == 3) {
            $var1 ++;
            continue;
        }
        echo "True",$var1,"<br>";
        $var1 ++;
    }
    

    // FOR LOOP USE

    for ($i=0; $i < 6; $i++) { 
        echo "Current Value is :- ",$i,"<br>";
        
    }
    
    // FUNCTION

    function average_numbers($num1,$num2)
    {
        $average = ($num1 + $num2)/2;
        return $average;
    }
    echo average_numbers(5,5);
    
    
    function Sum($num1,$num2)
    {
        $sum = $num1+$num2;
        return $sum;
    }
    function Sub($num1,$num2)
    {
        $sub = $num1-$num2;
        return $sub;
    }
    echo "The Sum Value is :- ",Sum(5,5),"<br>";
    echo "The Sub Value is :- ",Sub(10,5),"<br>";
*/

// SORT ARRAY
  $arry = array(3,1,4,5,6,2,10);
  sort($arry);
  $leng = count($arry);

  for ($i=0; $i < $leng ; $i++) { 
      echo $arry[$i];
  }
    ?>
    
</body>
</html>