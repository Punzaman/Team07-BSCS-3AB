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

  <title>PayPark</title>
</head>

<body>
<div class="container-fluid mx-auto">
    <div class="pictureSection mx-auto mb-4">
    
      <?php
        if (isset($_SESSION["user_firstname"])) {
        ?>
          <a href='<?php echo base_url() . "users/index" ?>' class="brand">
            <img id="logo" src="<?php echo base_url() ?>css/images/PayPark.png" alt="PayPark LOGO">
          </a>
        <?php
        } else {
        ?>
          <a href='<?php echo base_url() . "" ?>' class="brand">
            <img id="logo" src="<?php echo base_url() ?>css/images/PayPark.png" alt="PayPark LOGO">
          </a>
        <?php
        }
        ?>
    
    </div>

    <div class="textSection mx-auto mb-2">
      <h2>WELCOME TO PAYPARK</h2>
      <p>Let's make your parking experience easier, safer and more convenient. Create your own account now and experience parking with cashless payment transaction.</p>

      <button type="button" class="btn btn-primary mx-auto"> <strong> <a class="text-light" href="<?php echo base_url() . "users/login" ?>"> LOG IN </a> </strong> </button>

      <button type="button" class="btn btn-success mx-auto"> <a class="text-light" href="<?php echo base_url() . "users/signup" ?>"> REGISTER</a> </button>
    </div>
  </div>

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
    background: #C69552;
    text-align: center;
}
.container-fluid{
    display: flex;
    flex-direction: row;
    min-height: 95vh;
    justify-content: center;
    text-align: center;
    margin: 2rem;
    padding-inline: 5rem;
    align-items: center;
}
.textSection{
    width: 60%;
}
.textSection .btn{
    text-decoration: none;
    width: 10rem;
}
.container-fluid p{
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 2rem;
}
.pictureSection{
    width: 50%;
}
#logo{
    height: auto;
    width: 600px;
}
h2{
    font-family: 'Fredoka One', cursive;
    font-weight: 900;
    font-size: 3rem;
    letter-spacing: 0.5rem;
    color: #fff;
    margin-bottom: 1rem;
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
@media only screen and (max-width:1150px){
    #logo{
        height: auto;
        width: 400px;
    }
}
@media only screen and (max-width:900px){
    .container-fluid{
        display: flex;
        flex-direction: column;
        margin: 1rem;
        padding-inline: 0;
    }
    #logo{
        height: auto;
        width: 100px;
    }
    .textSection{
        width: 80%;
    }
}


</style>