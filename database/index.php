<?php
$servername = "localhost";
$username = "root";
$password = '#Sy$temGr0^p|114167';
date_default_timezone_set('Asia/Manila');
$datenow =  date('Y-m-d H:i:s');
$db = mysqli_connect($servername, $username, $password,'andon_web');
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>