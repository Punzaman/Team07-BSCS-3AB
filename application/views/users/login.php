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
  <nav class="navbar navbar-expand-md px-4 navbar-dark">
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
    
    <button type="button" class="navbar-toggler"
    data-bs-toggle="collapse"
    data-bs-target="#navbarLinks">
    
      <span class="navbar-toggler-icon"> </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarLinks">
      <div class="navbar-nav ms-auto">
            <a href="#aboutsection" class="nav-item nav-link mx-auto px-2">ABOUT</a>

            <a href="#contactsection" class="nav-item nav-link mx-auto px-2">CONTACTS</a>

            <a href='<?php echo base_url() . "users/members" ?>' class="nav-item nav-link mx-auto px-2">MEMBERS</a>
      </div>
    </div>
   </div>
  </nav>

  <div class="container p-5">
    <div class="textSection">
      <h1><strong>LOG IN</strong> </h1>
      <p class="lead mt-3">Make your parking experience easier, safer and more convenient. Reserve and Park Now!</p>
    </div>

    <form method="post">
    <div class="card mx-auto justify-content-center mt-3" style="width: 500px;">
      <div class="form-group mb-2 p-2">
        <input type="text" class="form-control" id="emailInput" name="username" placeholder="Email / Account Name">
      </div>
      
      <div class="form-group mb-2 p-2">
        <input type="password" class="form-control" id="passwordInput" name="user_pwd" placeholder="Password">
      </div>

      <button type="submit" class="btn btn-primary btn-lg"> <strong>LOG IN</strong> </button>

    </div>
  </div>
  </header>

  <!----- ABOUT SECTION ----->
  <div id="aboutsection">
    
    <div class="arrow position-fixed bottom-0 end-0 m-4">
      <a href="#navbarLinks" class="fa fa-arrow-up"></a>
    </div>

  <div class="container p-5 mx-auto">
    <div class="abouttext">
      <h1> <strong>About Us</strong> </h1>
        <p class="lead"> Paypark was founded in 2021. Paypark facilitates the efficient movement of people, vehicles and personal belongings with the  
          goal of enhancing the customer experience while improving bottom 
          line results for our clients. Paypark provides professional parking management, ground transportation, facility maintenance, security, and other technology-driven mobility solutions to aviation, commercial, healthcare and government clients across the Philippines.
        </p>
    </div>
  
  <div class="aboutimg mx-auto">
        <div id="carouselExampleFade" class="carousel slide carousel-fade mx-auto" data-bs-ride="carousel"  style="width: 500px;">
          <div class="carousel-item-active">
            <div class="carousel-item active">
              <img class="d-block w-100"  style="width: 500px;  height: 23rem" src="<?php echo base_url() ?>css/images/park.jpg"  alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100"  style="width: 500px; height: 23rem" src="<?php echo base_url() ?>css/images/car.jfif"  alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100"  style="width: 500px; height: 23rem" src="<?php echo base_url() ?>css/images/parking2.jpg"  alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100"  style="width: 500px; height: 23rem" src="<?php echo base_url() ?>css/images/ssss.png"  alt="Fourth slide">
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

  <!----- CONTACTS SECTION ----->
  <section class="section-d">
    <div class="heading" id="contactsection">
        <h1>CONTACT US</h1></div>
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

<style>
    *{
    padding: 0;
    margin: 0;
}
body{
    font-family: 'Roboto Condensed', sans-serif;
    line-height: 2;
    color: #3F3E39;
    scroll-behavior: smooth;
}
header{
    min-height: 90vh;
    padding: 1rem;
    background: #C69552  center/cover no-repeat fixed;
    justify-content: stretch;
}
.navbar-brand{
    display: flex;
    flex-direction: row;
}
#logo{
    height: auto;
    width: 60px;
}
h2{
    margin: 0.5rem;
    font-family: 'Fredoka One', cursive;
    font-weight: 400;
    font-size: 1.5rem;
    color: #ffffff;
    text-align: center;
    letter-spacing: 0.5rem;
}
.navbar-toggler-icon{
    color: #ffffff;
    font-size: 1rem;
    font-weight: normal;
}
.container{
    max-width: 3320px;
    margin: 3rem auto;
    display: flex;
    flex-direction: column;
    color: #3F3E39;
    font-weight: 700;
    align-content: center;
    justify-content: center;
}
.navbar-dark .navbar-nav .nav-link{
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
    color: #ffffff;
}
.navbar-dark .navbar-nav .nav-link:hover{
    color: #DC1E00;
}
.textSection{
    display: flex;
    flex-direction: column;
    text-align: center;
    justify-content: center;
}
.textSection h1{
    font-family: 'Fredoka One', cursive;
    font-weight: 700;
    font-size: 3rem;
    color: #ffffff;
    letter-spacing: 0.3rem;
}
.lead{
    font-weight: 700;
    font-size: 2rem;
    color: #3F3E39;
}
.container .card .btn{
    color: #ffffff;
    margin: 0.5rem;
}
.container .card #forgotPass{
    color: #1761C1;
    text-decoration: none;
}
.container .card hr{
    color: #3F3E39;
    width: 90%;
}
#regBtn{
    font-family: 'Fredoka One', cursive;
    color: #3F3E39;
    background: #ffffff;
    border-color: #ffffff;
    border-radius: 13px;
}
#regBtn:hover{
    color: #ffffff;
    background: #DC1E00;
    border-color: #DC1E00;
}
.container .card{
    margin-inline: 1rem;
    background: #ffffff;
}
.container .card .form-floating{
    color: #3F3E39;
}
.container .card .btn{
    color: #ffffff;
    margin: 0.5rem;
}
.container .card #forgotPass{
    color: #1761C1;
    text-decoration: none;
}
.container .card hr{
    color: #3F3E39;
    width: 90%;
}
/*****ABOUT SECTION*****/
#aboutsection{
    height: auto;
}
#aboutsection .container{
    max-width: 3320px;
    display: flex;
    flex-direction: row;
    color: #9B7541;
    font-weight: 700;
    align-content: center;
    justify-content: center;
}
.abouttext{
    width: 65rem;
    margin: 5rem;
}
#aboutsection .container h1{
    color: #C69552; 
}
.lead{
    font-weight: 700;
    font-size: 1.5rem;
    color: #3F3E39;
}
.aboutimg{
    width: 50rem;
    margin: 4rem;
}
.carousel-control-next, .carousel-control-prev{
    background-color: #3F3E39;
    border-radius: 10rem;
    height: 5rem;
    margin-top: 8.5rem
}

