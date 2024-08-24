
<?php


 $strings = ["Hello", "World", "PHP", "Programming"];

 $string1 = $strings[0];
 $string2 = $strings[1];
 $string3 = $strings[2];
 $string4 = $strings[3];

class Test {

   function method($x){

    $vowel = ["a","e","i","o","u"];
    $count = 0;

    for($i=0; $i<strlen($x);$i++){
        if(in_array($x[$i],$vowel)){
            $count ++;
        }
    }
    $revers = strrev($x);

    return "Original String: $x, Vowel Count: $count, Reversed String: $revers";
}

}

$instant1 = new Test;
$instant2 = new Test;
$instant3 = new Test;
$instant4 = new Test;


echo $instant1->method($string1),"\n";
echo $instant1->method($string2),"\n";
echo $instant1->method($string3),"\n";
echo $instant1->method($string4),"\n";