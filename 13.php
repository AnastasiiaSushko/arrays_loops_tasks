<?php

//13. Вывести таблицу умножения

for ($i = 0; $i<=9; $i++)
{
    $table[$i] = array();
    for ($j = 1; $j<=9; $j++){

        $table[$i][$j] = $i * $j;
        echo $i. 'x'. $j. '=' . $i * $j. '<br/>';
    }
    echo '<br/>';
}