<?php

function mysql_connect_default($database)
{
    $connection = mysqli_connect('localhost', 'root', 'adminMySQL', $database);
    if(mysqli_connect_errno())
    {
        die(mysqli_error($connection));
    }

    return $connection;
}

function mysql_query_default($connection, $query)
{
    $result = mysqli_query($connection, $query);
    if(mysqli_errno($connection))
    {
        die(mysqli_error($connection));
    }

    return $result;
}

function db_table_parse($str, &$database, &$table){
    $parts = explode('.', $str);

    $database = $parts[0] ?? null;
    $table = $parts[1] ?? null;
}

function where_builder(array $where = null) {
    if (!$where)
        return null;

    $str = " WHERE ";
    foreach ($where as $col => $value) {
        $str .= "{$col}='{$value}' AND ";
    }

    return rtrim($str, 'AND ');
}

function mysql_select($table, $cols = "*", array $where = null){
    db_table_parse($table, $database, $table);
    $connection = mysql_connect_default($database);

    if(is_array($cols))
    {
        $cols = implode(',', $cols);
    }

    $query = "SELECT {$cols} FROM {$table}" . where_builder($where);
    $result = mysql_query_default($connection, $query);

    mysqli_close($connection);

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function mysql_get($table, $cols = "*", array $where = null)
{
    $data = mysql_select($table, $cols, $where);

    return $data[0] ?? [];
}

function mysql_insert($table, array $data) {

    db_table_parse($table, $database, $table);
    $connection = mysql_connect_default($database);

    $cols = implode(',', array_keys($data) );
    $values = implode("','", $data);

    if ($values)
        $values = "'$values'";

    $query = "INSERT INTO {$table} ({$cols}) VALUES ({$values})";
    $result = mysql_query_default($connection, $query);

    mysqli_close($connection);

    return $result;
}

function mysql_delete($table, array $where) {

    db_table_parse($table, $database, $table);
    $connection = mysql_connect_default($database);

    $query = "DELETE FROM {$table}" . where_builder($where);
    $result = mysql_query_default($connection, $query);

    mysqli_close($connection);

    return $result;
}

function mysql_update($table, array $data, $where = null) {

    db_table_parse($table, $database, $table);
    $connection = mysql_connect_default($database);

    $str = " SET ";
    foreach ($data as $col => $value) {
        $str .= "{$col}='{$value}', ";
    }
    $str = rtrim($str, ', ');

    $query = "UPDATE {$table}" . $str . where_builder($where);
    $result = mysql_query_default($connection, $query);

    mysqli_close($connection);

    return $result;
}