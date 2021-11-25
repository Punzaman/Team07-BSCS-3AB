<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat) {
    $result;

    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdrepeat)) {
    $result = true;
    }   
    else {
        $result = false;
    }
    return $result;
}
    function invalidUsername($username) {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;

    }
    function invalidEmail($email) {
        $result;
    
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }   
        else {
            $result = false;
        }
        return $result;
    }

    function pwtMatch($pwd, $pwdrepeat) {
        $result;
    
        if ($pwd !== $pwdrepeat) {
            $result = true;
        }   
        else {
            $result = false;
        }
        return $result;
    }

    function usernameexist($conn, $username, $email) {
        $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }
        
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }

        else {
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    function createUser($conn, $name, $email, $username, $pwd) {
        $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../signup.php?error=stmt2failed");
            exit();
        }

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../signup.php?error=none");
            exit();

        
    }

    function emptyInputLogin($username, $pwd) {
        $result;
    
        if (empty($username) || empty($pwd)) {
        $result = true;
        }   
        else {
            $result = false;
        }
        return $result;
    }

function loginUser($conn, $username, $pwd) {
    $usernameexist = usernameexist($conn, $username, $email);

    if ($usernameexist === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $usernameexist["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $usernameexist["usersId"];
        $_SESSION["useruid"] = $usernameexist["usersUid"];
        $_SESSION["username"] = $usernameexist["usersName"];
        $_SESSION["useremail"] = $usernameexist["usersEmail"];
        header("location: ../index.php");
        exit();

    }
}

function createreservation($conn, $vehicle, $timein, $timeout) {
    $sql = "INSERT INTO reservation (reserveVehicle, reserveEnter, reserveExit) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../checkres.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $vehicle, $timein, $timeout);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../checkres.php?error=none");
        exit();
}

function emptyInputReserve($vehicle, $timein, $timeout){
    $result;

    if(empty($vehicle) || empty($timein) || empty($timeout)){
    
       $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
