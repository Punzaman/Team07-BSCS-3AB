<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" type="images/png" href="<?php echo base_url() ?>css/images/PayPark Logo.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto+Condensed:wght@400;700&family=Roboto:wght@900&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>PayPark</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md px-4">
      <div class="container-fluid">

        <?php
        if (isset($_SESSION["user_firstname"])) {
        ?>
          <a href='<?php echo base_url() . "users/news" ?>' class="navbar-brand">
            <img id="logo" src="<?php echo base_url() ?>css/images/PayPark.png" alt="PayPark LOGO">
            <h2> PAYPARK</h2>
          </a>
        <?php
        } else {
        ?>
          <a href='<?php echo base_url() . "index.php" ?>' class="navbar-brand">
            <img id="logo" src="<?php echo base_url() ?>css/images/PayPark.png" alt="PayPark LOGO">
            <h2> PAYPARK</h2>
          </a>
        <?php
        }
        ?>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarLinks">
          <span class="navbar-toggler-icon"> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarLinks">
          <div class="navbar-nav ms-auto">

            <?php
            if (isset($_SESSION["user_firstname"])) { ?>
              <a href='<?php echo base_url() . "users/parking" ?>' class="nav-item nav-link mx-auto px-2">PARKING PAYMENT</a></class=>
            <?php
            }
            ?>
            <?php
            if (isset($_SESSION["user_firstname"])) { ?>
              <a href='<?php echo base_url() . "users/profile" ?>' class="nav-item nav-link mx-auto px-2">PROFILE</a>
            <?php
            }
            ?>

            <?php
            if (isset($_SESSION["user_firstname"])) { ?>
              <a href='<?php echo base_url() . "users/parkinghistory" ?>' class="nav-item nav-link mx-auto px-2">HISTORY</a></class=>
            <?php
            }
            ?>

            <?php
            if (isset($_SESSION["user_firstname"])) { ?>
              <a href='<?php echo base_url() . "reservation/location" ?>' class="nav-item nav-link mx-auto px-2">RESERVE</a></class=>
            <?php
            }
            ?>
            <?php
            if (isset($_SESSION["user_firstname"])) { ?>
              <a href='<?php echo base_url() . "users/settings" ?>' class="nav-item nav-link mx-auto px-2">SETTINGS</a></class=>
            <?php
            }
            ?>

          </div>
        </div>
      </div>
    </nav>

    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container">
        <div class="heading">
          <h1> SET UP YOUR LOCATION </h1>
          <br>
        </div>
        <br>
        <div class="row align-items-start">
          <div class="col">
            <br> <img src="<?php echo base_url() ?>css/images/1.png" style="height:30rem">
            <div class="center">
              <div class="d-grid gap-2 col-6 mx-auto">
                <br>
                <button type="button" class="btn btn-success"> <a href='<?php echo base_url() . "reservation/reserve/MANILA" ?>' style="color:white"> SELECT MANILA</button> </a>
              </div>
            </div>
          </div>
          <div class="col">
            <br> <img src="<?php echo base_url() ?>css/images/2.png" style="height:30rem">
            <div class="center">
              <div class="d-grid gap-2 col-6 mx-auto">
                <br>
                <button type="button" class="btn btn-success"> <a href='<?php echo base_url() . "reservation/reserve/CAVITE" ?>' style="color:white"> SELECT CAVITE </button> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <footer>
    <div class="social-links">
      <a href="" target="_blank"> <i class="fa fa-facebook-f"></i></a>
      <a href="" target="_blank"> <i class="fa fa-twitter"></i></a>
      <a href="" target="_blank"> <i class="fa fa-instagram"></i></a>
    </div>
    <h5>Copyright &copy;2021 PayPark | All Rights Reserved</h5>
  </footer>
</body>

</html>

<style>
  * {
    padding: 0;
    margin: 0;
  }

  header {
    min-height: 100vh;
    padding: 1rem;
    background: #C69552 center/cover no-repeat fixed;
    justify-content: stretch;

  }

  .navbar-brand {
    display: flex;
    flex-direction: row;
  }

  #logo {
    height: auto;
    width: 60px;
  }

  h2 {
    margin: 0.5rem;
    font-family: 'Fredoka One', cursive;
    font-weight: 400;
    font-size: 1.5rem;
    color: #ffffff;
    text-align: center;
    letter-spacing: 0.5rem;
  }

  .heading h1 {
    color: #fff;
    text-transform: uppercase;
    display: flex;
    justify-content: center;
    text-align: center;
    font-family: 'Fredoka One', cursive;
    padding-top: 1rem;
  }

  .col {
    justify-content: center;
    margin-left: 2rem;
  }

  .center {
    justify-content: center;
    padding-right: 7rem;
  }

  button {
    color: #ffffff;
    opacity: 1;
  }

  .navbar-toggler-icon {
    color: #ffffff;
    font-size: 1rem;
    font-weight: normal;
  }

  .navbar-nav .nav-link {
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
    color: #ffffff;
  }

  .navbar-nav .nav-link:hover {
    color: #DC1E00;
  }

  @media only screen and (min-width:950px) {
    .container .card {
      width: 700px;
    }
  }

  @media only screen and (min-width:400px) {}

  @media only screen and (max-width:950px) {
    .container {
      flex-direction: column;
    }

    .container .card {
      width: auto;
    }
  }

  

footer{
  background-color: #724405;
  color: #fff;
  text-align: center;
  padding: 2rem 0;
}
.social-links{
  display: flex;
  justify-content: center;
  margin-bottom: 1.4rem;
}
.social-links a{
  color: #fff;
  border: 2px solid #fff;
  width: 50px;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 30px;
  text-decoration: none;
  margin: 0 0.3rem;
}
.social-links a:hover{
  color: #DC1E00;
}
</style>