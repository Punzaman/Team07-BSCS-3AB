<?php
	$this->load->view('templates/header');
?>

<link rel="stylesheet" href = "<?php echo base_url()?>css/Contacts/styles">

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

<?php
	$this->load->view('templates/footer');
?>