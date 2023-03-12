<?php
    include_once 'header.php';

    //file upload
    if (isset($_POST['submit'])){
        $maxsize = 5242880;

        if (isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){
            $name = $
        }else{
            $_SESSION['message'] = "Please select a file.";
        }
    }
?>

    <center>
        <h1 class="h2 my-2">Illegal Lane Change</h1>
    </center>
    <div class="block-vweighted block-weighted mt-2">
        <div class="weight-50 " id="order-2">
            <div class="content-hcenter h-min-200 mb-2 ">
                <div class="logs-info h-min-200">
                    <div class="content-hcenter h-min-100 top-half">
                        <div class="">
                            <h2 class="h3-bold text-center">Logs</h2>
                        </div>
                    </div>
                    <div class="h-min-350">
                        <div class="block-hweighted block-weighted ml-2">
                            <div class="weight-20">
                                <h3 class="h4-bold text-center">Details: </h3>
                            </div>
                            <div class="weight-80">
                                <p class="h4">Overspeeding, Dasmarinas, 13:01</p>
                            </div>
                        </div>
                        <div class="block-hweighted block-weighted ml-2 mb-1">
                            <div class="weight-20">
                                <h3 class="h4-bold text-center">Status: </h3>
                            </div>
                            <div class="weight-80">
                                <p class="unaddressed">Unaddressed</p>
                            </div>
                        </div>
                        <div class="underline"></div>
                        <div class="block-hweighted block-weighted ml-2 mt-1">
                            <div class="weight-20">
                                <h3 class="h4-bold text-center">Details: </h3>
                            </div>
                            <div class="weight-80">
                                <p class="h4">Overspeeding, Dasmarinas, 13:01</p>
                            </div>
                        </div>
                        <div class="block-hweighted block-weighted ml-2 mb-1">
                            <div class="weight-20">
                                <h3 class="h4-bold text-center">Status: </h3>
                            </div>
                            <div class="weight-80">
                                <p class="pending">Pending</p>
                            </div>
                        </div>
                        <div class="underline"></div>
                        <div class="block-hweighted block-weighted ml-2 mt-1">
                            <div class="weight-20">
                                <h3 class="h4-bold text-center">Details: </h3>
                            </div>
                            <div class="weight-80">
                                <p class="h4">Overspeeding, Dasmarinas, 13:01</p>
                            </div>
                        </div>
                        <div class="block-hweighted block-weighted ml-2 mb-1">
                            <div class="weight-20">
                                <h3 class="h4-bold text-center">Status: </h3>
                            </div>
                            <div class="weight-80">
                                <p class="reviewed">Reviewed</p>
                            </div>
                        </div>
                        <div class="underline"></div>
                        <div class="block-hweighted block-weighted ml-2 mt-1">
                            <div class="weight-20">
                                <h3 class="h4-bold text-center">Details: </h3>
                            </div>
                            <div class="weight-80">
                                <p class="h4">Overspeeding, Dasmarinas, 13:01</p>
                            </div>
                        </div>
                        <div class="block-hweighted block-weighted ml-2 mb-1">
                            <div class="weight-20">
                                <h3 class="h4-bold text-center">Status: </h3>
                            </div>
                            <div class="weight-80">
                                <p class="unaddressed">Unaddressed</p>
                            </div>
                        </div>
                        <div class="underline"></div>
                        <div class="block-hweighted block-weighted ml-2 mt-1">
                            <div class="weight-20">
                                <h3 class="h4-bold text-center">Details: </h3>
                            </div>
                            <div class="weight-80">
                                <p class="h4">Overspeeding, Dasmarinas, 13:01</p>
                            </div>
                        </div>
                        <div class="block-hweighted block-weighted ml-2 mb-1">
                            <div class="weight-20">
                                <h3 class="h4-bold text-center">Status: </h3>
                            </div>
                            <div class="weight-80">
                                <p class="pending">Pending</p>
                            </div>
                        </div>
                        <div class="underline"></div>
                        <div class="block-hweighted block-weighted ml-2 mt-1">
                            <div class="weight-20">
                                <h3 class="h4-bold text-center">Details: </h3>
                            </div>
                            <div class="weight-80">
                                <p class="h4">Overspeeding, Dasmarinas, 13:01</p>
                            </div>
                        </div>
                        <div class="block-hweighted block-weighted ml-2 mb-1">
                            <div class="weight-20">
                                <h3 class="h4-bold text-center">Status: </h3>
                            </div>
                            <div class="weight-80">
                                <p class="reviewed">Reviewed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="weight-50 mr-4 order-1 mob-m-0" id="order-1">
            <div class="content-hcenter h-min-200 mb-2 ">
                <div class="video h-min-200">
                    <div class="content-hcenter h-min-100 top-half">
                        <div class="">
                            <h2 class="h3-bold text-center">Video</h2>
                        </div>
                    </div>
                    <center>
                        <video width="85%" height="350px"
                        controls="controls"/>
                         
                        <source src="vid.mp4"
                            type="video/mp4">
                    </video>
                    </center>
                    <center>
                        <form class="block-vweighted block-weighted mt-2 mx-1" action="includes/violation.inc.php" method="post">
                                <div class="weight-50 mob-mb-1" id="order-1">
                                    <input type="submit" class="button-dark-main button-radius-violation" name="login"
                                        value="Unaddressed" data-name="Unaddressed" placeholder="" id="Unaddressed" />
                                </div>
                                <div class="weight-50" id="order-3">
                                    <input type="submit" class="button-dark-main button-radius-violation" name="login"
                                        value="Reviewed" data-name="Reviewed" placeholder="" id="Reviewed" />
                                </div>
                            
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>