<?php

function connect()
{
    $host_name = 'localhost';
    $db_name = 'wazniak';
    $username = 'root';
    $password = '';

    return mysqli_connect($host_name, $username, $password, $db_name) ?? die();
}
