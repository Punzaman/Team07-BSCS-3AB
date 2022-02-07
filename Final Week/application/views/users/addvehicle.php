<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/jpg" href="css/images/PayPark Logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto+Condensed:wght@400;700&family=Roboto:wght@900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/add-vehicle.css">
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
    </header>
    <form method="post">
        <div class="container">
            <div class="row gutters">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-30">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="user-profile">
                                    <div class="user-avatar">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                                    </div>
                                    <h5 class="user-name">
                                        <?php
                                        echo "" . $_SESSION["user_firstname"] . " " . $_SESSION["user_lastname"] . "";
                                        ?>
                                    </h5>
                                    <h6 class="user-email">
                                        <?php
                                        echo "" . $_SESSION["user_email"] . "";
                                        ?>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card h-80">
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Vehicle Details</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="Street"><strong>Type</strong></label>
                                        <select class="form-select form-select-sm" name="vehicle_type" aria-label=".form-select-sm example">
                                            <option value="Car">Car</option>
                                            <option value="Motorcycle">Motorcycle</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="ciTy"><strong>Plate No.</strong></label>
                                        <input type="text" name="plate_no" class="form-control" id="ciTy" placeholder="Enter Plate No.">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="state"><strong>Vehicle Model</strong></label>
                                        <input type="text" name="vehicle_model" class="form-control" id="sTate" placeholder="Enter Vehicle Model">
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>