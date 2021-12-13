<?php
    $this->load->view('templates/header.php');
?>

<form method="post">
    <div class="vehicletype">                                                           <!--Title-->
        <h1>Input the brand of your car</h1>                                            <!--Caption of the textbox input-->
        <input type="text" name="vehicle_type" placeholder="Car ex. Mitsubishi">        <!--Set the button type-->
    
    </div>

    <div class="vehiclemodel">                                                          <!--Title-->
        <h1>Enter your vehicle model</h1>                                               <!--Caption of the textbox input-->
        <input type="text" name="vehicle_model" placeholder="Model ex. Eclipse Cross">  <!--Set the button type-->
        
    </div>

    <div class="platenumber">                                                           <!--Title-->
        <h1>Enter your plate number</h1>                                                <!--Caption of the textbox input-->
        <input type="text" name="plate_no" placeholder="ex. ABC-123 OR AB-1234">        <!--Set the button type-->

    </div>

    <div class="vehiclecolor">                                                          <!--Title-->
        <h1>Enter the color of your vehicle</h1>                                        <!--Caption of the textbox input-->
        <input type="text" name="vehicle_color" placeholder="ex. Blue">                 <!--Set the button type-->

    </div>

    <div class="submit">                                                                <!--Title-->
        <h1>Submit Your Credentials</h1>                                                <!--Caption of the textbox input-->
        <button button type="submit">Submit</button>                                    <!--Set the button type-->
    </div>

<?php
    $this->load->view('templates/footer.php');
?>