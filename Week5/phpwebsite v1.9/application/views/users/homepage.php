<?php
    $this->load->view('templates/header.php');
?>

    <div class="hello">
        <p>Tapos ka na mag log in</p>

        <button type="button"><a href="<?php echo base_url()."users/profile"?>">Profile</a></button>
        <button type="button"><a href="<?php echo base_url()."reservation/reserve"?>">Book a Reservation</a></button>
        <button type="button"><a href="<?php echo base_url()."users/parkinghistory"?>">Parking History</a></button>
        <button type="button"><a href="<?php echo base_url()."users/logout"?>">Logout</a></button>
    </div>


<?php
    $this->load->view('templates/footer.php');
?>