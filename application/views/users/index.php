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

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/styles.css">
    <title>PayPark</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md px-4 navbar-dark">
            <div class="container-fluid">
                <a href="<?php echo base_url(); ?>users/landing" class="navbar-brand">
                    <img id="logo" src="<?php echo base_url(); ?>css/images/PayPark.png" alt="PayPark LOGO">
                    <h2> PAYPARK</h2>
                </a>

                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarLinks">
                    <span class="navbar-toggler-icon"> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarLinks">
                    <div class="navbar-nav ms-auto">
                        <a href="<?php echo base_url(); ?>css/" class="nav-item nav-link mx-auto px-2">ABOUT</a>
                        <a href="<?php echo base_url(); ?>css/" class="nav-item nav-link mx-auto px-2">LOREM</a>
                        <a href="<?php echo base_url(); ?>css/" class="nav-item nav-link mx-auto px-2">LOREM</a>
                        <a href="<?php echo base_url(); ?>css/" class="nav-item nav-link mx-auto px-2">CONTACTS</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container p-5">
            <div class="p-5 mt-4">
                <h1><strong>WELCOME TO PAYPARK!</strong> </h1>
                <p class="lead ">Let's make your parking experience easier, safer and more convenient. Create your own account now and experience parking with cashless payment transaction.</p>

                <p><a href="<?php echo base_url(); ?>" id="regBtn" class="btn btn-light btn-lg mt-2">EXPLORE</a></p>
            </div>

            <form method="post">
                <div class="card m-3 card-md card-lg justify-content-center">
                    <div class="form-floating mb-2 p-2">
                        <input type="text" class="form-control" name="username" id="emailInput" placeholder="Email / Account Name">
                    </div>
                    <div class="form-floating mb-2 p-2">
                        <input type="password" class="form-control" name="user_pwd" id="passwordInput" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg"> <strong>LOG IN</strong> </button>
            </form>
            <p class="mx-auto"><a href="<?php echo base_url(); ?>css/" id="forgotPass"> FORGOT PASSWORD</a></p>

            <a href="<?php echo base_url(); ?>users/signup" class="btn btn-success btn-lg">REGISTER</a>

        </div>
        </div>
    </header>

    <!----- ABOUT SECTION ----->
    <div id="aboutsection">

        <div class="arrow position-fixed bottom-0 end-0 m-4">
            <a href="#navbarLinks" class="fa fa-arrow-up"></a>
        </div>
        <div class="container p-5">
            <div class="abouttext p-5 mt-5">
                <h1> <strong>About Us</strong> </h1>
                <p class="lead "> Lorem ipsum dolor sit amet consectetur, adipisicing elit. In, quae quis iure, praesentium eius hic quibusdam quo voluptas tempora libero dicta beatae maxime dolore possimus ea suscipit maiores! Voluptatem, corrupti! </p>
            </div>

            <div class="aboutimg mx-5 mt-5">
                <div class="card m-2 card-md card-lg justify-content-center">

                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-item-active">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?php echo base_url(); ?>css/images/park.jpg" style="height: 23rem" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo base_url(); ?>css/images/car.jfif" style="height: 23rem" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo base_url(); ?>css/images/parking2.jpg" style="height: 23rem" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo base_url(); ?>css/images/ssss.png" style="height: 23rem" alt="Fourth slide">
                            </div>
                        </div>
                        <button class="carousel-control-prev" href="#carouselExampleIndicators" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" href="#carouselExampleIndicators" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----- MEMBERS SECTION ------>


    <!----- CONTACTS SECTION ----->
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
    </header>

    <!----- FOOTER SECTION ----->
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