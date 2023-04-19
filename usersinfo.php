<?php  
session_start();
 require_once 'includes/dbh.inc.php';
 $query ="SELECT * FROM usersinfo";  
 $result = mysqli_query($conn, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Admin - Users Info Table</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="/webapp/css/style.css">
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body>  
      <section class="top-nav-admin">
        <div>
            <!--<h2 class="h3-bold mx-2">Violation Detector AdminHub</h2>-->
        </div>
      </label>
       <!-- <ul class="menu z-index">   
            <a href="./UserPage.php">Dashboard</a>
            <a href="./overspeeding.php">Overspeeding</a>
            <a href="./illegallane.php">Lane Change</a>
            <a href="./redlight.php">Red Light</a>
            <a href="./report.php">Report</a>
            <a href="./index.php">Logout</a>
        </ul>-->
        <ul class="nav nav-tabs nav-justified">
            <li role="presentation" class=""><a href="adminpage.php">Dashboard</a></li>
            <li role="presentation"><a href="registeredenforcers.php">Registered Enforcers</a></li>
            <li role="presentation"><a href="usersinfo.php">User Info</a></li>
            <li role="presentation"><a href="videos.php">Videos</a></li>
            <li role="presentation"><a href="report.admin.php">Reports</a></li>
            <li role="presentation"><a href="admin.table.php">Admin</a></li>
            <li role="presentation"><a href="index.php">Logout</a></li>
        </ul>
    </section>
           <br /><br />  
           <div class="container">  

                <h3 align="center">Users Info Table</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                               <th>ACTION</th>
							   	<th>USERID</th>
								<th>FIRSTNAME</th>
								<th>LASTNAME</th>
								<th>BADGEID</th>
								<th>PHONE NUMBER</th>
                                <th>PASSWORD</th>
                                <th>USERSTATUS</th>
                                <th>DATE_TIME</th>
                               </tr>  
                          </thead>  
                          <?php  
while($row = mysqli_fetch_array($result))  
{    
    $fieldname1= $row['usersID'];
    $editdata= '<div class="block-weighted block-vweighted mob-mb-1">
    <form action="usersform.php" method="post">
    <div class="mb-05 content-hcenter weight-50">
    <input type="hidden" class="" maxlength="256" name="edit-id" id="input" value="'.$fieldname1.'" />
    <input type="submit" class="btn btn-default" name="Edit" value="Edit" id="Edit"/></form>';

    $deletedata= '<div class="block-weighted block-vweighted mob-mb-1">
    <form action="usersform.php" method="post">
    <div class="mb-05 content-hcenter weight-50">
    <input type="hidden" class="" maxlength="256" name="Delete-id" data-name=""
    placeholder="" id="input" value="'.$fieldname1.'" />
    <input type="submit" class="btn btn-danger" name="Delete" value="Delete"  data-name="Delete" placeholder="" id="Delete"/></form>';

    echo'  
    <tr>  
          <td>'.$editdata.' '.$deletedata.'</td>  
          <td>'.$row['usersID'].'</td>  
          <td>'.$row['firstName'].'</td>  
          <td>'.$row['lastName'].'</td>  
          <td>'.$row['badgeID'].'</td>  
          <td>'.$row['usersPnumber'].'</td>  
          <td>'.$row['usersPwd'].'</td>  
          <td>'.$row['userStatus'].'</td>  
          <td>'.$row['date_time'].'</td>
    </tr>';  
} 
?> 
                     </table>  
                </div>  
           </div> 
           <div>
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>  
<!--<script>
  function toggleDiv() {
    var formDiv = document.getElementById("formDiv");
    formDiv.style.display = (formDiv.style.display == "none") ? "block" : "none";
    
    // Set session variable
  }
</script>-->

