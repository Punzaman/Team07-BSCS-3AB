<?php
include('login.php');

if(isset($_SESSION['login_email'])){
header("location: profile.php");
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Please Login</title>
</head>
<body>
    <form action = "" method = "POST">
    <label>Email:</label>
    <input id = "email" name="email" placeholder = "E-Mail" type="email">
    <label>Password:</label>
    <input id = "pass" name="pass" placeholder = "Password" type="password"><br><br>
    <input name = "submit" type = "submit" value = "Login">
    <span><?php echo $error; ?> </span>
    </form>
</body>
</html>