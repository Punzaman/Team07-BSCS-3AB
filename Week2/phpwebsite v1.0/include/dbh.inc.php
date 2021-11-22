<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phplogin";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error()); //if connection error print msg
}