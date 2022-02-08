<?php
    $this->load->view('admin/header');
?>

    <div class="container">
    
<div class="center">
  <form action="<?php echo base_url().'admin/resupdatedetails/'?>" method="POST" class="" id="myForm" style="width:50%" enctype="multipart/form-data">
   <div class="row-4">
    <div class="mb-3">
    <a href='<?php echo base_url()."admin/dashboard"?>' type="button">Back to Profile</button> </a>
    
    <?php { ?>
      <input type="hidden" name="reid" value="<?php echo $row->reserveId; ?>">
      <h3 class="mb-3 p-2 text-center mb-3">Status</h3>     
        
        <div class="mb-3">
          <label for="" class="form-label">Reservation Status</label>
            <select class="form-select form-select-sm" value="<?php echo $row->reserveStatus;?>" name="reserveStatus">
              <option value="Closed">Close</option>
            </select>
        </div> 
    
        <br>
        <?php } ?>   
    <input type="submit" value="Confirm" name="insert" class="btn btn-primary"></button>
    </div> 
  </form>
  <?php echo !empty($statusMsg)?'<p class="status-msg">'.$statusMsg.'</p>':''; ?>
  </div>
</div>