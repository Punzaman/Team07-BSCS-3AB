
<?php
    $this->load->view('admin/header');
?>
             
 
    <div class="row">

 
        <div class="col-md-12">
            <table class="table table-striped table-responsive table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Reserve Status</th>
                        <th>Reserve Date</th>
                        <th>Reserved UserID</th>
                        <th>Reserve Time</th>
                        <th>Reserve Vehicle ID</th>
                        <th>Reserve Location</th>
                        <th>Close Reservation</th>
                        
                </thead>
                <tbody >
                    <?php if(!empty($reservation)) { ?>
                    <?php foreach($reservation as $data) { ?>
                    <tr>
                        <td><?php echo $data['reserveId']; ?></td>
                        <td><?php echo $data['reserveStatus']; ?></td>
                        <td><?php echo $data['reserveDate']; ?></td>
                        <td><?php echo $data['reserveUser']; ?></td>
                        <td><?php echo $data['reservePark']; ?></td>
                        <td><?php echo $data['reserveVehicle']; ?></td>
                        <td><?php echo $data['reserveLocation']; ?></td>
                        <td>
                        <a class="btn btn-danger" href="<?php echo base_url('admin/resgetdetails/'. $data['reserveId'].''); ?>">Close</a>                       
                        </td>
                    </tr>
                    <?php } ?>
                    <?php } else {?>
                    <tr>
                        <td colspan="10">Empty Record</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <table class="table table-striped table-responsive table-hover table-bordered">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>User Status</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>                        
                </thead>
                <tbody >
                    <?php if(!empty($users)) { ?>
                    <?php foreach($users as $data) { ?>
                    <tr>
                        <td><?php echo $data['user_id']; ?></td>
                        <td><?php echo $data['username']; ?></td>
                        <td><?php echo $data['user_status']; ?></td>
                        <td><?php echo $data['user_firstname']; ?></td>
                        <td><?php echo $data['user_lastname']; ?></td>
                        <td><?php echo $data['user_cpnumber']; ?></td>
                        <td><?php echo $data['user_email']; ?></td>
                        <td>
                        <a class="btn btn-info" href="<?php echo base_url('admin/getdetails/'. $data['user_id'].''); ?>">Edit</a>                       
                        </td>                        
                    </tr>
                    <?php } ?>
                    <?php } else {?>
                    <tr>
                        <td colspan="10">Empty Record</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    </body>


    