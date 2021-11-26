<?php
    include_once 'header.php';
?>

    <div class="profile">
    <h3>This is a user profile</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita reprehenderit voluptatum cum atque harum doloremque nisi.</p>
    
    <?php
    echo "<p>Hello world " . $_SESSION["useruid"] ."</p>";
    echo "<p>Username " . $_SESSION["username"] . "</p>";
    echo "<p>Hello " . $_SESSION["useremail"] . "</p>";
    ?>
</div>