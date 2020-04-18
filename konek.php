<?php
$host = "localhost";
$user_name = "root";
$password = "";
$database = "forukom";

$koneksi = mysql_connect($host, $user_name, $password);
$pilihdatabase = mysql_select_db($database, $koneksi);