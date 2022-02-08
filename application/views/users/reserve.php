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

  <link rel="stylesheet" href="<?php echo base_url(); ?>css/reserve.css">
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
              <a href='<?php echo base_url() . "users/logout" ?>' class="nav-item nav-link mx-auto px-2">LOG OUT</a></class=>
            <?php
            }
            ?>

          </div>
        </div>
      </div>
    </nav>

    <div class="container py-5">
      <div class="row justify-content-center align-items-center h-60">
        <div class="card shadow-2-strong card-registration" style="border-radius: 20px;">
          <div class="card-body p-5 p-md">

            <center>
              <h3 class="mb-8 pb-2 pb-md-0 mb-md-9">Reservation Form</h3>
              <p class="lead">Let's set up your reservation details!</p>
            </center>
            <form method="post">
              <div class="row">
                <div class="col-md-9 mb-8">
                  <br>
                  <h4>Select a time to park</h4>
                  <div class="col-md-8">
                    <center>
                      <label for="time">Parking Time:</label>
                      <select name="reservePark" id="reservePark">
                        <option value="10:00 AM">10:00</option>
                        <option value="11:00 AM">11:00</option>
                        <option value="12:00 AM">12:00</option>
                        <option value="1:00 PM">13:00</option>
                        <option value="2:00 PM">14:00</option>
                        <option value="3:00 PM">15:00</option>
                        <option value="4:00 PM">16:00</option>
                        <option value="5:00 PM">17:00</option>
                        <option value="6:00 PM">18:00</option>
                        <option value="7:00 PM">19:00</option>
                        <option value="8:00 PM">20:00</option>
                        <option value="9:00 PM">21:00</option>
                        <option value="10:00 PM">22:00</option>
                      </select>

                    </center>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-9 mb-8">
                  <br>
                  <h4>Select a date to park</h4>
                  <div class="col-md-10">
                    <center>
                      <label for="appt">Parking Date:</label>
                      <input type="date" id="reserveDate" name="reserveDate">
                    </center>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-9 mb-8">
                  <br>
                  <h4>Select a vehicle </h4>
                  <div class="col-md-6">
                    <center>
                      <label for="cars">Choose a car:</label>
                      <select name="reserveVehicle">
                        <?php foreach ($car as $kotse) : ?>
                          <option value="<?= $kotse['vehicle_id'] ?>"><?php echo $kotse['vehicle_model'] ?></option>
                        <?php endforeach; ?>
                    </center>
                    </select>
                  </div>
                </div>

                <div class="d-grid gap-2 col-10 mx-auto">
                  <br>
                  <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-success"><a href="<?php echo base_url() . "reservation/location" ?>" style="color:white">Cancel</a></button>
                  </div>
                </div>
              </div>
            </form>
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