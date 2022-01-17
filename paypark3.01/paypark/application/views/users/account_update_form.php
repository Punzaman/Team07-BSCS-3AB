<?php
    $this->load->view('templates/header');
	?>
	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href = " <?php echo base_url(); ?> css/update/styles.css ">

</head>
<body>

    <div class="container">
        <div class="signup-form">
        <form method="post">
        <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="card h-30">
            <div class="card-body">
                <div class="account-settings">
                    <div class="user-profile">
                        <div class="user-avatar">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                        </div>
                        <h5 class="user-name text-dark">Lorem Lorem</h5>
                        <h6 class="user-email text-dark">loremloremlorem@gmail.com</h6>
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
                        <h6 class="mb-2 text-primary">Personal Details</h6>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group text-dark">
                            <label for="firstname" ><strong>First Name</strong></label>
                            <input  class="form-control" type="text" name="user_firstname" placeholder="First Name" value="<?php echo $user['user_firstname'] ?>">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group text-dark">
                            <label for="lastname"><strong>Last Name</strong></label>
                            <input type="text" class="form-control" name="user_lastname" placeholder="Last Name" value="<?php echo $user['user_lastname'] ?>">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group text-dark">
                            <label for="email"><strong>Email</strong></label>
                            <input type="text" class="form-control" name="user_email" placeholder="Email" value="<?php echo $user['user_email'] ?>">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group text-dark">
                            <label for="email"><strong>Username</strong></label>
                            <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $user['username'] ?>">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group text-dark">
                            <label for="Gender"><strong>Gender</strong></label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Enter your gender</option>
                                <option value="1">Female</option>
                                <option value="2">Male</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group text-dark">
                            <label for="phone"><strong>Phone Number</strong></label>
                            <input type="text" class="form-control" name="user_cpnumber" placeholder="Phone Number" value="<?php echo $user['user_cpnumber'] ?>">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group text-dark">
                            <label for="address"><strong>Address</strong></label>
                            <input type="text" class="form-control" name="user_address" placeholder="Address" value="<?php echo $user['user_address'] ?>">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <label for="formFileSm" class="form-label text-dark"><strong>Change profile picture</strong></label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group text-dark">
                            <label for="user_pwd"><strong>Password</strong></label>
                            <input type="text" class="form-control" name="user_pwd" placeholder="Password" >
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group text-dark">
                            <label for="user_pwdrepeat"><strong>Confirm Password</strong></label>
                            <input type="text" class="form-control" name="user_pwdrepeat" placeholder="Password" >
                        </div>
                    </div>
                </div>
                <!-- <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mt-3 mb-2 text-primary">Address</h6>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="Street"><strong>Street</strong></label>
                            <input type="name" class="form-control" id="Street" placeholder="Enter Street">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="ciTy"><strong>City</strong></label>
                            <input type="name" class="form-control" id="ciTy" placeholder="Enter City">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="sTate"><strong>State</strong></label>
                            <input type="text" class="form-control" id="sTate" placeholder="Enter State">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="zIp"><strong>Zip Code</strong></label>
                            <input type="text" class="form-control" id="zIp" placeholder="Zip Code">
                        </div>
                    </div>
                </div> -->
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mt-3 mb-2 text-primary">Vehicle Details</h6>
                    </div>
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                              Name of Vehicle #1
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                               <div class="form-group text-dark">
                                    <label for="Street"><strong>Type</strong></label>
                                    <p><em>lorem lorem</em></p>
                                </div>
                                <div class="form-group text-dark">
                                    <label for="sTate"><strong>Plate No.</strong></label>
                                    <p><em>lorem lorem</em></p>
                                </div>
                                <div class="form-group text-dark">
                                    <label for="sTate"><strong>Vehicle Model</strong></label>
                                    <p><em>lorem lorem</em></p>
                                </div>
                                <div class="form-group text-dark">
                                    <label for="sTate"><strong>Official Receipt No.</strong></label>
                                    <p><em>lorem lorem</em></p>
                                </div>
                                <div class="form-group text-dark">
                                    <label for="sTate"><strong>Certificate of Registration</strong></label>
                                    <p><em>lorem lorem</em></p>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-primary" type="button">Delete</button>
                                  </div>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                              Name of Vehicle #2
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                            <div class="form-group text-dark">
                                    <label for="Street"><strong>Type</strong></label>
                                    <p><em>lorem lorem</em></p>
                                </div>
                                <div class="form-group text-dark">
                                    <label for="sTate"><strong>Plate No.</strong></label>
                                    <p><em>lorem lorem</em></p>
                                </div>
                                <div class="form-group text-dark">
                                    <label for="sTate"><strong>Vehicle Model</strong></label>
                                    <p><em>lorem lorem</em></p>
                                </div>
                                <div class="form-group text-dark">
                                    <label for="sTate"><strong>Official Receipt No.</strong></label>
                                    <p><em>lorem lorem</em></p>
                                </div>
                                <div class="form-group text-dark">
                                    <label for="sTate"><strong>Certificate of Registration</strong></label>
                                    <p><em>lorem lorem</em></p>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-primary" type="button">Delete</button>
                                  </div>
                             </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                              Name of Vehicle #3
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                            <div class="form-group text-dark">
                                    <label for="Street"><strong>Type</strong></label>
                                    <p><em>lorem lorem</em></p>
                                </div>
                                <div class="form-group text-dark">
                                    <label for="sTate"><strong>Plate No.</strong></label>
                                    <p><em>lorem lorem</em></p>
                                </div>
                                <div class="form-group text-dark">
                                    <label for="sTate"><strong>Vehicle Model</strong></label>
                                    <p><em>lorem lorem</em></p>
                                </div>
                                <div class="form-group text-dark">
                                    <label for="sTate"><strong>Official Receipt No.</strong></label>
                                    <p><em>lorem lorem</em></p>
                                </div>
                                <div class="form-group text-dark">
                                    <label for="sTate"><strong>Certificate of Registration</strong></label>
                                    <p><em>lorem lorem</em></p>
                                </div>
                               <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary" type="button">Delete</button>
                              </div>
                             </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href='<?php echo base_url()."users/profile"?>' <button class="btn btn-danger" type="button">Cancel</button> </a>
                  </div>
            </div>
        </div>
        </div>
        </div>
        </form>
	</div>
</div>
        
    </body>
	<?php
		$this->load->view('templates/footer');
	?>