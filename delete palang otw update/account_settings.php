<?php
    $this->load->view('templates/header');
?>

<?php
    $id = $_SESSION['user_id'];
    echo $_SESSION['username']." > Account Settings"
?>
    <div>
        <button type='button'><a href='<?php echo base_url()."index.php/users/account_update_form"?>'>Update</a></button>
        <button type='button'><a href='<?php echo base_url()."index.php/users/account_delete_confirm"?>'>Delete</a></button>
        <button type='button'><a href='<?php echo base_url()."index.php/users/homepage"?>'>Back to Homepage</a></button>
    </div>

<?php
    $this->load->view('templates/footer');
?>