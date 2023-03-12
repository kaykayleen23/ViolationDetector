<?php

session_start();

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

$query = "
SELECT * FROM userinfo 
WHERE userID != '".$_SESSION['userID']."' 
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output = '
<table class="table table-bordered table-striped">
 <tr>
  <td>Username</td>
  <td>Status</td>
  <td>Action</td>
 </tr>
';

foreach($result as $row)
{
 $status = '';
 $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
 $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
 $user_last_activity = fetch_user_last_activity($row['userID'], $connect);
 if($user_last_activity > $current_timestamp)
 {
  $status = '<span class="">Online</span>';
 }
 else
 {
  $status = '<span class="">Offline</span>';
 }
 $output .= '
 <tr>
  <td>'.$row['username'].'</td>
  <td>'.$status.'</td>
  <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row['userID'].'" data-tousername="'.$row['badgeID'].'">Start Chat</button></td>
 </tr>
 ';
}

$output .= '</table>';

echo $output;

?>