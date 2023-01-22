<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = mysqli_connect($hostname, $username, $password, $database) or die("Database connection failed");

$base_url = "http://localhost/animated-epic-php-user-management-system-main/";
$my_email = "jaredletojoker1799@gmail.com";

$smtp['host'] = "smtp.gmail.com";
$smtp['user'] = "jaredletojoker1799@gmail.com";
$smtp['pass'] = "yzoobktoiexbykvu";
$smtp['port'] = 465;
