<?php
//В6ам нужно разработать программу, которая считала бы количество вхождений
//какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
//442158755745 встречается 4 раза

$firstNumber = 442158755745;
$secondNumber = 5;

function CountNumber($number,$b){
    $count = 0;
    $newString = (string)$number;
    $len = strlen($newString) - 1;
    for ($i = 0; $i<=$len; $i++) {
        if($newString[$i]==$b){
           $count++;
        }
    }
 return $count;
}
echo CountNumber($firstNumber,$secondNumber);



