<!-- This is the landing page. This is where the user will be redirected when the website is opened -->

<?php
    $this->load->view('templates/header.php');
?>

<!-- Navigation buttons -->
<nav>
        <div class="navbar">  
        
        <p>Select an Option</p>                                                                     <!--Caption-->

        <button type="button"><a href="<?php echo base_url()."users/login"?>">Login</a></button>    <!--Button to redirect to log in-->
        <button type="button"><a href="<?php echo base_url()."users/signup"?>">Signup</a></button>  <!--BUtton to redirect to signup-->

        </div>
</nav>


<?php
    $this->load->view('templates/footer.php');
?>