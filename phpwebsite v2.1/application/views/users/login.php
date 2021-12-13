<?php
    $this->load->view('templates/header.php');
?>

    <div class="container">
    
    <div class="p-5 mt-5">
      <h1> <strong>LOG IN PAGE</strong> </h1>
      <p class="lead "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente maxime provident cum, doloremque voluptate unde! </p>

      <p><a href="#" target="_blank" class="btn btn-light btn-lg">BUTTON</a></p>
    </div>
    
    <form method="post">
    <div class="card m-5 card-md card-lg justify-content-center">
      <div class="form-floating mb-2 p-2">
        <input type="text" class="form-control" id="emailInput" name="username" placeholder="Username">
      </div>
      <div class="form-floating mb-2 p-2">
        <input type="password" class="form-control" id="passwordInput" name="user_pwd" placeholder="Password">
      </div>

      <button type="submit" class="btn btn-primary btn-lg"> <strong>LOG IN</strong> </button>
      </form>
      <p class="mx-auto"><a href="#" id="forgotPass"> FORGOT PASSWORD</a></p>
      <button type="button" class="btn btn-success btn-lg">REGISTER</button>

    </div>
  </div>

<?php
    $this->load->view('templates/footer.php');
?>