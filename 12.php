<?php

//12. Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет
//меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для
//этого (итерации — это количество проходов цикла), и запишите его в переменную $num. =5

$n = 1000;
$i = 0;
while ($n > 50)
{
    $i++;
    $n /= 2;
}

echo $i.'<br>'; //кол-во итераций
echo $n; //число, которое получилось