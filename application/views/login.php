

<form id="login-form" class="js-validation-signin px-30" action="<?php echo base_url('login/dologin') ?>" method="post">
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-material form-material-primary floating">
                                <label for="loginUsername">Email</label>
                                <input type="email" class="form-control" id="loginUsername" name="loginUsername">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-material form-material-primary floating">
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
                        <button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
                            <i class="si si-login mr-10"></i> Masuk
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