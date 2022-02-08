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

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/update-profile.css">
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
                                            echo "<p>" . $_SESSION["user_firstname"] . " " . $_SESSION["user_lastname"] . "</p>";
                                            ?></h5>
                                        <h6 class="user-email">
                                            <?php
                                            echo "<p>" . $_SESSION["user_email"] . "</p>";
                                            ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $id = $_SESSION['user_id']; ?>
                    <input type="hidden" name="user_id" placeholder="First Name..." value="<?php echo $user['user_id'] ?>"><br>
                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                        <div class="card h-80">
                            <div class="card-body">
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h6 class="mb-2 text-primary">Personal Details</h6>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="fullName"><strong>First Name</strong></label>
                                            <input type="text" class="form-control" id="fName" name="user_firstname" placeholder="Enter First name" value="<?php
                                                                                                                                                                echo "" . $_SESSION["user_firstname"] . "";
                                                                                                                                                                ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="fullName"><strong>Last Name</strong></label>
                                            <input type="text" class="form-control" id="lastName" name="user_lastname" placeholder="Enter Last name" value="<?php
                                                                                                                                                            echo "" . $_SESSION["user_lastname"] . "";
                                                                                                                                                            ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="Gender"><strong>Gender</strong></label>
                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="user_gender">
                                            <option disabled value="<?=$user['user_gender']?>"><?php echo $user['user_gender'] ?></option>
                                            <option value="Female">Female</option>
                                            <option value="Male">Male</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone"><strong>Phone</strong></label>
                                            <input type="tel" class="form-control" id="website" name="user_cpnumber" placeholder="phone/cellphone number" value="<?php
                                                                                                                                                                    echo "" . $_SESSION["user_cpnumber"] . "";
                                                                                                                                                                    ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="website"><strong>Email</strong></label>
                                            <input type="email" class="form-control" id="website" name="user_email" placeholder="Website url" value="<?php
                                                                                                                                                        echo "" . $_SESSION["user_email"] . "";
                                                                                                                                                        ?>">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="username"><strong>Username</strong></label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Website url" value="<?php
                                                                                                                                                        echo "" . $_SESSION["username"] . "";
                                                                                                                                                        ?>">
                                        </div>
                                    </div>

                                </div>
                                <div class="row gutters">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="Street"><strong>Address</strong></label>
                                            <input type="text" class="form-control" id="Address" name="user_address" placeholder="Enter Street" value="<?php
                                                                                                                                                        echo "" . $_SESSION["user_address"] . "";
                                                                                                                                                        ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a href='<?php echo base_url() . "users/profile" ?>' <button class="btn btn-danger" type="button">Cancel</button> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </header>
</body>

</html>