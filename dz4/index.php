<?php


//1. Заменить все знаки препирания в строке на точку.
$str = "Hello, world!";
$replace = [',',':',';','-','!','?'];
$res = str_replace($replace, '.', $str);
echo $res . PHP_EOL;


//2. Найти наименьшее число в массиве. Если элемент массива не число, то попытаться привести к числу.
$array = [2, 5, 1.2, 5, 2.3, 1, 8, '8', '0.3', '-5', 'j'];
for($i = 0; $i < count($array); $i++)
{
    if(!is_numeric($array[$i]))
    {
        $array[$i] = (int)$array[$i];
    }
}
$min = min($array);
echo "min: " . $min . PHP_EOL;


//3. Аналогично второй задаче. Найти наибольшее число.
$array = [2, 5, 1.2, 5, 2.3, 1, 8, '8', '10.3d', "5", 'j'];
for($i = 0; $i < count($array); $i++)
{
    if(!is_numeric($array[$i]))
    {
        $array[$i] = (int)$array[$i];
    }
}
$max = max($array);
echo "max: " . $max . PHP_EOL;


//4. Найти среднее значение всех элементов массива.
$array = [2, 5, 1.2, 5, 2.3, 1, 8, '8', '10.3', "5"];
$count = count($array);
$sum = array_sum($array);
$avg = $sum / $count;
echo "avg:" . $avg . PHP_EOL;