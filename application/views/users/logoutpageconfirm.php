<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/jpg" href="<?php echo base_url() ?>css/images/PayPark Logo.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto+Condensed:wght@400;700&family=Roboto:wght@900&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="<?php echo base_url() ?>css/goodbye.css">
  <title>PayPark</title>
</head>

<body>
  <div class="container-fluid">
    <div class="content m-4">
      <a href="confirmAcct.html" class="navbar-brand"><img id="flogo" src="<?php echo base_url() ?>css/images/PayPark.png" alt="PayPark LOGO">
        <h2> PAYPARK</h2>
      </a>
      <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Laborum, facilis unde tenetur nulla nam assumenda temporibus voluptatibus.
      </p>
    </div>

    <div class="fpCard mx-auto">
      <div class="fpContent">
        <h3>Thank You!</h3>
        <p class="instruction px-4 pt-1">We are very greatful to have you in our application. Hope you have a nice and great experience in using the PayPark. </p>
      </div>


      <a href="<?php echo base_url() . "users/logout" ?>"><button type="button" id="confirmCode" class="btn btn-primary btn-sm my-3 ms-auto"> <strong> Confirm </strong> </button></a>
    </div>

    <div class="navbar-nav mt-5">
      <a href="#" class="nav-item nav-link px-2">HOME</a>
      <a href="About/index.html" class="nav-item nav-link px-2">ABOUT</a>
      <a href="#" class="nav-item nav-link px-2">LOREM</a>
      <a href="#" class="nav-item nav-link px-2">LOREM</a>
      <a href="#" class="nav-item nav-link px-2">LOREM</a>
    </div>


  </div>


  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>