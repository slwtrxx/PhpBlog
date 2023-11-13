<?php

$connection = mysqli_connect (
    $config['db']['server'],
    $config['db']['username'],
    $config['db']['password'],
    $config['db']['name']
);
$connection->query("SET NAMES UTF8");
$connection->set_charset("utf8");

if ($connection == false )
{
    echo 'не удается подключиться!';
    echo mysqli_connect_error();
    exit();
}