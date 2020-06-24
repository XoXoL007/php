<?php

//Задание 1
echo "\n Задание 1 \n";
$fibo_1 = 0;
$fibo_2 = 1;
$n = 10;

echo "{$fibo_2} <br>";
for ($i = $n; $i > 1; $i--)
{
    $fibo = $fibo_1 + $fibo_2;
    $fibo_1 = $fibo_2;
    $fibo_2 = $fibo;
    echo "{$fibo} <br>";
}


//Задание 2
echo "\n Задание 2 \n";
$arr = [1, 2, 3, 4, 5];
for($i = 0; $i < count($arr); $i++)
{
    if ($arr[$i] % 2 != 0)
    {
        $arr[$i] *= 3;
    }
    echo "{$arr[$i]} \n";
}


//Задание 3
echo "\n Задание 3 \n";
$n = 100;
echo "Простые числа до {$n}:\n";
for($i = 2; $i < $n; $i++)
{
    for($j = 2; $j < $i; $j++)
    {
        if ($i % $j == 0)
        {
            continue 2;
        }
    }
    echo "{$i} <br>";
}
