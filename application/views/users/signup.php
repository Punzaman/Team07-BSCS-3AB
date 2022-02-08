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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/signup.css">
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

            <a href='<?php echo base_url() . "users/about" ?>' class="nav-item nav-link mx-auto px-2">ABOUT</a>
            <a href='<?php echo base_url() . "users/contacts" ?>' class="nav-item nav-link mx-auto px-2">CONTACTS</a>
            <a href='<?php echo base_url() . "users/members" ?>' class="nav-item nav-link mx-auto px-2">MEMBERS</a>

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

    <div class="container py-5 h-200">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-8 p-md-9">
              <h3 class="mb-8 pb-2 pb-md-0 mb-md-9 text-dark">Create a New Account</h3>
              <p class="lead text-dark">Come join our community! Let's set up your account!</p>
              <br>

              <h5 class="mb-8 pb-2 pb-md-0 mb-md-9 text-dark">Registration Form</h5>
              <form method="post"> 
                <div class="row">
                  <div class="col-md-6 mb-4">

                    <div class="form-outline">
                      <input type="text" name="user_firstname" class="form-control form-control-lg" />
                      <label class="form-label text-dark" for="firstName">First Name</label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="user_lastname" class="form-control form-control-lg" />
                      <label class="form-label text-dark" for="lastName">Last Name</label>
                    </div>
                  </div>
                </div>
                <span>Gender:</span>
                <div class="mx-auto" style="width: 500px;">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="user_gender" id="inlineRadio1" value="Male"/>
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="user_gender" id="inlineRadio2" value="Female"/>
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                  </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" name="username" id="username" class="form-control form-control-lg" />
                        <label class="form-label" for="userName">Username</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" name="user_cpnumber" id="user_cont" class="form-control form-control-lg" />
                        <label class="form-label" for="userCont">Contact Number</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="text" name="user_address"id="user_add" class="form-control form-control-lg" />
                    <label class="form-label" for="userAdd">Address</label>
                  </div>
                <div class="form-outline mb-4">
                  <input type="email" name="user_email" class="form-control form-control-lg" />
                  <label class="form-label text-dark" for="form3Example3cg">Email Address</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="user_pwd" class="form-control form-control-lg" />
                  <label class="form-label text-dark" for="form3Example4cg">Enter Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="user_pwdrepeat" class="form-control form-control-lg" />
                  <label class="form-label text-dark" for="form3Example4cg">Repeat Password</label>
                </div>

                <center> 
                <div class="mb-8 pb-2 pb-md-0 mb-md-9 text-dark">
                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                  I agree to the <a href="#!" class="text-body"><u>Terms and Conditions</u></a>
                  <br>
                  </center>
                  </div>
               
                  <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-success">Register</button>
                    <br>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    
          </header>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>