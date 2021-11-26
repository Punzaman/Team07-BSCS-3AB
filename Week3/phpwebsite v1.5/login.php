<?php
    include_once 'header.php';
?>

    <div class="intro">
        <h2>Log In</h2>
        <form action="include/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Log In</button>
        </form>
    </div>

    <?php

    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all the fields!</p>";
        }

        else if ($_GET["error"] == "wronglogin") {
            echo "<p>Incorrect Credentials!</p>";
        }

    }
?>








<?php
    include_once 'footer.php';
?>