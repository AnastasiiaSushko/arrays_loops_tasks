<?php
//23.Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
//пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
//2, 3, т. е. 6.

function calculateNumbers($a)
{

    $sum=0;
    $numbers = str_split($a);
    foreach ($numbers as $val)
    {
        $sum =$sum +$val;
    }
    echo $sum;
}

calculateNumbers(446);
