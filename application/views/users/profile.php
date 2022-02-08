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

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/profile.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/index.css">
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
                            <a href='<?php echo base_url() . "users/settings" ?>' class="nav-item nav-link mx-auto px-2">SETTINGS</a></class=>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card h-30">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="user-profile">
                                    <div class="user-avatar">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                                    </div>
                                    <h5 class="user-name">
                                        <?php
                                        echo "<p>" . $_SESSION["user_firstname"] . " " . $_SESSION["user_lastname"] . "</p>";
                                        ?>
                                        <h5>
                                            <h6 class="user-email">
                                                <?php
                                                echo "<p>" . $_SESSION["user_email"] . "</p>";
                                                ?>
                                            </h6>
                                        </h5>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card h-80">
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Personal Details</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName"><strong>Full Name</strong></label>
                                        <p><em> <?php
                                                echo "<p>" . $_SESSION["user_firstname"] . " " . $_SESSION["user_lastname"] . "</p>";
                                                ?></em></p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail"><strong>Gender</strong></label>
                                        <p><em> <?php
                                                echo "<p>" . $_SESSION["user_gender"] . "</p>";
                                                ?></em></p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="website"><strong>Address</strong></label>
                                        <p><em> <?php
                                                echo "<p>" . $_SESSION["user_address"] . "</p>";
                                                ?></em></p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone"><strong>Phone</strong></label>
                                        <p><em><?php
                                                echo "<p>" . $_SESSION["user_cpnumber"] . "</p>";
                                                ?></em></p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="website"><strong>Email</strong></label>
                                        <p><em><?php
                                                echo "<p>" . $_SESSION["user_email"] . "</p>";
                                                ?></em></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mt-3 mb-2 text-primary">Vehicles</h6>
                                </div>


                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <?php
                                    $a = 0;
                                    foreach ($car as $kotse) :
                                        $a++;
                                    ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                                    <?php
                                                    echo "Vehicle #" . $a;
                                                    ?>
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                                <div class="accordion-body">
                                                    <div class="form-group">
                                                        <label for="Street"><strong>Type</strong></label>
                                                        <p><em><?php echo $kotse['vehicle_type'] ?></em></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="sTate"><strong>Plate No.</strong></label>
                                                        <p><em><?php echo $kotse['plate_no'] ?></em></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="sTate"><strong>Vehicle Model</strong></label>
                                                        <p><em><?php echo $kotse['vehicle_model'] ?></em></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    endforeach;
                                    ?>
                                    <button type="button" class="button btn-primary btn-sm"><a href="<?php echo base_url() . "uservehicle/addvehicle" ?>" class="text-light"> Add Vehicle </a></button>
                                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>