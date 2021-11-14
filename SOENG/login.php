<?php
session_start();
$error = '';

if (isset($_POST['submit'])){
    if (empty($_POST['email']) || empty($_POST['pass'])){
        $error = "Email or password is invalid";
    }
    else
    {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $conn = mysqli_connect("localhost","root","","soeng");

        $query = "SELECT email, pass from register where email = ? AND pass = ? LIMIT 1";

        $stmt = $conn -> prepare($query);
        $stmt -> bind_param("ss", $email, $pass);
        $stmt -> execute();
        $stmt -> bind_result($email,$pass);
        $stmt -> store_result();

    if ($stmt -> fetch ())
            {
                $_SESSION['login_email'] = $email;
                header("location: profile.php");
            }
    else{
        $error = "Email or Password is invalid";
        }
mysqli_close($conn);
}
}
?>