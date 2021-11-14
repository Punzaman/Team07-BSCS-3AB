<html>
<head>
<meta http-equiv = "refresh" content = "2; url = index.php"></meta>
</head>
<body>
<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];

if (!empty($fname) || !empty($lname) || !empty($email) || !empty($pass)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "soeng";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    else {
        $SELECT = "SELECT email From register Where email = ? Limit 1";
        $INSERT = "INSERT Into register (fname,lname,email,pass) values (?,?,?,?)";

        $stmt = $conn->prepare($SELECT);
        $stmt -> bind_param("s", $email);
        $stmt -> execute();
        $stmt -> bind_result($email);
        $stmt -> store_result();
        $rnum = $stmt -> num_rows;

        if ($rnum==0){
            $stmt -> close();

            $stmt = $conn -> prepare($INSERT);
            $stmt -> bind_param("ssss",$fname,$lname,$email,$pass);
            $stmt -> execute();
            echo "Registration Success";
        }
        else {
            //Kapag may Email nang nagamit
            echo "Email already used";
        }
        $stmt -> close();
        $conn -> close();
    }
}
else{
    //Kapag di nalagyan lahat (pero di yun mangyayari kasi naka required na sa input type)
    echo "You've left some fields";
    die();
}
?>
</body>
</html>