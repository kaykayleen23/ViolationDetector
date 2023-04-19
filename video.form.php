<?php  
session_start();
 require_once 'includes/dbh.inc.php';
 $videoID = $_SESSION["videoedit-id"];
 $ID_delete = $_SESSION["videoDelete-id"];
 $sql = "SELECT * FROM video where videoID  ='$videoID'";
 $result = mysqli_query($conn, $sql);
 $data = mysqli_fetch_array($result);

 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Admin - Videos Table</title>  
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
                <h3 align="center">Video Edit/ Delete</h3>  
                <center>
                <?php  echo $videoID;?>
               <div class=" shadow border mt-3 p-3 mob-w-100" id="form-container">
                <form class="px-2" action="includes\videos.inc.php" method="post">
                    <div class="block-weighted block-vweighted mb-2 mob-mb-1">
                        <div class="weight-50" id="order-1">
                            <div class=" text-justify">
                                <label for="last-name" class=" text-dark">Last Name</label>
                            </div>
                            <div class="">
                                <input type="text" class="" maxlength="256" name="last-name" data-name="last name"
                                    placeholder="" id="input" value="<?php echo $data['lastName']  ?>" />
                            </div>
                        </div>
                        <div class="ml-1 weight-50 mob-m-0" id="order-4">
                            <div class=" text-justify">
                                <label for="birthday" class="text-dark ">Birthday</label>
                            </div>
                            <div class="">
                                <input style="width: 100%;" type="date" class="" maxlength="256" name="birthday"
                                    data-name="birthday" placeholder="" id="date" value="<?php echo $data['bday']  ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="block-weighted block-vweighted mt-3 mb-2 mob-mb-1">
                            <div class="weight-50 content-hcenter mb-1" id="order-9">
                                <input type="submit" class=" btn btn-default mr-2 " name="Edit" id="Edit"
                                value="Edit" data-name="Edit" placeholder="" id="Edit" />
                            </div>
                            <div class="weight-50 content-hcenter" id="order-9">
                                <input type="submit" class=" btn btn-danger" name="Delete"
                                value="Delete" data-name="Delete" placeholder="" id="Delete" />
                            </div>
                    </div>
                </form>
                <center class="mt-2">
                    <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "emptyinput") {
                                echo "<p>Fill in all fields!</p>";
                            }
                        else if ($_GET["error"] == "invalidlicenseNum") {
                            echo "<p>Please enter a valid license number.</p>";
                            }
                        else if ($_GET["error"] == "invalidlicensePlate") {
                            echo "<p>Please enter a valid license plate.</p>";
                            }
                        else if ($_GET["error"] == "invalidregNum") {
                            echo "<p>Please enter a valid registration number.</p>";
                            }
                        else if ($_GET["error"] == "stmtfailed") {
                            echo "<p>Something went wrong. please try again.</p>";
                            }
                        else if ($_GET["error"] == "none") {
                            echo "<p>Saved.</p>";
                            }
                        }
                    ?>
                    </center>
               </div>
          </center>
                <center class="mt-2">
                    <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "emptyinput") {
                                echo "<p>Fill in all fields!</p>";
                            }
                        else if ($_GET["error"] == "invalidlicenseNum") {
                            echo "<p>Please enter a valid license number.</p>";
                            }
                        else if ($_GET["error"] == "invalidlicensePlate") {
                            echo "<p>Please enter a valid license plate.</p>";
                            }
                        else if ($_GET["error"] == "invalidregNum") {
                            echo "<p>Please enter a valid registration number.</p>";
                            }
                        else if ($_GET["error"] == "stmtfailed") {
                            echo "<p>Something went wrong. please try again.</p>";
                            }
                        else if ($_GET["error"] == "none") {
                            echo "<p>Saved.</p>";
                            }
                        }
                    ?>
                    </center>
            </div>
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

