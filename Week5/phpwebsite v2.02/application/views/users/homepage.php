<?php
    $this->load->view('templates/header.php');
?>

    <div class="hello">
        <p>LOGIN SUCCESS</p>

        <button type="button"><a href="<?php echo base_url()."users/profile"?>">Profile</a></button>                        <!--Button to check to Profile-->
        <button type="button"><a href="<?php echo base_url()."reservation/reserve"?>">Book a Reservation</a></button>       <!--Button to redirect to Book a reservation-->
        <button type="button"><a href="<?php echo base_url()."users/parkinghistory"?>">Parking History</a></button>         <!--Button to redirect to Parking History-->
        <button type="button"><a href="<?php echo base_url()."users/logout"?>">Logout</a></button>                          <!--Button to Logout-->    
        <button type="button"><a href="<?php echo base_url()."users/account_settings"?>">Settings</a></button>
</div>


<?php
    $this->load->view('templates/footer.php');
?>