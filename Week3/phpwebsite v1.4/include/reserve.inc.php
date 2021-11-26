<?php
session_start();
    if (isset($_POST["submitreserve"])) {
    
        $vehicle = $_POST['vehicle'];
        $timein = $_POST['timein'];
        $timepark = $_POST['timepark'];
        $usersId = $_SESSION["userid"];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

    if(emptyInputReserve($vehicle, $timein, $timepark) !== false){
        header("location: ../reserve.php?error=emptyinput");
        exit();
        }
        
    createreservation($conn, $vehicle, $timein, $timepark, $usersId);

    

    }
