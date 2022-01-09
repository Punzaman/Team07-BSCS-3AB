<?php
	$this->load->view('templates/header');
?>

<div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container">
     <div class="heading">
        <br>
        <br>
    <center>
     
      <h2> CHOOSE YOUR LOCATION </h2>
        <br>     
    </center>
    </div>
    <br>  <center>
    <div class="row align-items-start">
        <div class="col">
        <br> <img src="<?php echo base_url()?>css/reservation-location/images/1.png" style="height:30rem">
        <div class="d-grid gap-2 col-6 mx-auto">
            <br>
            <button type="button" class="btn btn-success"> <a href='<?php echo base_url()."reservation/reserve/CAVITE"?>'> Select CAVITE </button> </a>
        </div>
        </div>

        <div class="col">
        <br> <img src="<?php echo base_url()?>css/reservation-location/images/2.png" style="height:30rem"> 
        <div class="d-grid gap-2 col-6 mx-auto">
            <br>
            <button type="button" class="btn btn-success"> <a href='<?php echo base_url()."reservation/reserve/MANILA"?>'> Select MANILA</button> </a>
            <br>
            <br>



<?php
	$this->load->view('templates/footer');
?>