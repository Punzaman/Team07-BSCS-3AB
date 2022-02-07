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
  <link rel="stylesheet" href="<?php echo base_url() ?>css/members.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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

    <section class="members m-0">
      <div class="container">
        <h1 class="title text-light">Members</h1>
        <div class="row">
          <div class="col-md-3 profile text-center">
            <div class="img-box">
              <img src="<?php echo base_url() ?>css/images/aira-mem.jpg" class="img-responsive w-30" style="height: 15rem">
              <ul>
                <a href="#">
                  <li><i class="fa fa-facebook"></i></li>
                </a>
                <a href="#">
                  <li><i class="fa fa-instagram"></i></li>
                </a>
                <a href="#">
                  <li><i class="fa fa-twitter"></i></li>
                </a>
                <a href="#">
                  <li><i class="fa fa-envelope"></i></li>
                </a>
              </ul>
            </div>
            <h2>BAUTISTA, AIRAMIN</h2>
            <h3>Student</h3>
            <p>Send a Message</p>
          </div>

          <div class="col-md-3 profile text-center">
            <div class="img-box">
              <img src="<?php echo base_url() ?>css/images/prof.jpg" class="img-responsive w-30" style="height:15rem">
              <ul>
                <a href="#">
                  <li><i class="fa fa-facebook"></i></li>
                </a>
                <a href="#">
                  <li><i class="fa fa-instagram"></i></li>
                </a>
                <a href="#">
                  <li><i class="fa fa-twitter"></i></li>
                </a>
                <a href="#">
                  <li><i class="fa fa-envelope"></i></li>
                </a>
              </ul>
            </div>
            <h2>BORROMEO, DANIEL CHRISTIAN</h2>
            <h3>Student</h3>
            <p>Send a Message</p>
          </div>

          <div class="col-md-3 profile text-center">
            <div class="img-box">
              <img src="<?php echo base_url() ?>css/images/prof2.jpg" class="img-responsive w-30" style="height:15rem">
              <ul>
                <a href="#">
                  <li><i class="fa fa-facebook"></i></li>
                </a>
                <a href="#">
                  <li><i class="fa fa-instagram"></i></li>
                </a>
                <a href="#">
                  <li><i class="fa fa-twitter"></i></li>
                </a>
                <a href="#">
                  <li><i class="fa fa-envelope"></i></li>
                </a>
              </ul>
            </div>
            <h2>EUGENIO, ROSE ANNE</h2>
            <h3>Student</h3>
            <p>Send a Message</p>
          </div>

          <div class="col-md-3 profile text-center">
            <div class="img-box">
              <img src="<?php echo base_url() ?>css/images/net-mem.png" class="img-responsive w-30" style="height:15rem">
              <ul>
                <a href="#">
                  <li><i class="fa fa-facebook"></i></li>
                </a>
                <a href="#">
                  <li><i class="fa fa-instagram"></i></li>
                </a>
                <a href="#">
                  <li><i class="fa fa-twitter"></i></li>
                </a>
                <a href="#">
                  <li><i class="fa fa-envelope"></i></li>
                </a>
              </ul>
            </div>
            <h2>FUNTANILLA, ANTOINETTE</h2>
            <h3>Student</h3>
            <p>Send a Message</p>
          </div>

          <section class="row">
            <div class="col-md-3 profile text-center">
              <div class="img-box">
                <img src="<?php echo base_url() ?>css/images/ken-mem.png" class="img-responsive w-30" style="height:15rem">
                <ul>
                  <a href="#">
                    <li><i class="fa fa-facebook"></i></li>
                  </a>
                  <a href="#">
                    <li><i class="fa fa-instagram"></i></li>
                  </a>
                  <a href="#">
                    <li><i class="fa fa-twitter"></i></li>
                  </a>
                  <a href="#">
                    <li><i class="fa fa-envelope"></i></li>
                  </a>
                </ul>
              </div>
              <h2>PAMATIAN, KENLORD</h2>
              <h3>Student</h3>
              <p>Send a Message</p>
            </div>

            <div class="col-md-3 profile text-center">
              <div class="img-box">
                <img src="<?php echo base_url() ?>css/images/kurk-mem.jpg" class="img-responsive w-30" style="height:15rem">
                <ul>
                  <a href="#">
                    <li><i class="fa fa-facebook"></i></li>
                  </a>
                  <a href="#">
                    <li><i class="fa fa-instagram"></i></li>
                  </a>
                  <a href="#">
                    <li><i class="fa fa-twitter"></i></li>
                  </a>
                  <a href="#">
                    <li><i class="fa fa-envelope"></i></li>
                  </a>
                </ul>
              </div>
              <h2>PUNZALAN, KURK VAN</h2>
              <h3>Student</h3>
              <p>Send a Message</p>
            </div>

            <div class="col-md-3 profile text-center">
              <div class="img-box">
                <img src="<?php echo base_url() ?>css/images/chiq-mem.jpg" class="img-responsive w-30" style="height:15rem">
                <ul>
                  <a href="#">
                    <li><i class="fa fa-facebook"></i></li>
                  </a>
                  <a href="#">
                    <li><i class="fa fa-instagram"></i></li>
                  </a>
                  <a href="#">
                    <li><i class="fa fa-twitter"></i></li>
                  </a>
                  <a href="#">
                    <li><i class="fa fa-envelope"></i></li>
                  </a>
                </ul>
              </div>
              <h2>ZABALA, MARIA AU. CHIQUI CHI R.</h2>
              <h3>Student</h3>
              <p>Send a Message</p>
            </div>

          </section>
        </div>
      </div>
    </section>





    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </header>
</body>

</html>