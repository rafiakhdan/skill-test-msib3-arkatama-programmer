<?php

session_start();

$input = $_POST['input'];
$number = preg_replace("/[^0-9]/", "", $input);

$text = preg_split("/[0-9]+ /", $input);


require_once("../config.php");


$result = mysqli_query($conn, "INSERT INTO data(NAME,AGE,CITY) VALUES('$text[0]','$number','$text[1]')") or die(mysqli_error($conn));

header("location: ../index.php");
