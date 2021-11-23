<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
<section class="signup-form">
    <h2>RESERVATION</h2>
<form action="includes/reserve.inc.php" method="post">
  <div class="elem-group inlined">
    <label for="checkin-date">Check-in Date</label>
    <input type="date" id="checkin-date" name="checkin" required>
    <label for="checkin-date">Check-in Time</label>
    <input type="time" id="checkin-time" name="checkintime" required>
  </div>
  <div class="elem-group inlined">
    <label for="checkout-date">Check-out Date</label>
    <input type="date" id="checkout-date" name="checkout" required>
    <label for="checkout-date">Check-out Time</label>
    <input type="time" id="checkout-time" name="checkouttime" required>
  </div>
  <div class="elem-group">
    <label for="slot-selection">Select Slot Preference</label>
    <select id="slot-selection" name="slot_preference" required>
        <option value="">Choose a slot</option>
        <option value="slot1">SLOT 1</option>
        <option value="slot2">SLOT 2</option>
        <option value="slot3">SLOT 3</option>
        <option value="slot4">SLOT 4</option>
        <option value="slot5">SLOT 5</option>
        <option value="slot6">SLOT 6</option>
        <option value="slot7">SLOT 7</option>
        <option value="slot8">SLOT 8</option>
        <option value="slot9">SLOT 9</option>
        <option value="slot10">SLOT 10</option>
        <option value="slot11">SLOT 11</option>
        <option value="slot12">SLOT 12</option>
        <option value="slot13">SLOT 13</option>
        <option value="slot14">SLOT 14</option>
        <option value="slot15">SLOT 15</option>
        <option value="slot16">SLOT 16</option>
        <option value="slot17">SLOT 17</option>
        <option value="slot18">SLOT 18</option>
        <option value="slot19">SLOT 19</option>
        <option value="slot20">SLOT 20</option>
    </select>
  </div>
  <button type="submit"  name="submit">Reserve</button>
</form>
<script src="datetime.js"></script>

</section>