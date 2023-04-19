<?php  
 require_once 'includes/dbh.inc.php';
 $query ="SELECT * FROM report";  
 $result = mysqli_query($conn, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Admin - Report Table</title>  
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
                <h3 align="center">Report Table</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                               <th>ACTION</th>
							   	<th>USER_ID</th>
								<th>LAST_NAME</th>
                                <th>FIRST_NAME</th>
                                <th>MIDDLE_NAME</th>
								<th>BIRTHDAY</th>
                                <th>LICENSE_NUMBER</th>
                                <th>LICENSE_PLATE</th>
                                <th>REGISTRATION_NUMBER</th>
                                <th>VIOLATION</th>
                                <th>DATE</th>
								<th>BADGE_ID</th>
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                              $fieldname1= $row['userID'];
                              $editdata= '<div class="block-weighted block-vweighted mob-mb-1">
                              <form action="report_session.php" method="post">
                              <div class="mb-05 content-hcenter weight-50">
                              <input type="hidden" class="" maxlength="256" name="report_edit_id" data-name=""
                              placeholder="" id="input" value="'.$fieldname1.'" />
                              <input type="submit" class="btn btn-default" name="Edit" value="Edit"  
                              data-name="Edit" placeholder="" id="Edit"/>
                              </form>';
                          
                              $deletedata= '<div class="block-weighted block-vweighted mob-mb-1">
                              <form action="report_session.php" method="post">
                              <div class="mb-05 content-hcenter weight-50">
                              <input type="hidden" class="" maxlength="256" name="report-delete-id" data-name=""
                              placeholder="" id="input" value="'.$fieldname1.'" />
                              <input type="submit" class="btn btn-danger" name="Delete" value="Delete"
                                data-name="Delete" placeholder="" id="Delete"/>
                                </form>';
                          
                              echo'  
                              <tr>  
                              <td>'.$editdata. ', '.$deletedata.'</td> 
                                    <td>'.$row['userID'].'</td>  
									<td>'.$row['lastName'].'</td>  
                                    <td>'.$row['firstName'].'</td>  
                                    <td>'.$row['middleName'].'</td>  
									<td>'.$row['birthday'].'</td>  
									<td>'.$row['licenseNum'].'</td>  
									<td>'.$row['licensePLate'].'</td>  
									<td>'.$row['regNum'].'</td>  
									<td>'.$row['violation'].'</td>  
                                    <td>'.$row['badgeID'].'</td>  
									<td>'.$row['date'].'</td>   
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  

 </script>  