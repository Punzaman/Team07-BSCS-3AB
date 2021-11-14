<?php
include('session.php');

if(!isset($_SESSION['login_email'])){
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>
Parking Reservations
</title>
</head>
<body>
    Welcome: <?php echo $login_session; ?>
    <a href="logout.php"><input type = "button"  value="Logout"></a>
</body>
</html>