<?php
session_start();
require_once 'dbh.inc.php';

// Check if vID is set in the session
if (isset($_SESSION['vID'])) {
    $id = $_SESSION['vID'];
} else {
    // If vID is not set in the session, redirect the user and display an error message
    header("Location: ../overspeeding.php?error=emptyvID");
    exit();
}

// Check if vID is set in the session
if (isset($_SESSION["id-number"])) {
    $badgeID = $_SESSION["id-number"];
} else {
    // If vID is not set in the session, redirect the user and display an error message
    header("Location: ../overspeeding.php?error=emptybadgeID");
    exit();
}

if (isset($_POST["Reviewed"])) {
    $status = $_POST["Reviewed"];
    $lName = $_POST["last-name"];
    $bday = $_POST["birthday"];

    require_once 'functions.inc.php';

    $date_time = date("Y-m-d H:i:s");

    if (emptyInputStatus($lName, $bday, $status) !== false) {
        header("Location: ../overspeeding.php?error=incomplete");
        exit();
    }

    reviewed($conn, $id, $lName, $bday, $date_time, $status, $badgeID);
    header("Location: ../overspeeding.php?error=none");
}
if (isset($_POST["Unaddressed"])) {
    $status = $_POST["Unaddressed"];
    require_once 'functions.inc.php';
    $date_time = date("Y-m-d H:i:s");
    unaddressed($conn, $id, $date_time, $status, $badgeID);
    header("Location: ../overspeeding.php?error=none");
}

mysqli_close($conn);