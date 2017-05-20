<?php
//session_start();
header('Content-Type: text/html; charset=utf-8');
// --- Ubah UserName dengan UserName MySql anda dan UserPass nya juga ---
$link = new mysqli("localhost", "UserName", "UserPass", "dbfilelist");
mysqli_query($link,"SET NAMES 'utf8'");

if (!$link) {
      echo "Error: Unable to connect to MySQL." . PHP_EOL;
      echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
      echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
      exit;
}
?>
