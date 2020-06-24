<?php

	//Задача №1
	echo '<br> Задача №1 <br>';
	$a_1 = 5;
	$b_1 = 10;
	$count_1 = 0;
	echo 'Целые числа в промежутке от ' . $a_1 . ' до ' . $b_1 . ' в порядке возрастания: ' . '<br>';
	for($i = $a_1; $i <= $b_1; $i++){
		echo $i . '<br>';
		$count_1++;
	}
	echo 'Количество целых чисел в промежутке от ' . $a_1 . ' до ' . $b_1 . ' = '. $count_1 . '<br>';


	//Задача №2
	echo '<br> Задача №2 <br>';
	$a = 7;
	$b = 11;
	$sum_squares = 0;
	for($i = $a; $i <= $b; $i++){
		echo $i . '<br>';
		$sum_squares += $i * $i;
	}
	echo 'Сумма квадратов целых чисел от ' . $a . ' до ' . $b . ' = '. $sum_squares . '<br>';


	//Задача №3
	echo '<br> Задача №3 <br>';
	$a = 3;
	$b = 9;
	$count_2 = 0;
	for($i = $a; $i <= $b; $i++){
		$count_2++;
		for ($j = 0; $j < $count_2; $j++) { 
			echo $i;
		}
		echo'<br>';
	}


	//Задача №4
	echo '<br> Задача №4 <br>';
	$a = 2;
	$b = 13;
	for($i = $a; $i <= $b; $i++){
		for ($j = 0; $j < $i; $j++) { 
			echo $i;
		}
		echo'<br>';
	}


	//Задача №5
	echo '<br> Задача №5 <br>';
	$a = 2;
	$b = 13;
	echo 'Все четные числа от ' . $a . ' до ' . $b . ': ';
	for($i = $a; $i <= $b; $i++){
		if ($i % 2 == 0) { 
			echo $i . ' ';
		}
	}
	echo'<br>';


	//Задача №6
	echo '<br> Задача №6 <br>';
	$a = 5;
	$b = 11;
	$sum = 0;
	for($i = $a; $i <= $b; $i++){
		if ($i % 2 != 0) { 
			$sum += $i;;
		}
	}
	echo 'Сумма всех нечетных чисел от ' . $a . ' до ' . $b . ' = '. $sum . '<br>';


	//Задача №7
	echo '<br> Задача №7 <br>';
	$number = 127;
	$hundreds = intdiv($number, 100);
	$dozens = intdiv(($number % 100), 10);
	$units = $number % 10; 
	$sum_digits = $hundreds + $dozens + $units;
	$mult_digits = $hundreds * $dozens * $units;
	echo 'Исходное число: ' . $number . '<br>';
	echo 'Сумма цифр трехзначного числа ' . $number . ' = '. $sum_digits . '<br>';
	echo 'Произведение цифр трехзначного числа ' . $number . ' = '. $mult_digits . '<br>';
	echo 'Число полученное при прочтении исходного числа справа налево: ' . ($units * 100 + $dozens * 10 + $hundreds). '<br>';
	echo 'Число полученное при перестановке цифр сотен и десятков исходного числа: ' . ($dozens * 100 + $hundreds * 10 + $units). '<br>';


	//Задача №8
	echo '<br> Задача №8 <br>';
	$rand_number = rand(0, 10000);
	echo 'Случайное число: ' . $rand_number . '<br>';


	//Задача №9
	echo '<br> Задача №9 <br>';
	if($count_1 % 2 == 0){
		echo 'even <br>';
	}
	else{
		echo ' odd <br>';
	}


	//Задача №10
	echo '<br> Задача №10 <br>';
	$sum = 0;
	for($i = 1; $i <= $count_1; $i++){
		if($count_1 % $i == 0){
			$sum += $i;
		}
	}
	echo 'Сумма всех чисел, на которое делится число ' . $count_1 . ' = ' . $sum . '<br>';


	//Задача №11
	echo '<br> Задача №11 <br>';
	$sum = 0;
	for($i = 1; $i <= $count_1; $i++){
		if($i % 2 == 0 && $count_1 % $i == 0){
			$sum += $i;
		}
	}
	echo 'Сумма всех четных чисел, на которое делится число ' . $count_1 . ' = ' . $sum . '<br>';


	//Задача №12
	echo '<br> Задача №12 <br>';
	$sum = 0;
	for($i = 1; $i <= $count_1; $i++){
		if($i % 2 != 0 && $count_1 % $i == 0){
			$sum += $i;
		}
	}
	echo 'Сумма всех нечетных чисел, на которое делится число ' . $count_1 . ' = ' . $sum . '<br>';


	// //Задача №13
	echo '<br> Задача №13 <br>';
	$count_digits = 0;
	$number = $count_1;
	while($number)
	{
		$number = intdiv($number, 10);
		$count_digits++;
	}
	echo 'Количество цифр в числе ' . $count_1 . ' = ' . $count_digits . '<br>';


	//Задача №14
	echo '<br> Задача №14 <br>';
	$rand_number_a = rand(1, 100);
	$rand_number_b = rand(1, 100);
	$nok = 0;
	for($i = 1; $i <= $rand_number_a*$rand_number_b; $i++)
	{
		if(($i % $rand_number_a == 0) && ($i % $rand_number_b == 0))
		{
			$nok = $i;
			break;
		}	
	}
	echo 'Наименьшее общее кратное чисел ' . $rand_number_a . ' и ' . $rand_number_b . ' = ' . $nok . '<br>';
	

	//Задача 15
	echo '<br> Задача №15 <br>';
	echo '
		<table border="1">
			<tr>
				<td>0</td>
			<td>0</td>
		</tr>
			<tr>
			<td>0</td>
			<td>0</td>
			</tr>
		</table>';


	//Задача №16
	echo '<br> Задача №16 <br>';
	$n = $m = 11;
	echo '<table border=1>';
	for ($i=0; $i < $n; $i++) { 
		echo '<tr>';
		for ($j=0; $j < $m; $j++) { 
			if($i == $j || $i + $j == $m - 1){
				echo '<td> X </td>';
			}
			else{
				echo '<td> - </td>';
			}
		}
		echo '</tr>';
	}
	echo '</table>';


	//Задача 17
	echo '<br> Задача №17 <br>';
	$array = [];
	$size = 5;
	for($i = 0; $i < $size; $i++)
	{
		for($j = 0; $j < $size; $j++)
		{
			$array[$i][$j] = rand(0, 100);
		}
	}
	echo 'Получившийся двумерный массив: <br>';
	print_r($array);
	echo '<br>';


	//Задача 18
	echo '<br> Задача №18 <br>';
	$summ = 0;
	for ($i=0; $i < $size; $i++) { 
		for ($j=0; $j < $size; $j++) { 
			$summ += $array[$i][$j];
		}
	}
	print_r($array);
	echo '<br> Сумма всех элментов массива = ' . $summ . '<br>';


	//Задача 19
	echo '<br> Задача №19 <br>';
	$array = [];
	$size = rand(5,20);
	for($i = 0; $i < $size; $i++)
	{
		$number = rand(0, 200);
		if($number % 5==0)
		{
			$array[] = $number;
		}
	}
	print_r($array);
	echo '<br>';


	//Задача 20
	echo '<br> Задача 20 <br>';
	$array = [];
	$summ = 0;
	$size = rand(5,15);
	for($i = 0; $i <= $size; $i++)
	{
		$array[$i] = rand(-100, 100);
		if($array[$i] < 0)
		{
			$summ -= $array[$i];
		}
	}
	print_r($array);
	echo '<br> Сумма отрицательных элементов массива: ' . $summ . '<br>';


	//Задача 21
	echo '<br> Задача 21 <br>';
	$count_positive = 0;
	$count_negative = 0;
	for($i = 0; $i <= $size; $i++)
	{
		if($array[$i] < 0)
		{
			$count_negative++;
		}
		else if($array > 0)
		{
			$count_positive++;
		}
	}
	if($count_positive > $count_negative)
	{
		echo '<br> Положительных элементов в массиве больше <br>';
	}
	else if($count_positive < $count_negative)
	{
		echo '<br> Отрицательных элементов в массиве больше <br>';
	}
	else
	{
		echo '<br> Количество положительных элементов равно количеству отрицательных элементов массива <br>';
	}


	//Задача 22
	echo '<br> Задача 22 <br>';
	echo 'Массив в обратном порядке: <br>';
	for($i = $size; $i >= 0; $i--)
	{
		echo $array[$i] . '<br>';
	}


	//Задача №23
	echo '<br> Задача №23 <br>';
	$n = 4;
	$arr = [];
	echo '<table>';
	for ($i = 0; $i < $n; $i++) { 
		echo '<tr>';
		for ($j = 0; $j < $n; $j++) { 
			if($i % 2 == 0){
				$arr[$i][$j] = ($n * $i) + $j + 1;
			}
			else{
				$arr[$i][$j] = ($n * $i) - $j + $n;
			}
			echo '<td>' . $arr[$i][$j] . '</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
