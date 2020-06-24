<?php

include "db_helpers.php";

$data_list = mysql_select('lessons.books');
$data = mysql_get('lessons.books', 'title', ['id' => 3]);

$insert = mysql_insert('lessons.books', ['title' => 'qqq', 'author' => 'vvcccvv']);
var_dump($insert);
echo "<br /><br />";

$update = mysql_update('lessons.books', ['title' => 'qqq22', 'author' => 'bbb'], ['id' => 9, 'title' => 'qqq111']);
var_dump($update);
echo "<br /><br />";

$delete= mysql_delete('lessons.books', ['title' => 'qqq']);
var_dump($delete);
echo "<br /><br />";

var_dump($data_list);
echo "<br /><brb/>";
//var_dump($data);