<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <nav>
        <div class="navbar">
            <ul>
                <?php
                    if (isset($_SESSION["useruid"])){
                    echo "<li><a href='profile.php'>Profile Page</a></li>";
                    echo "<li><a href='reserve.php'>Book a reservation</a></li>";
                    echo "<li><a href='history.php'>Parking History</a></li>";
                    echo "<li><a href='include/logout.inc.php'>Log Out</a></li>";
                    
                }
                    else {
                    echo "<li><a href='signup.php'>Sign up</a></li>";
                    echo "<li><a href='login.php'>Log in</a></li>";

                }
                ?>
                
            </ul>
        </div>
    </nav>

<div class="wrapper">