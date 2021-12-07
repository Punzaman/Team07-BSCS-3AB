<?php
session_start();
    if (isset($_POST["submitaddvehicle"])) {
    
        $vehicle = $_POST['vehicle'];
        $platenumber = $_POST['platenumber'];
        $usersId = $_SESSION["userid"];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

    if(emptyaddvehicle($vehicle, $platenumber) !== false){
        header("location: ../addVehicle.php?error=emptyinput");
        exit();
        }
        
    addvehicle($conn, $vehicle, $platenumber, $usersId);

    

    }
