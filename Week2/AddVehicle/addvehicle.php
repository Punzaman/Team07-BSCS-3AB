<section class="addvehicle-form">
    <h2>ADD VEHICLE</h2>
<form action="includes/addvehicle.inc.php" method="post">
  <div class="elem-group inlined">
    <label for="plateno">Vehicle Plate Number</label>
    <input type="text" name="plateno" placeholder="Plate number"><br>    
    <br>
    <label for="vehicle-selection">Vehicle Type</label>
    <select id="vehicle-selection" name="vehicle_selection" required>
        <option value="">Type of your vehicle</option>
        <option value="2wheel">2 wheeler</option>
        <option value="3wheel">3 wheeler</option>
        <option value="4wheel">4 wheeler</option>
        <option value="6wheel">6 wheeler</option>
        
    </select>
  </div>
  <button type="submit" name="submit">Add Vehicle</button>
</form>

<?php
    if (isset ($_GET["error"])) {
        if ($_GET["error"]=="emptyinput") {
            echo "<p>Fill in all the fields</p>";
        }
        else if ($_GET["error"]=="stmtfailed") {
            echo "<p>Something went wrong. Try again.</p>";
        }
        else if ($_GET["error"]=="none") {
            echo "<p>Vehicle Added!</p>";
        }
    }
?>
</section>