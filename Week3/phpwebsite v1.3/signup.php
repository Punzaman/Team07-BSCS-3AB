<?php
    include_once 'header.php';
?>

    <div class="intro">
        <h2>Sign up</h2>
        <form action="include/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full Name"> 
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdrepeat" placeholder="Repeat Password">
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>

<?php

    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all the fields!</p>";
        }

        else if ($_GET["error"] == "invaliduid") {
            echo "<p>Choose a proper username!</p>";
        }

        else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper email!</p>";
        }

        else if ($_GET["error"] == "passworddontmatch") {
            echo "<p>Password doesn't match!</p>";
        }

        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again!</p>";
        }

        else if ($_GET["error"] == "usernametaken") {
            echo "<p>Choose another username!</p>";
        }

        else if ($_GET["error"] == "none") {
            echo "<p>You have signed up!</p>";
        }
    }
?>







<?php
    include_once 'footer.php';
?>