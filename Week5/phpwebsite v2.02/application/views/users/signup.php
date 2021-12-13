<?php
    $this->load->view('templates/header.php');
?>

    <div class="intro">
        <h2>Sign up</h2>
        <form method="post">
            <input type="text" name="user_firstname" placeholder="First Name.."> 
            <input type="text" name="user_lastname" placeholder="Last Name.."> 
            <input type="email" name="user_email" placeholder="Email..">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="user_pwd" placeholder="Password">
            <input type="password" name="user_pwdrepeat" placeholder="Repeat Password">
            <button type="submit">Sign Up</button>
        </form>
    </div>

<?php


$this->load->view('templates/footer.php');
?>