<?php
    include_once 'header.php';
?>

    <form action="include/reserve.inc.php" method="post">
    <div class="timein">
        <h1>Select a date to park</h1>
        <label for="parkingtime">Parking Time:</label>
        <input type="date" id="timeparkin" name="timein"> 

    </div>

    <div class="timepark">
        <h1>Select a time to park</h1>
        <label for="parkingtime">Parking Time:</label>
        <select name="timepark" id="timepark">
            <option value="9AM">9:00 AM</option>
            <option value="10AM">10:00 AM</option>
            <option value="11AM">11:00 AM</option>
            <option value="12PM">12:00 PM</option>
            <option value="1PM">1:00 PM</option>
            <option value="2PM">2:00 PM</option>
            <option value="3PM">3:00 PM</option>
            <option value="4PM">4:00 PM</option>
            <option value="5PM">5:00 PM</option>
            <option value="6PM">6:00 PM</option>
            <option value="7PM">7:00 PM</option>
            <option value="8PM">8:00 PM</option>
            <option value="9PM">9:00 PM</option>
        </select>
    </div>

    <div class="submit">
        <h1>Submit Your Credentials</h1>
        <button type="submit" name="submitreserve">Submit</button>
    </div>

    

