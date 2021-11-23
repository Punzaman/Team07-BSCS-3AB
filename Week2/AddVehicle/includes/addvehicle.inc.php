<?php
if (isset($_POST["submit"])) {
    echo "It works";
    $plateno = $_POST["vehiclePlateno"];
    $vehicle_selection = $_POST["vehicleType"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputAddVehicle($plateno, $vehicle_selection) !== false) {
        header("location: ../addvehicle.php?error=emptyinput");
        exit(); 

    }
    createUser($conn, $plateno, $vehicle_selection);
}

else {
    header("location: ../addvehicle.php");
    exit();
}