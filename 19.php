<?php

//19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
//текущий день выведите курсивом. Текущий день должен храниться в переменной $day.
$arr = array('Понеділок','Вівторок', 'Середа','Четвер','П\'ятниця','Субота','Неділя');
$day = 'Середа';
foreach ($arr as $val)
{
    if ($val == $day)
    {
        echo "<i>$val</i><br/>";

    }else
    {
        echo $val.'<br/>';
    }
}