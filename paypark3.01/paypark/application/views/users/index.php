<?php
    $this->load->view('templates/header');
?>

<div class="container p-5">
    <div class="p-5">
      <h1><strong>WELCOME TO PAYPARK!</strong> </h1>
      <p class="lead ">Let's make your parking experience easier, safer and more convenient. Create your own account now and experience parking with cashless payment transaction.</p>

      <p><a target="_blank" id="regBtn" class="btn btn-light btn-lg mt-2">EXPLORE</a></p>
    </div>

    <div class="card m-3 card-md card-lg justify-content-center">
      <button type="button" class="btn btn-primary btn-lg"> <strong> <a class = "text-light" href="<?php echo base_url()."users/login"?>"> LOG IN </a> </strong> </button>

      <button type="button" class="btn btn-success btn-lg"> <a class = "text-light" href="<?php echo base_url()."users/signup"?>"> REGISTER</a> </button>

    </div>
  </div>

<?php
    $this->load->view('templates/footer');
?>