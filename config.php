<?php
$databaseHost = 'localhost';
$databaseName = 'skil-test';
$databaseUser = 'root';
$databasePass = '';


$conn = mysqli_connect($databaseHost, $databaseUser, $databasePass, $databaseName);
if (!$conn) {
   die("Connection error");
}
