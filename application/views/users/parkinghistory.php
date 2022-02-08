<?php
$this->load->view('templates/header.php');
?>

<head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <style>
      table {
         border: 1px solid black;
         width: 50%;
         text-align: center;
      }

      tr,
      td {
         border: 1px solid black;
         text-align: center;
      }
   </style>
</head>
<table border="1">
   <tbody>
      <tr>
         <td>Reserve Date</td>
         <td>Reserve Park</td>
         <td>Time Out</td>
         <td>Vehicle Type</td>
         <td>Vehicle Model</td>
         <td>Plate Number</td>
      </tr>

      <?php
      if (!empty($result)) {
      ?>
         <?php
         foreach ($result as $reservei) {
         ?>
            <?php
            if ($reservei['reserveStatus'] == 'Closed') {
            ?>
               <tr>
                  <td><?php echo $reservei['reserveDate'] ?></td>
                  <td><?php echo $reservei['reservePark'] ?></td>
                  <td><?php echo $reservei['reserveEnd'] ?></td>
                  <td><?php echo $reservei['vehicle_type'] ?></td>
                  <td><?php echo $reservei['vehicle_model'] ?></td>
                  <td><?php echo $reservei['plate_no'] ?></td>
               </tr>
            <?php
            }
            ?>
         <?php
         }
         ?>
      <?php } else { ?>
         <tr>
            <td colspan="10">You have no parking history yet. Reserve now!</td>
         </tr>
      <?php } ?>

   </tbody>
</table>

<br>
</header>
<?php
$this->load->view('templates/footer.php');
?>