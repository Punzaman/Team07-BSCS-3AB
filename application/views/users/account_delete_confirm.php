<?php
		$this->load->view('templates/header');
	?>

	<?php
		$id = $_SESSION["user_id"];
	?>

	<div class="delete-confirm">
	<form method="post">
        <p class="Delete-confirm-text">To confirm, please enter your password</p>
        <input type="password" name="user_pwdrepeat">
        <?php echo '<input type="hidden" name="user_id" value='.$id.'>'; ?>
        <div class="buttons">
		<button class="btn btn-danger" type='submit'>Confirm</button>
		<button class="btn btn-light" type='button'><a href="<?php echo base_url()."users/profile"?>">Cancel</a></button>
        </div>
    </form>

	</div>

	<?php
		$this->load->view('templates/footer');
	?>