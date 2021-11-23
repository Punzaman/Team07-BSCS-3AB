<?php

    if (isset($_POST["submitreserve"])) {

        $vehicle = $_POST['vehicle'];
        $timein = $_POST['timein'];
        $timeout = $_POST['timeout'];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        
    createreservation($conn, $vehicle, $timein, $timeout);

    $query = "INSERT INTO phplogin (reserve_vehicle, reserve_enter, reserve_exit) VALUES ($vehicle, $timein, $timeout)";
   $query_run = mysqli_query($conn, $query);

    }
