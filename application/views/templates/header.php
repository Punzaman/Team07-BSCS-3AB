<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" type="image/jpg" href="<?php echo base_url()?>css/images/PayPark Logo.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto+Condensed:wght@400;700&family=Roboto:wght@900&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
  rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href = "<?php echo base_url(); ?>css/styles.css">
  <title>PayPark</title>
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-md px-4">
    <div class="container-fluid">
    
    <?php
        if(isset($_SESSION["user_firstname"]))
        { 
    ?>
          <a href='<?php echo base_url()."users/homepage"?>' class="navbar-brand">
          <img  id="logo" src="<?php echo base_url()?>css/images/PayPark.png" alt="PayPark LOGO">
          <h2> PAYPARK</h2> </a> 
    <?php 
        }
        else
        { 
    ?>
          <a href='<?php echo base_url()."index.php"?>' class="navbar-brand">
          <img  id="logo" src="<?php echo base_url()?>css/images/PayPark.png" alt="PayPark LOGO">
          <h2> PAYPARK</h2> </a> 
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

      <a href='<?php echo base_url()."users/about"?>' class="nav-item nav-link mx-auto px-2">ABOUT</a>
      <a href='<?php echo base_url()."users/contacts"?>' class="nav-item nav-link mx-auto px-2">CONTACTS</a>
      <a href='<?php echo base_url()."users/members"?>' class="nav-item nav-link mx-auto px-2">MEMBERS</a>

      <?php
        if(isset($_SESSION["user_firstname"])){ ?>
        <a href='<?php echo base_url()."users/parking"?>' class="nav-item nav-link mx-auto px-2">PARKING PAYMENT</a></class=>
      <?php
      } 
      ?> 

      <?php
        if(isset($_SESSION["user_firstname"])){ ?>
        <a href='<?php echo base_url()."users/profile"?>' class="nav-item nav-link mx-auto px-2">PROFILE</a>
      <?php
      } 
      ?>      
      
      <?php
        if(isset($_SESSION["user_firstname"])){ ?>
        <a href='<?php echo base_url()."users/parkinghistory"?>' class="nav-item nav-link mx-auto px-2">HISTORY</a></class=>
      <?php
      } 
      ?>

      <?php
        if(isset($_SESSION["user_firstname"])){ ?>
        <a href='<?php echo base_url()."reservation/location"?>' class="nav-item nav-link mx-auto px-2">RESERVE</a></class=>
      <?php
      } 
      ?>           
            <?php
                    if(isset($_SESSION["user_firstname"])){ ?>
                    <a href='<?php echo base_url()."users/logout"?>' class="nav-item nav-link mx-auto px-2">LOG OUT</a></class=>
                    <?php
                  } 
                  ?>

      </div>
    </div>
    </div>
    </nav>

