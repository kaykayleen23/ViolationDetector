<?php  
$serverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "ViolationDetector";

date_default_timezone_set('Asia/Manila');

$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
session_start();

if (isset($_POST["Edit"])) {
    $_SESSION['report_edit_id'] = $_POST['report_edit_id'];
    header("location: /webapp/reportform.php");
}

if (isset($_POST["Delete"])) {
    $_SESSION['report-delete-id'] = $_POST['report-delete-id'];
    header("location: includes/report.admin.inc.php");
}