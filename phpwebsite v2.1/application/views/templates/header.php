<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href = "<?php echo base_url(); ?>css/styles.css">
  <title>Parking System</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

    <?php
            if(isset($_SESSION["user_firstname"])){ ?>
            <a href="<?php echo base_url()."users/homepage"?>" class="navbar-brand">logo here</a>
            <?php } 
            else{ ?>
            <a href="<?php echo base_url()?>" class="navbar-brand">logo here</a>
            <?php } ?>
    
    <button type="button" class="navbar-toggler"
    data-bs-toggle="collapse"
    data-bs-target="#navbarLinks">

    <span class="navbar-toggler-icon"> </span>

    </button>

    <div class="collapse navbar-collapse bg-light" id="navbarLinks">
      <div class="navbar-nav ms-auto">
      <?php
            if(isset($_SESSION["user_firstname"])){ ?>
            <a href="<?php echo base_url()."users/homepage"?>" class="nav-item nav-link">HOME</a>
            <?php } 
            else{ ?>
            <a href="<?php echo base_url()?>" class="nav-item nav-link">HOME</a>
            <?php } ?>
            
            <?php
            if(isset($_SESSION["user_firstname"])){ ?>
            <a href="<?php echo base_url()."users/profile"?>" class="nav-item nav-link">PROFILE</a>
            <?php } 
            else{ ?>
            <a href="#" class="nav-item nav-link">LOREM</a>
            <?php } ?>

            <?php
            if(isset($_SESSION["user_firstname"])){ ?>
            <a href="<?php echo base_url()."reservation/reserve"?>" class="nav-item nav-link">RESERVE</a>
            <?php } 
            else{ ?>
            <a href="#" class="nav-item nav-link">LOREM</a>
            <?php } ?>

            <?php
            if(isset($_SESSION["user_firstname"])){ ?>
            <a href="<?php echo base_url()."users/parkinghistory"?>" class="nav-item nav-link">HISTORY</a>
            <?php } 
            else{ ?>
            <a href="#" class="nav-item nav-link">LOREM</a>
            <?php } ?>

            <a href="#" class="nav-item nav-link">LOREM</a>
      </div>
      

      <div class="btn-group ms-auto" role="group" aria-label="Basic outlined example">
      <?php
                    if(isset($_SESSION["user_firstname"])){ ?>
                    <button type="button" class="btn btn-outline-primary"> <a href='<?php echo base_url()."users/logout"?>'>Log Out</a></button>
                    <?php } 
                    else{ ?>
                    <button type="button" class="btn btn-outline-primary"> <a href="<?php echo base_url()."users/login"?>">Login</a></button>
                    <button type="button" id="btn2" class="btn btn-primary"> <a href="<?php echo base_url()."users/signup"?>" class = "text-light"> Register </a></button>
                    <?php } ?>

      </div>

    </div>
    
   </div>
  </nav>