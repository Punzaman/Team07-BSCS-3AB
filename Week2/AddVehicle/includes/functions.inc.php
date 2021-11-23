<?php
function emptyInputAddVehicle($plateno, $vehicle_selection){
        if (empty($plateno) || empty($vehicle_selection)) {
            $result=true;
        }
        else {
            $result=false;
        }
    return $result;
}

function createUser ($conn, $plateno, $vehicle_selection){
    $sql = "INSERT INTO vehicle (vehiclePlateno, vehicleType) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../addvehicle.php?error=stmtfailed");
        exit(); 
    }
    mysqli_stmt_bind_param($stmt, "ss", $plateno, $vehicle_selection);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../addvehicle.php?error=none");
    exit();
}