@media only screen and (min-width:1000px){
    #aboutsection .card{
        width: 700px;
    }
}
@media only screen and (max-width:1300px){
    #aboutsection .container{
        flex-direction: column;
    }
    .abouttext{
        text-align: center;
    }
}
@media only screen and (max-width:1250px){
    .abouttext{
        width: 80vw;
        margin: 2rem;
    }
    
}
@media only screen and (max-width:1000px){
    .aboutimg{
        margin: auto;
    }
}
/*****CONTACTS SECTION*****/
.section-d{
    background-color: #C69552;
}
.arrow .fa{
    letter-spacing: 1rem;
    padding: 0.85rem;
    font-size: 1.3rem;
    height: 3.3rem;
    width: 3.3rem;
    text-decoration: none;
    border-radius: 50%;
    border-style: solid;
    background: rgba(0, 0, 0, 0.8);
    color: #f4f4f4;
    border-color: #f4f4f4;
    transition: 0.3s;
    cursor: pointer;
}
.fa-arrow-up:hover {
    background: #f4f4f4;
    color: black;
    transform: scale(1.1);
}.section-d .heading h1{
    color: #fff;
    font-size: 3rem;
    text-transform: uppercase;
    display: flex;
    justify-content: center;
    padding: 40px 0 40px 0;
    font-family: 'Fredoka One', cursive;
}
.contactpage{
    min-height: 70vh;
}
@media only screen and (max-width: 850px){
    #mycontacts {
        display: flex;
        flex-direction: column;
    }
}
#mycontacts {
    display: flex;
    justify-content: center;
    align-items: center;
}
.firstcont {
    margin-left: 3rem;
    padding: 2rem;
    width: 30vw;
    height: auto;
    background-color: rgba(0, 0, 0, .5);
    border-radius: 10px;
    line-height: 1.5rem;
    text-align: center;
}
@media only screen and (max-width: 1100px){
    .firstcont {
        height: auto;
        padding: 2rem;
    }
}
@media only screen and (max-width: 850px){
    .firstcont {
        margin: 2rem;
        width: 60vw;
        padding: 2rem;
    }
}
.button {
    color: white;
    background-color: #C69552;
    border: 1px solid rgba(255, 255, 255, 0.254);
    text-decoration: none;
    cursor: pointer;
    opacity: 0.9;
    border-radius: 30px;
    width: 105px;
}
.firstcont a:hover{
    color: red;
}
.secondcont {
    margin-left: 2rem;
    padding: 2rem;
    padding-top: 4rem;
    width: 23vw;
    height: 55vh;
    background-color: rgba(0, 0, 0, .5);
    border-radius: 10px;
    line-height: 1.8rem;
}
.wrapper {
    display: grid;
    grid-auto-rows: minmax(70px, auto);
    grid-gap: 5px;
    line-height: 1.5;
}
.lineone{
    grid-column: 3;
    grid-row: 1;
    text-align: center;
}
.linetwo{
    grid-column: 4;
    grid-row: 1/2;
    padding-left: 20px;
}
.linethree{
    grid-column: 4/3;
    grid-row: 2/3;
    text-align: center;
    padding-top: 7px;
}
.linefour{
    grid-column: 4;
    grid-row: 2/3;
    padding-left: 20px;
    padding-top: 7px;
}
.linefive{
    grid-column: 3;
    grid-row: 3/4;
    text-align: center;
}
.linesix{
    grid-column: 4/6;
    grid-row: 3/3;
    padding-left: 20px;
}
.secondcont h4{
    color: #fff;
}
.secondcont p{
    color: #fff;
}
.secondcont i{
    color: #fff;
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