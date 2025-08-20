<?php
//เก็บข้อมูล User And Pass เพื่อเชื่อมต่อฐานข้อมูล
$server = "localhost";
$user = "root";
$pass = "123456";
$db = "onmyoji";
$condb = mysqli_connect($server, $user, $pass, $db);
mysqli_set_charset($condb, "UTF8");
