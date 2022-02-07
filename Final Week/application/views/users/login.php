<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" type="image/jpg" href="<?php echo base_url(); ?>css/images/PayPark Logo.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto+Condensed:wght@400;700&family=Roboto:wght@900&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="<?php echo base_url(); ?>css/index.css">
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
            <img id="logo" src="<?php echo base_url() ?>css/images/PayPark Logo.png" alt="PayPark LOGO">
            <h2> PAYPARK</h2>
          </a>
        <?php
        } else {
        ?>
          <a href='<?php echo base_url() . "" ?>' class="navbar-brand">
            <img id="logo" src="<?php echo base_url() ?>css/images/PayPark Logo.png" alt="PayPark LOGO">
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

            <a href='<?php echo base_url() . "users/about" ?>' class="nav-item nav-link mx-auto px-2">ABOUT</a>
            <a href='<?php echo base_url() . "users/contacts" ?>' class="nav-item nav-link mx-auto px-2">CONTACTS</a>
            <a href='<?php echo base_url() . "users/members" ?>' class="nav-item nav-link mx-auto px-2">MEMBERS</a>
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
    <div class="container">

      <div class="p-5 mt-5">
        <h1> <strong>LOG IN PAGE</strong> </h1>
        <p class="lead "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente maxime provident cum, doloremque voluptate unde! </p>

        <p><a href="#" target="_blank" class="btn btn-light btn-lg">BUTTON</a></p>
      </div>

      <form method="post">
        <div class="card m-5 card-md card-lg justify-content-center">
          <div class="form-floating mb-2 p-2">
            <input type="text" class="form-control" id="emailInput" name="username" placeholder="Username">
          </div>
          <div class="form-floating mb-2 p-2">
            <input type="password" class="form-control" id="passwordInput" name="user_pwd" placeholder="Password">
          </div>

          <button type="submit" class="btn btn-primary btn-lg"> <strong>LOG IN</strong> </button>
      </form>
      <p class="mx-auto"><a href="#" id="forgotPass"> FORGOT PASSWORD</a></p>
      <button type="button" class="btn btn-success btn-lg">REGISTER</button>

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

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>