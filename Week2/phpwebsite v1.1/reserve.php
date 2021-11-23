<?php
    include_once 'header.php';
?>

    <form action="include/reserve.inc.php" method="post">
    <div class="vehicletype">
        <h1>Select a vehicle type</h1>
        <input type="radio" id="vehicle1" name="vehicle" value="vehicle1">
        <label for="vehicle1">Two Wheeler</label>

        <input type="radio" id="vehicle2" name="vehicle" value="vehicle2">
        <label for="vehicle2">Three Wheeler</label>

        <input type="radio" id="vehicle3" name="vehicle" value="vehicle3">
        <label for="vehicle3">Four Wheeler</label>

        <input type="radio" id="vehicle4" name="vehicle" value="vehicle4">
        <label for="vehicle4">Ten Wheeler</label>
    </div>

    <div class="timein">
        <h1>Select a time to park</h1>
        <label for="parkingtime">Parking Time:</label>
        <input type="datetime-local" id="timeparkin" name="timein"> 

    </div>

    <div class="timeout">
        <h1>Select a time to exit</h1>
        <label for="parkingtime">Parking Exit Time:</label>
        <input type="datetime-local" id="timeparkout" name="timeout"> 

    </div>

    <div class="submit">
        <h1>Submit Your Credentials</h1>
        <button type="submit" name="submitreserve">Submit</button>
    </div>

    

