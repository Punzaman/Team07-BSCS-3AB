<?php
    $this->load->view('templates/header.php');
?>

<form method="post">
    <div class="reserveData">
        <h1>Select a date to park</h1>
        <label for="parkingtime">Parking Date:</label>
        <input type="date" id="reserveDate" name="reserveDate"> 

    </div>

    <div class="reservePark">
        <h1>Select a time to park</h1>
        <label for="parkingtime">Parking Time:</label>
        <select name="reservePark" id="reservePark">
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
        <button type="submit">Submit</button>
    </div>
<br>
        <button type="button"><a href="<?php echo base_url()."users/homepage"?>">Cancel</a></button>
        
<?php
    $this->load->view('templates/footer.php');
?>