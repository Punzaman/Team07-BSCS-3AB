<?php
$this->load->view('templates/header');
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
<?php
date_default_timezone_set("Asia/Singapore");
?>
<?php
echo "According to the database, you have a schedule for: "
?>
<table>
   <tbody>
      <tr>
         <td>Reserve Date</td>
         <td>Reserve Time</td>
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
            if (strtotime($reservei['reserveDate']) == strtotime("today") && $reservei['reserveStatus'] != 'Closed') {
            ?>
               <tr>
                  <td><?php echo $reservei['reserveDate'] ?></td>
                  <td><?php echo $reservei['reservePark'] ?></td>
                  <td><?php echo $reservei['vehicle_type'] ?></td>
                  <td><?php echo $reservei['vehicle_model'] ?></td>
                  <td><?php echo $reservei['plate_no'] ?></td>

                  <td>

                     <a class="btn btn-danger btn-lg btn-block" href="<?php echo site_url('reservation/reserveclose/' . $reservei['reserveId'] . ''); ?>">End Parking</a>
                  </td>
               </tr>
            <?php
            }
            ?>
         <?php
         }
         ?>
      <?php } else { ?>
         <tr>
            <td colspan="10">You have no reservations for today.</td>
         </tr>
      <?php } ?>

   </tbody>
</table>
<br>
</header>
<?php
$this->load->view('templates/footer');
?>