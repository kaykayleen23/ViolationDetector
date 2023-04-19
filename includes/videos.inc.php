<?php
require_once 'dbh.inc.php';

$sql = "SELECT * FROM video";

session_start();
$videoID = $_SESSION["videoedit-id"];
$videoID_delete = $_SESSION["videoDelete-id"];
echo $videoID;
if (isset($_POST["Edit"])) {
    $lastName = $_POST["last-name"];
    $birthday = $_POST["birthday"];

    $sql = "UPDATE video SET 
            lastName = '$lastName', 
            bday = '$birthday'
            WHERE videoID = '$videoID'";

            $result = mysqli_query($conn, $sql);
            if($result){
                header("Location: ../videos.php?error=none");
            }
}else{
    $sql = "DELETE FROM video WHERE videoID = '$videoID_delete';";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: ../videos.php?error=none");
    }
}
// Execute the query
$result = mysqli_query($conn, $sql);

if (!$result) {
    die('Error executing query: ' . mysqli_error($conn));
}

// Fetch data and store it in an array
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Close the database connection
mysqli_close($conn);

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($data);