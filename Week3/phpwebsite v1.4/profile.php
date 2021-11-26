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

<nav>
        <div class="navbar">
            <ul>
                <?php
                    if (isset($_SESSION["useruid"])){
                    echo "<li><a href='addVehicle.php'>Add Vehicle</a></li>";
                    echo "<li><a href='parkingHistory.php'>View Parking History</a></li>";
                
                    
                }
                    else {
                    echo "<li><a href='signup.php'>Sign up</a></li>";
                    echo "<li><a href='login.php'>Log in</a></li>";

                }
                ?>
                
            </ul>
        </div>
    </nav>