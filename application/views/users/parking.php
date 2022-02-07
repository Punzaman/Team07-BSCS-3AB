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
      foreach ($result as $reservei) { ?>
         <?php
         if (strtotime($reservei['reserveDate']) == strtotime("today")) { ?>
            <tr>
               <td><?php echo $reservei['reserveDate'] ?></td>
               <td><?php echo $reservei['reservePark'] ?></td>
               <td><?php echo $reservei['vehicle_type'] ?></td>
               <td><?php echo $reservei['vehicle_model'] ?></td>
               <td><?php echo $reservei['plate_no'] ?></td>
            </tr>
      <?php
         }
      }
      ?>
   </tbody>
</table>

   <button class="btn btn-danger btn-lg btn-block" type="button">
      <a class="text-light"> End Parking </a>
   </button>


<?php
$this->load->view('templates/footer');
?>