<?php
    $this->load->view('templates/header');
	?>

	<p>Update Account</p>

	<div class="signup-form">
    <form method="post">
        <input type="hidden" name="user_id" placeholder="First Name..." value="<?php echo $user['user_id'] ?>"><br>
        <div class="label-update-form"><p>First Name:</p></div>
        <input type="text" name="user_firstname" placeholder="First Name..." value="<?php echo $user['user_firstname'] ?>"><br>
        <div class="label-update-form"><p>Last Name:</p></div>
        <input type="text" name="user_lastname" placeholder="Last Name..." value="<?php echo $user['user_lastname'] ?>"><br>
        <div class="label-update-form"><p>Email:</p></div>
        <input type="email" name="user_email" placeholder="Email..." value="<?php echo $user['user_email'] ?>"><br>
        <div class="label-update-form"><p>Username:</p></div>
        <input type="text" name="username" placeholder="Username..." value="<?php echo $user['username'] ?>"><br>
        <div class="label-update-form"><p>Password:</p></div>
        <input type="password" name="user_pwd" placeholder="Password..."><br>
        <div class="label-update-form"><p>Confirm Password:</p></div>
        <input type="password" name="user_pwdrepeat" placeholder="Confirm Password..."><br>
        <!-- <?php echo '<input type="hidden" name="user_id" value='.$id.'>'; ?> -->
        <div class="buttons">
            <button type="submit">Update</button>
            <button type="button"><a href="<?php echo base_url()."users/account_settings"?>">Back</a></button>
        </div>
    </form>
	</div>

	<?php
		$this->load->view('templates/footer');
	?>
