<?php
//Работа с foreach

//1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик
$array = ['html', 'css', 'php', 'js', 'jq'];
foreach ($array as $elem)
{
    echo $elem.'<br/>';
}

//2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива.
// Запишите ее в переменную $result
$numbers = [1, 20, 15, 17, 24, 35];
$result = 0;
foreach ($numbers as $number )
{
    $result = $result + $number;
}
echo $result.'<br/>';

//3.Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов
// элементов этого массива. Результат запишите переменную $result.</p>
$arrayNumbers = [26, 17, 136, 12, 79, 15];
$result1 = 0;

foreach ($arrayNumbers as $val)
{
    $result1 = $result1 + $val*$val;
}
echo $result1.'<br/>';