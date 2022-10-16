<!doctype html>
<html lang="en">
<head>

        <meta charset="utf-8" />
        <title>User Sign Up</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ config('app.admin_asset_url') }}images/favicon.ico">

        <!-- preloader css -->
        <link rel="stylesheet" href="{{ config('app.admin_asset_url') }}/css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ config('app.admin_asset_url') }}css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ config('app.admin_asset_url') }}css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ config('app.admin_asset_url') }}css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0"> 
                    <div class="col-xxl-12 col-lg-12 col-md-12">
                        <div class="auth-bg pt-md-5 p-4 d-flex"> 
                            <div class="auth-full-page-content d-flex p-sm-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100"> 
                                    <div class="auth-content my-auto">
                                        <div class="text-center">
                                            <h5 class="mb-0">Register Account</h5>
                                            <p class="text-muted mt-2">Get your free Laravel Blog Admin account now.</p>
                                        </div>
                                        <form class="needs-validation mt-4 pt-2" novalidate action="signup" method="POST">
                                            <div class="mb-3">
                                                <label for="useremail" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="useremail" placeholder="Enter email" required>  
                                                <div class="invalid-feedback">
                                                    Please Enter Email
                                                </div>      
                                            </div>
                    
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="username" placeholder="Enter username" required>
                                                <div class="invalid-feedback">
                                                    Please Enter Username
                                                </div>  
                                            </div>
                    
                                            <div class="mb-3">
                                                <label for="userpassword" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="userpassword" placeholder="Enter password" required>
                                                <div class="invalid-feedback">
                                                    Please Enter Password
                                                </div>       
                                            </div> 
                                            <div class="mb-3">
                                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Register</button>
                                            </div>
                                        </form> 
                                    </div>
                                    <div class="mt-4 mt-md-5 text-center">
                                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>


        <!-- JAVASCRIPT -->
        <script src="{{ config('app.admin_asset_url') }}libs/jquery/jquery.min.js"></script>
        <script src="{{ config('app.admin_asset_url') }}libs/bootstrap/js/bootstrap.bundle.min.js"></script>   
        <!-- validation init -->
        <script src="{{ config('app.admin_asset_url') }}js/pages/validation.init.js"></script>

    </body> 
 </html>