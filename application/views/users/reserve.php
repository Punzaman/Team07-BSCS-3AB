<?php
    $this->load->view('templates/header.php');
?>
    <section class="vh-100 bg-image">
        <div class="mask d-flex align-items-center h-50 gradient-custom-3">
    
  <div class="container py-3 h-50">
    <div class="row justify-content-center align-items-center h-50">
      <div class="col-8 col-lg-7 col-xl-6">
        <div class="card shadow-2-strong card-registration" style="border-radius: 20px;">
            <div class="card-body p-5 p-md-6"> 
              
                <center> <h3 class="mb-8 pb-2 pb-md-0 mb-md-9">Reservation Form</h3>
                  <p class="lead">Let's set up your reservation details!</p> </center>
                  <form method="post">
              <div class="row">
                <div class="col-md-9 mb-7">
                    <br>
                    <h4>Select a time to park</h4>
                        <div class="col-md-8">
                          <center> 
                              <label for="appt">Parking Time:</label>
                              <input type="time" name="reservePark" id="reservePark">

                      </center>
                        </div>
                        </div>
                        </div>

              <div class="row">
                <div class="col-md-9 mb-8">
                    <br>
                    <h4>Select a date to park</h4>
                        <div class="col-md-10">

                              <label for="appt">Parking Date:</label>
                              <input type="date" id="reserveDate" name="reserveDate">

                        </div>
                        </div>
                        </div>

                        <div class="row">
                          <div class="col-md-9 mb-8">
                            <br>

                              <h4>Select a vehicle </h4>
                              <div class="col-md-8">
                                <label for="cars">Choose a car:</label>
                                <select name="reserveVehicle">
                                <?php foreach($car as $kotse) : ?>
                                <option value="<?=$kotse['vehicle_id']?>"><?php echo $kotse['vehicle_model'] ?></option>
                                <?php endforeach; ?>
                                </select>
                         </div>
                         </div>

                         

                <div class="d-grid gap-2 col-10 mx-auto">
                    <br>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        
                      <button type="submit" class="btn btn-success">Submit</button>                 
                      <button type="button"><a href="<?php echo base_url()."users/homepage"?>">Cancel</a></button>
</form>
                   </div>
                   </div>
     </div>
    </div>
  </section>
    

<?php
    $this->load->view('templates/footer.php');
?>