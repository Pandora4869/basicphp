<?php

$host   = "localhost";
$user   = "root";
$pass   = "473278";
$dbname = "phpbasicdb";

//เชื่อมต่อฐานข้อมูล

$connectdb = mysqli_connect($host, $user, $pass, $dbname);

//เข้ารหัส UTF8

mysqli_set_charset($connectdb, 'utf8');

//ตรวจสถานะการเชื่อมต่อ

if ($connectdb)
{

    // echo "Connect database success";
}
else
{
    echo "Connect database fail";
}
