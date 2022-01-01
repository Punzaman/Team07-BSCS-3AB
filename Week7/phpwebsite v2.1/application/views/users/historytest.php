<?php
    $this->load->view('templates/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
<tbody>

    <?php print_r($i);
    foreach($j as $reservej)
         {
            ?><tr>
            
            <td><?php echo $reservej['reserveDate']?></td>
            <td><?php echo $reservej['reservePark']?></td>
            
            </tr>
         <?php }
         ?>

      </tbody>
</body>
</html>

<?php
    $this->load->view('templates/footer.php');
?>