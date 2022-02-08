<?php
    $this->load->view('admin/header');
?>

    <div class="container">
    
<div class="center">
  <form action="<?php echo base_url().'admin/updatedetails/'?>" method="POST" class="" id="myForm" style="width:50%" enctype="multipart/form-data">
   <div class="row-4">
    <div class="mb-3">
    <a href='<?php echo base_url()."admin/dashboard"?>' type="button">Back to Profile</button> </a>
    
    <?php { ?>
      <input type="hidden" name="userid" value="<?php echo $row->user_id; ?>">
      <input type="hidden" name="username" value="<?php echo $row->username; ?>">
      <h3 class="mb-3 p-2 text-center mb-3">Edit <?php echo $row->user_id; ?></h3>     
        <div class="mb-3">
          <label for="" class="form-label">User ID</label>
          <input type="input" class="form-control" disabled value="<?php echo $row->user_id;?>" name="user_id" >
        </div> 
        <div class="mb-3">
          <label for="" class="form-label">Username</label>
          <input type="input" class="form-control" disabled value="<?php echo $row->username;?>" name="username" >
        </div> 
        <div class="mb-3">
          <label for="" class="form-label">User Status</label>
            <select class="form-select form-select-sm" value="<?php echo $row->user_status;?>" name="user_status" >
              <option selected value="<?=$row->user_status;?>" ><?php echo $row->user_status;?></option>
              <option value="Active">Active</option>
              <option value="Inactive">Inactive</option>
            </select>
        </div> 
        <div class="mb-3">
          <label for="" class="form-label">First Name</label>
          <input type="text" class="form-control" value="<?php echo $row->user_firstname;?>" name="user_firstname" >
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Last Name</label>
          <input type="text" class="form-control" value="<?php echo $row->user_lastname;?>" name="user_lastname"  >
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Phone Number</label>
          <input type="text" class="form-control" value="<?php echo $row->user_cpnumber;?>" name="user_cpnumber" >
        </div> 
         <div class="mb-3">
          <label for="" class="form-label">Email</label>
          <input type="text" class="form-control" value="<?php echo $row->user_email;?>" name="user_email" >
        </div> 
         
        
        <br>
        <?php } ?>   
    <input type="submit" value="update" name="insert"class="btn btn-primary"></button>
    </div> 
  </form>
  <?php echo !empty($statusMsg)?'<p class="status-msg">'.$statusMsg.'</p>':''; ?>
  </div>
</div>