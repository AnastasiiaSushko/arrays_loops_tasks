<?php

//16.Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
//выведите на экран столбец элементов массива, как показано на картинке.
//1, 2, 3
//4, 5, 6
//7, 8, 9

$arr = [1,2,3,4,5,6,7,8,9];
foreach ($arr as $key=>$val)
{
    if($key==2||$key==5||$key==8)
    {
        echo $val.'<br/>';
    }else{
        echo $val.', ';
    }
}