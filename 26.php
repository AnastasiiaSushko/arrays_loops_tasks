<?php
// Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
//Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
//индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
//индекс

$arr = array();
for ($i =0; $i<=10; $i++)
{
    $arr[] = rand(1,100);
}
echo "<pre>";
print_r($arr);
echo "<pre>";


$composition =1;
foreach ($arr as $key=>$value){
    if(($key%2)==false &&$key!=0 && $value>0){

       // echo$key.'=>'. $value.'<br>';
        $composition *= $value;
    }else{
        echo $key.'=>'. $value.'<br>';
    }
}

echo $composition;