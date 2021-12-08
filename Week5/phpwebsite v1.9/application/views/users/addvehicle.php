<?php
    $this->load->view('templates/header.php');
?>

<form method="post">
    <div class="vehicletype">
        <h1>Select a vehicle type</h1>
        <input type="radio" id="Two Wheeler" name="vehicle" value="Two Wheeler">
        <label for="Two Wheeler">Two Wheeler</label>

        <input type="radio" id="Three Wheeler" name="vehicle" value="Three Wheeler">
        <label for="Three Wheeler">Three Wheeler</label>

        <input type="radio" id="Four Wheeler" name="vehicle" value="Four Wheeler">
        <label for="Four Wheeler">Four Wheeler</label>

        <input type="radio" id="Ten Wheeler" name="vehicle" value="Ten Wheeler">
        <label for="Ten Wheeler">Ten Wheeler</label>
    </div>

    <div class="platenumber">
        <h1>Enter your plate number</h1>
        <label for="platenumber">PLATE NUMBER: </label>
        <input type="text" id="platenumber" name="platenumber">
        
    </div>

<div class="submit">
    <h1>Submit Your Credentials</h1>
    <button type="submit" name="submitaddvehicle">Submit</button>
</div>

<?php
    $this->load->view('templates/footer.php');
?>