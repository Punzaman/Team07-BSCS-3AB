<?php
session_start();
    if (isset($_POST["submitreserve"])) {
    
        $vehicle = $_POST['vehicle'];
        $timein = $_POST['timein'];
        $timeout = $_POST['timeout'];
        $usersId = $_SESSION["userid"];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

    if(emptyInputReserve($vehicle, $timein, $timeout) !== false){
        header("location: ../reserve.php?error=emptyinput");
        exit();
        }
        
    createreservation($conn, $vehicle, $timein, $timeout, $usersId);

    

    }
