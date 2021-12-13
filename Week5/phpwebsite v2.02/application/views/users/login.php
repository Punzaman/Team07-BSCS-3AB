<?php
    $this->load->view('templates/header.php');
?>

    <div class="intro">
        <h2>Log In</h2>
        <form method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="user_pwd" placeholder="Password">
            <button type="submit">Log In</button>
        </form>
    </div>


<?php
    $this->load->view('templates/footer.php');
?>