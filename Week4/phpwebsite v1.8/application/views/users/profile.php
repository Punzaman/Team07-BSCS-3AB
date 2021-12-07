<!-- This is the landing page. This is where the user will be redirected when the website is opened -->

<?php
    $this->load->view('templates/header.php');
?>

<!-- Navigation buttons -->
<nav>
        <div class="navbar">
        
        <p>Select an Option</p>

        <button type="button"><a href="<?php echo base_url()."users/login"?>">Login</a></button>
        <button type="button"><a href="<?php echo base_url()."users/signup"?>">Signup</a></button>

        </div>
</nav>


<?php
    $this->load->view('templates/footer.php');
?>