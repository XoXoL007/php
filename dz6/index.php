<?php

function addToFile($filename, $data){
    if(is_array($data))
    {
        foreach ($data as $item)
        {
            addToFile($filename, $item);
        }
    }
    else
    {
        file_put_contents($filename, $data . PHP_EOL, FILE_APPEND);
    }
}
addToFile("data.txt", "striiing..4 hhdsh");
addToFile("data.txt", ["striiiing..5 hhdsh", "stri6g hhdsh", 58, ["fg52", "fgh6"]]);


function getFromFile($filename)
{
    $array = [];
    $data = file($filename);

    if($data)
    {
        foreach($data as $key => $value)
        {
            $value = trim($value, "\t\n\r\0");
            $array[] = $value;
        }
    }
    return $array;
}
print_r(getFromFile("data.txt"));