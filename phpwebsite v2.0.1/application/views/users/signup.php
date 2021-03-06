<?php
    $this->load->view('templates/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href = "<?php echo base_url(); ?>css/register/styles.css">
</head>
<body>
    <section class="vh-100 gradient-custom">
    <div class="container py-5 h-200">
      <div class="row justify-content-center align-items-center h-200">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-8 p-md-9"> 
                  <center> <h3 class="mb-8 pb-2 pb-md-0 mb-md-9">Create a New Account</h3>
                    <p class="lead">Come join our community! Let's set up your account!</p> </center>
                 <br>
                
              <h5 class="mb-8 pb-2 pb-md-0 mb-md-9">Registration Form</h5>
              <form method="post">
  
                <div class="row">
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="text" name="user_firstname" class="form-control form-control-lg" />
                      <label class="form-label" for="firstName">First Name</label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="text" name="user_lastname" class="form-control form-control-lg" />
                      <label class="form-label" for="lastName">Last Name</label>
                    </div>
  
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
    
                      <div class="form-outline">
                        <input type="text" name="username" class="form-control form-control-lg" />
                        <label class="form-label" for="userName">Username</label>
                      </div>
    
                    </div>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="email" name="user_email" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example3cg">Email Address</label>
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="password" name="user_pwd" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example4cg">Enter Password</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="user_pwdrepeat" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example4cg">Repeat Password</label>
                  </div>
                  <center> 
                <div class="mb-8 pb-2 pb-md-0 mb-md-9">
                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                I agree to the <a href="#!" class="text-body"><u>Terms and Conditions</u></a>
                <br>
                <br>
                <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-success">Register</button>
            </div>
                </center>
                  </div>
                
                  <center>   <hr class="mx-n3">
                <p class="lead"> OR</p> </center>
                <div class="d-grid gap-2 col-8 mx-auto">
                    <button class="btn btn-primary" type="button">Register with Facebook</button>
                    <button class="btn btn-primary" type="button">Register with Google</button>
                    <br>
                  </div>
               
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
   
   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php


$this->load->view('templates/footer.php');
?>