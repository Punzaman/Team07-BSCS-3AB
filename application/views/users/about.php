<?php
	$this->load->view('templates/header');
?>

<link rel="stylesheet" href = "<?php echo base_url()?>css/About/styles.css">

<div class="container">
    <div class="p-5 mt-5">
      <h1> <strong>About Us</strong> </h1>
      <p class="lead "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente maxime provident cum, doloremque voluptate unde! </p>

      <p><a href="#" target="_blank" class="btn btn-light btn-lg">Explore</a></p>
    </div>

    <div class="card m-2 card-md card-lg justify-content-center">

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-item-active">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?php echo base_url()?>css/About/images/park.jpg" style="height: 23rem" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo base_url()?>css/About/images/car.jfif" style="height: 23rem" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo base_url()?>css/About/images/parking2.jpg" style="height: 23rem" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo base_url()?>css/About/images/ssss.png" style="height: 23rem" alt="Fourth slide">
      </div>
    </div>
    <button class="carousel-control-prev" href="#carouselExampleIndicators" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" href="#carouselExampleIndicators" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </div>

<?php
	$this->load->view('templates/footer');
?>