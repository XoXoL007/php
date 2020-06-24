<?php

    //Задача 1
    echo '<br><br> Задача 1 <br>';
    function isEven($number)
    {
        if($number % 2 == 0)
        {
            return 'true <br>';
        }
        else
        {
            return 'false <br>';
        }
    } 
    echo isEven(5);
    echo isEven(2);


    //Задача 2
    echo '<br><br> Задача 2 <br>';
    function callDemon($a, $b)
    {
        $arr = [];
        for ($i=0; $i < count($a); $i++) 
        { 
            for ($j=0; $j < count($b); $j++) 
            { 
                if($a[$i] == $b[$j] && !in_array($a[$i], $arr))
                {
                    $arr[] = $a[$i];
                }
            }
        }
        return $arr;
    }
    $arr1 = [2, 6, 8, 56, 89, 87];
    $arr2 = [32, 6, 2, 56, 99, 87, 5, 9, 9];
    $result = callDemon($arr1, $arr2); 
    sort($result);  //сортировка по возрастанию значения
    print_r($result);


    //Задача 3
    echo '<br><br> Задача 3 <br>';
    function pollindrom($str)
    {
        $strlen = strlen($str);
        $word = '';
        for($i = $strlen - 1; $i >= 0; $i--)
        {
            $word .= $str[$i];
        }
        if($str == $word)
        {
            return '\'' . $str . '\'' . ' является палиндромом <br>';
        }
        else
        {
            return '\'' . $str . '\'' . ' не является палиндромом <br>';
        }
    }
    echo pollindrom('kazak');
    echo pollindrom('kaffzak');


    //Задача 4
    echo '<br><br> Задача 4 <br>';
    function gen_words ($str)
    {
        $arr_words = explode(" ", $str);

        echo 'Количество слов в строке: ' . count($arr_words) . '<br>';
        print_r($arr_words);
    }
    gen_words("The quick brown fox jumps over the lazy dog");


    //Задача 5
    echo '<br><br> Задача 5 <br>';
    function getSize($format)
    {
        if($format == 0)
        {
            return [841, 1189];
        }
        else{
            $size = getSize($format - 1);
            return [floor($size[1] / 2), $size[0]];
        }
    }
    print_r(getSize(10));


   //Задача 6
   echo '<br><br> Задача 6 <br>';
   function getArray($n)
   {
        $result = [];
        for($i = 0; $i < $n; $i++)
        {
            $month = rand(1, 12);
            if(strlen($month) != 2){
                $month = '0' . $month;
            }

            if($month == 2){
                $day = rand(1, 28);
            }
            else if($month == 4 || $month == 6 || $month == 9 || $month == 11)
            {
                $day = rand(1, 30);
            }
            else
            {
                $day = rand(1, 31);
            }

            if(strlen($day) != 2){
                $day = '0' . $day;
            }
            
            $year = rand(1960, 2020);
            $result[] = $day . '-' . $month . '-' . $year;
        }
        return $result;
   }
   $arr = getArray(10);

   function getFormateDate($array)
   {
        $pattern = '/([0-9]{2})\-([0-9]{2})\-([0-9]{4})/';
        $result = [];

        foreach($array as $value)
        {
           $match = [];
           preg_match_all($pattern, $value, $match);
           $result[] = $match[3][0] . '.' . $match[1][0] . '.' . $match[2][0];
        }
        return $result;
   }
   print_r(getFormateDate($arr));


   //Задача 7
   echo '<br><br> Задача 7 <br>';
   function getEmail($subject)
   {
    $pattern = '/[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]+/';
    $match = [];
    preg_match_all($pattern, $subject, $match);
    return $match[0];
   }
   $string = file_get_contents('email.txt');
   echo 'Все Email-адреса: <br>';
   print_r(getEmail($string));


   //Задача 8
   echo '<br><br> Задача 8 <br>';
   function getIP($subject)
   {
       $pattern = '/(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)/';
       $match = [];
       preg_match_all($pattern, $subject, $match);
       return $match[0];
   }
   $string = file_get_contents('ip_mac.txt');
   echo 'Все IP-адреса: <br>';
   print_r(getIP($string));
   
   
   //Задача 9
   echo '<br><br> Задача 9 <br>';
   function getMac($subject)
   {
       $pattern = '/([0-9a-z]{2}\:){5}[0-9a-z]{2}/';
       $match = [];
       preg_match_all($pattern, $subject, $match);
       return $match[0];
   }
   $string = file_get_contents('ip_mac.txt');
   echo 'Все MAC-адреса: <br>';
   print_r(getMac($string));


    //Задача 10
    echo '<br><br> Задача 10 <br>';
    function getNumb($matches)
    {
        return $matches[0]*2;
    }
    echo 'Числа стоящие в кавычках и увеличенные в два раза: <br>';
    echo preg_replace_callback('/(?<=[\'])[0-9]+(?=[\'])/', 'getNumb', '1aaa\'3\'bbb\'4\' fghj\'55\'');


    //Задача 11
    echo '<br><br> Задача 11 <br>';
    $array = [];
    $ch = "ABCD";
    $str = "";
    for($i = 0; $i < 10; $i++)
    {
        for($j = 0; $j < 10; $j++)
        {
            $str .= $ch[rand(0, strlen($ch)-1)];
        }
        $array[$i] = $str;
        unset($str);
    }
    function getCh($array)
    {
        $pattern = '/(?=(.))\1{2,}/';
        $match = [];
        for($i = 0; $i < count($array); $i++)
        {
            preg_match_all($pattern, $array[$i], $match[$i]);
        }
        return $match;
    }
    print_r(getCh($array));
    print_r($array);


    //Задача 12
    echo "<br><br> Задача 12 <br>";
    function getClients($subject)
    {
        $pattern = '/([а-яА-ЯЁё\s]+\;)([0-9]+\.[0-9]+\.[0-9]+\;)(\+[0-9]+\([0-9]+\)+[0-9\-]+\;)/u';
        $match = [];
        preg_match_all($pattern, $subject, $match);
        print_r($match);
        return $match[0];
    }
    $string = file_get_contents('client.txt');
    echo 'Клиенты: <br>';
    getClients($string);
