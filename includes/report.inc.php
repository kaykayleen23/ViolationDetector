<?php
if (isset($_POST["report"])) {

    $lastName = $_POST["last-name"];
    $firstName = $_POST["first-name"];
    $middleName = $_POST["middle-name"];
    $birthday = $_POST["birthday"];
    $licenseNum = $_POST["license-number"];
    $licensePlate = $_POST["license-plate"];
    $regNum = $_POST["registration-number"];
    $violation = $_POST["violation"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputReport($lastName, $firstName, $birthday, $licenseNum, $licensePlate, $regNum, $violation) !== false) {
        header("location: ../register.php?error=emptyinput");
        exit();
    }
    if (invalidlicenseNum($licenseNum) !== false) {
        header("location: ../report.php?error=invalidlicenseNum");
        exit();
    }
    if (invalidlicensePlate($licensePlate) !== false) {
        header("location: ../report.php?error=invalidlicensePlate");
        exit();
    }
    if (invalidlicensePlate($regNum) !== false) {
        header("location: ../report.php?error=invalidregNum");
        exit();
    }
    
    report($conn, $lastName, $firstName, $middleName, $birthday, $licenseNum, $licensePlate, $regNum, $violation);
}
else {
    header("location: ../report.php");
    exit();
}