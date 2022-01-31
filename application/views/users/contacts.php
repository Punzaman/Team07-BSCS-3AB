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

  <link rel="stylesheet" href="<?php echo base_url(); ?>css/contacts.css">
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
          <a href='<?php echo base_url() . "index.php" ?>' class="navbar-brand">
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


    <link rel="stylesheet" href="<?php echo base_url() ?>css/Contacts/styles">

    <section class="section-d">
      <div class="heading" id="contactsection">
        <h1>CONTACT US</h1>
      </div>
      <section class="contactpage">

        <div id="mycontacts">
          <div class="firstcont">

            <div class="contact-head">
              <h4 class="text-light">Get in Touch</h4>
            </div>

            <div class="form-floating mb-2">
              <input type="name" class="form-control" id="floatingInput" style="height: 60px" placeholder="Name">
              <label for="floatingInput"><i class="fa fa-user"></i> Name</label>
            </div>

            <div class="form-floating mb-4">
              <input type="text" class="form-control" id="floatingInput" style="height: 60px" placeholder="Email">
              <label for="floatingInput"><i class="fa fa-envelope"></i> Email</label>
            </div>

            <div class="form-floating  mb-3">
              <textarea class="form-control" placeholder="Message" id="floatingTextarea" style="height: 100px"></textarea>
              <label for="floatingTextarea">Message</label>
            </div>

            <a href="index.html" type="submit" class="button">Submit</a>


          </div>

          <div class="secondcont">

            <div class="wrapper">

              <div class="lineone">
                <i class="fa fa-map-marker"></i>
              </div>

              <div class="linetwo">
                <h4>Location</h4>
                <p>Manila</p>
              </div>

              <div class="linethree">
                <i class="fa fa-phone"></i>
              </div>

              <div class="linefour">
                <h4>Let's Talk</h4>
                <p>+639-999-9999</p>
              </div>

              <div class="linefive">
                <i class="fa fa-envelope-open"></i>
              </div>

              <div class="linesix">
                <h4>Email Us</h4>
                <p><a href="mailto:chiquichi18@gmail.com">paypark@gmail.com</a></p>
              </div>

            </div>

          </div>
        </div>
      </section>
    </section>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>