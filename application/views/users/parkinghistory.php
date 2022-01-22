<?php
    $this->load->view('templates/header.php');
    /* print_r($result); */
?>

   <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
      <style>
table{
  border: 1px solid black;
  width: 50%;
  text-align: center;
}
tr,td{
  border: 1px solid black;
  text-align: center;
}
</style>
   </head>
   <table>
      <tbody>
         <tr>
            <td>Reserve Date</td>
            <td>Reserve Park</td> 
            <td>Vehicle Type</td> 
            <td>Vehicle Model</td> 
            <td>Plate Number</td> 
            <td>Vehicle Color</td> 
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
               <td><?php echo $reservei['vehicle_color']?></td>
               
               </tr>
            <?php }
            ?>
            
            
        


      </tbody>
   </table>
<body>
</body>

<?php
    $this->load->view('templates/footer.php');
?>