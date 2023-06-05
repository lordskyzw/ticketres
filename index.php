
<!DOCTYPE html>
<html lang="en">

<head>
<?php
 //include("includes/meta.php");
?>

    <!-- App css -->
  <link href="assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons-dark.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metisMenu-dark.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="dark.css" />
    <style>
        .account-body.accountbg {
    background-image: url("auth-bg.png") !important;
    background-position: center center;
    background-size: cover;
    background-repeat: repeat;
    background-color: #434a5c;
}
    </style>

</head>

<body class="account-body accountbg">

    <!-- Log In page -->
    <div class="container">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 auth-header-box">
                                <div class="text-center p-3">
                                    
                                    <h4 class="mt-3 mb-1 font-weight-semibold text-white font-18">BUS TICKET RESERVATION SYSTEM</h4>
                                    <p class="text-muted mb-0">Login to continue to Portal</p>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <ul class="nav-border nav nav-pills" role="tablist">
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active p-3" id="LogIn_Tab" role="tabpanel">
                                          
                <?php
                $main_username = "admin";
                $main_password = "admin";
                $main_username1 = "student";
                $main_password1 = "student";

                if(isset($_POST["login"]))
                {
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    if($username == $main_username && $password == $main_password){
                        //$_SESSION["users"] = $username;
                       header("location:index6.php");
                    
                    }


                    else{
                        $message = "<center><b>Login Failed, please try again</b></center>";
                    }

                }


                if(isset($_POST["login2"]))
                {
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                   

                    if($username == $main_username1 && $password == $main_password1){
                        //$_SESSION["users"] = $username;
                       header("location:index5.php");
                    
                    }

                    else{
                        $message = "<center><b>Login Failed, please try again</b></center>";
                    }

                }
                ?>

                                        <form class="form-horizontal auth-form" method="POST">
                                            
                                           
                                            <div class="form-group mb-2">
                                                <label for="Username">Username</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" required name="username" id="username" placeholder="Enter your username">
                                                </div>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="password">Password</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" required name="password" id="password" placeholder="Enter your password">
                                                </div>
                                            </div>

                                            <div class="form-group row my-3">
                                                <div class="col-sm-6">
                                                    <div class="custom-control custom-switch switch-success">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                                        <label class="custom-control-label text-muted" for="customSwitchSuccess">Remember me</label>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end form-group-->

                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit" name="login">Log In Admin <i class="fas fa-sign-in-alt ml-1"></i></button>
                                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit" name="login2">Log In Student <i class="fas fa-sign-in-alt ml-1"></i></button>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end form-group-->
                                        </form>
                                        <!--end form-->
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                            <div class="card-body bg-light-alt text-center">
                                <span class="text-muted d-none d-sm-inline-block">BUS TICKET RESERVATION @2023</span>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
    <!-- End Log In page -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/simplebar.min.js"></script>
</body>

</html>
