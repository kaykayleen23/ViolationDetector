<?php
$ID = $_POST["id-number"];
if (isset($_POST["Logout"])) {
    
    session_start();
    require_once 'includes/dbh.inc.php';

    $sql = "DELETE FROM onduty WHERE badgeID = '$ID'";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../UserPage.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    session_destroy();

    header("Location: index.php");
}

?>