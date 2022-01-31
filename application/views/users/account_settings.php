<?php
    $this->load->view('templates/header');
?>

	<?php
    $id = $_SESSION['user_id'];
    echo $_SESSION['username']." > Account Settings"
	?>
    <div>
        <button type='button'><a href='<?php echo base_url()."users/account_update_form"?>'>Update Account</a></button>
        <button type='button'><a href='<?php echo base_url()."users/account_delete_confirm"?>'>Deactivate Account</a></button>
        <button type="button"><a href="<?php echo base_url()."users/news"?>">Return to Homepage</a></button>
    </div>

<?php
	$this->load->view('templates/footer');
?>