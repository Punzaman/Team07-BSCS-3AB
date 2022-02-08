<?php
    $this->load->view('templates/header.php');
?>

<div class="content">
  <div class="heading">
    <h1 class="title text-center text-light p-4">NEWS</h1>
    <p class="text-light text-center"><strong><em>Latest Updates</em></strong></p>
  </div>

<div class="row justify-content-center">

  <div class="card m-5 p-2" style="width: 25rem;">
    <div class="card-body">
      <h5 class="card-title">Cashless Payment</h5>
      <p class="card-text">To stop the spread of Covid-19, Paypark replaced the traditional face-to-face 
        customer payment. Customers will no longer want to handle cash and worry about the spread of viruses.
        Cashless parking can be done in as little as 7 seconds and it enables customers to pay from the comfort of their
        vehicle, safely and securely.
      </p>
      <p class="card-text"><small class="text-muted">Last updated 3 minutes ago</small></p>
    </div>
    <img class="card-img-bottom" src="<?php echo base_url()?>css/images/cashless.png" alt="Card image cap" style="height: 18rem;">
  </div>

  <div class="card m-5 p-2" style="width: 25rem;">
    <div class="card-body">
      <h5 class="card-title">Paypark Booking in Just a Minute</h5>
      <p class="card-text">Paypark booking and reservations are now made easier for the convenience of the customer. With Paypark new and improved website, customers can easily reserve a parking slot any time of the day. With the help of website booking, unnecessary contact with people will be avoided.
      </p>
      <p class="card-text"><small class="text-muted">Last updated 5 days ago</small></p>
    </div>
    <img class="card-img-bottom" src="<?php echo base_url()?>css/images/parknews.jpg" alt="Card image cap" style="height: 18rem;">
  </div>

  <div class="card m-5 p-2" style="width: 25rem;">
    <div class="card-body">
      <h5 class="card-title">100% Fully Vaccinated</h5>
      <p class="card-text">To fight against Covid-19, Paypark is now operating with completely vaccinated crews. It is also mandatory for our customer to show their vaccine card before entering the parking slot
        for everyone's safety and protection. </p>
      <p class="card-text"><small class="text-muted">Last updated 4 months ago</small></p>
    </div>
    <img class="card-img-bottom" src="<?php echo base_url()?>css/images/vax.png" alt="Card image cap" style="height: 18rem;">
  </div>

  

</div>
</div>
</header>

<?php
    $this->load->view('templates/footer.php');
?>