<?php
    $this->load->view('templates/header.php');
?>

    <div class="profile">
    <h3>This is a user profile</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita reprehenderit voluptatum cum atque harum doloremque nisi.</p>
    </div>

    <?php
    echo "<p>Hello world " . $_SESSION["username"] ."</p>";
    ?>



<?php
    $this->load->view('templates/footer.php');
?>