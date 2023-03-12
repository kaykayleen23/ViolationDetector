<?php

//REGISTER
function emptyInputSignup($firstName, $lastName, $badgeID, $userPhone, $userPwd) {
    $result;
    if (empty($firstName) || empty($lastName) || empty($badgeID) || empty($userPhone) || empty($userPwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invaliduserID($badgeID) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $badgeID)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidPhone($userPhone) {
    $result;
    if (!preg_match('/^[0-9]{10}+$/', $userPhone)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function badgeIDExists($conn, $badgeID) {
    $sql = "SELECT * FROM usersinfo WHERE badgeID = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $badgeID);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function badgeIDCheck($conn, $badgeID) {
    $sql = "SELECT * FROM ids WHERE badgeID = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $badgeID);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        $result = false;
        return $result;
    }
    else {
        return $row;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $firstName, $lastName, $badgeID, $userPnumber, $userPwd) {
    $sql = "INSERT INTO usersinfo (firstName, lastName, badgeID, usersPnumber, usersPwd) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($userPwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $firstName, $lastName, $badgeID, $userPnumber, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../register.php?error=none");
    exit();
}

function login($login) {
    header("location: ../login.php");
}


//LOGIN
function emptyInputLogin($badgeID, $userPwd) {
    $result;
    if ( empty($badgeID) || empty($userPwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $badgeID, $userPwd) {
    $badgeExists = badgeIDExists($conn, $badgeID);

    if ($badgeExists == false){
        header("location: ../login.php?error=doesntexist/wrongusername");
        exit();
    }

    $Pwdhashed = $badgeExists["usersPwd"];
    $checkPwd = password_verify($userPwd, $Pwdhashed);

    if ($checkPwd == false){
        header("location: ../login.php?error=wrongpassword");
        exit();
    }
    else if ($checkPwd == true){
        session_start();
        $_SESSION["$usersID"] = $badgeExists["$usersID"];
        $_SESSION["$badgeID"] = $badgeExists["$badgeID"];
        header("location: ../UserPage.php");

        acceptUser($conn, $badgeID);
        exit();
    }
}

function acceptUser($conn, $badgeID){
    $sql = "INSERT INTO onduty (badgeID) VALUES (?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../login.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $badgeID);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    exit();
}


//REPORT
function emptyInputReport($lastName, $firstName, $birthday, $licenseNum, $licensePlate, $regNum, $violation) {
    $result;
    if ( empty($lastName) || empty($firstName) || empty($birthday) || empty($licenseNum) || empty($licensePlate) || empty($regNum) || empty($violation)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidlicenseNum($licenseNum) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $licenseNum)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidlicensePlate($licensePlate) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $licensePlate)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidregNum($regNum) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $regNum)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function report($conn, $lastName, $firstName, $middleName, $birthday, $licenseNum, $licensePlate, $regNum, $violation) {
    $sql = "INSERT INTO report (lastName, firstName, middleName, birthday, licenseNum, licensePlate, regNum, violation) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../report.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssssss", $lastName, $firstName, $middleName, $birthday, $licenseNum, $licensePlate, $regNum, $violation);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../report.php?error=none");
    exit();
}