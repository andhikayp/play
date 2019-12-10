<head>
    <link rel="icon" href="asset/logo.jpg" type="png" sizes="16x16">
<title>E-Resource Class</title>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">



    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>


<link rel="icon" href="asset/logo.jpg" type="png" sizes="16x16">


<div style="position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%) ">

    <h1 style="text-align: center; margin-bottom: 40px;">E-Resource</h1>
    <h6>Execution Time: {elapsed_time}</h6>

<form id="login-form" class="js-validation-signin px-30" action="<?php echo base_url('login/dologin') ?>" method="post">
                    <div class="form-group row">
                        <div class="col-12">
                            <div style="width:100%" class="form-material form-material-primary floating">
                                <label for="loginUsername">Email</label>
                                <input type="email" class="form-control" id="loginUsername" name="loginUsername">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <div style="width: 100%" class="form-material form-material-primary floating">
                                <label for="loginPassword">Password</label>
                                <input type="password" class="form-control" id="loginPassword" name="loginPassword">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <div class="col-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="login-remember-me" name="login-remember-me">
                                <label class="custom-control-label" for="login-remember-me">Remember Me</label>
                            </div>
                        </div>
                    </div> -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="si si-login mr-10"></i>Masuk
                        </button>
                        <!-- <div class="mt-30">
                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="op_auth_signup2.html">
                                                <i class="fa fa-plus mr-5"></i> Create Account
                                            </a>
                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="op_auth_reminder2.html">
                                                <i class="fa fa-warning mr-5"></i> Forgot Password
                                            </a>
                        </div> -->
                    </div>
                </form>
                </div>
