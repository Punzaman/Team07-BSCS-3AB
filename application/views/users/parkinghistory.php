<?php
    $this->load->view('templates/header.php');
    /* print_r($result); */
?>

<html xmlns="http://www.w3.org/1999/xhtml%22%3E
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Untitled Document</title>
   </head>
   <table border="1">
      <tbody>
         <tr>
            <td>Reserve Date</td>
            <td>Reserve Park</td> 
            <td>Vehicle Type</td> 
            <td>Vehicle Model</td> 
            <td>Plate Number</td> 
         </tr>
   
         
            <?php 
               foreach($result as $reservei)
            { ?>
               <tr>
               <td><?php echo $reservei['reserveDate']?></td>
               <td><?php echo $reservei['reservePark']?></td>
               <td><?php echo $reservei['vehicle_type']?></td>
               <td><?php echo $reservei['vehicle_model']?></td>
               <td><?php echo $reservei['plate_no']?></td>
               
               </tr>
            <?php }
            ?>
            
            
        


      </tbody>
   </table>
<body>
</body>
</html>

<?php
    $this->load->view('templates/footer.php');
?>