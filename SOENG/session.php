<?php

$conn = mysqli_connect("localhost","root","","soeng");

session_start();

$user_check = $_SESSION['login_email'];

$query = "SELECT email from register where email = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['email'];
?>