<?php
    $this->load->view('templates/header.php');
?>

    <div class="profile">
        <h3>This is a user profile</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita reprehenderit voluptatum cum atque harum doloremque nisi.</p>
    
    <?php
        echo "<p>Hello world " . $_SESSION["user_firstname"] ."</p>";
        echo "<p>Hello world " . $_SESSION["user_lastname"] . "</p>";
        echo "<p>Hello " . $_SESSION["user_email"] . "</p>";
    ?>

    <button type="button"><a href="<?php echo base_url()."users/homepage"?>">Return to Homepage</a></button>
    <button type="button"><a href="<?php echo base_url()."uservehicle/addvehicle"?>">Add Vehicle</a></button>
</div>


<?php
    $this->load->view('templates/footer.php');
?>