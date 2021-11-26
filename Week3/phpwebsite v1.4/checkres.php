<?php
    include_once 'header.php';
?>

    <div class= "intro">
        <?php
            if (isset($_SESSION["useruid"])) {
                echo "<p>Parking success " . $_SESSION["useruid"] ."</p>";
                 
                }

            else {
               
                }
        ?>

    </div>









<?php
    include_once 'footer.php';
?>