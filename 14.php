<?php

//14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
//проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
//выведите на экран 'Есть!', иначе выведите 'Нет!'.</p>

$arr = [4, 2, 5, 19, 13, 0, 10];
$e = 2;

foreach ($arr as $num)
{
    if($num == 2 || $num ==3 ||$num ==4)
    {
        echo "Есть!";
        break;
    }else
    {
        echo "Нет!";
    }

}