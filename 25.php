<?php
//25. Ваше задание создать массив, наполнить его случайными значениями (функция rand),
//найти максимальное и минимальное значение и поменять их местами
$arr=array();
for ($i =0; $i<=5; $i++)
{
    $arr[] = rand(0,5);
}
echo "<pre>";
print_r($arr);
echo "<pre>";

$min = min($arr);
$max = max ($arr);
$keyMin = array_search($min, $arr);
$keyMax = array_search($max, $arr);

$arr[$keyMin] = $max;
$arr[$keyMax] = $min;


echo "<pre>";
print_r($arr);
echo "<pre>";
