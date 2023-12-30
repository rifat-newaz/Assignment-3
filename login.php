<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="design/vendors/feather/feather.css">
  <link rel="stylesheet" href="design/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="design/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="design/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="design/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="design/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="design/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="design/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
             
<?php if(!empty($_REQUEST['message'])){
	
	if($_REQUEST['message']=="success"){
		
		echo "Login successful!";
	}
	    else {
        echo "<font color='red'>Login failed. Please check your email and password or wait for conformation.</font>";
    }  
}

?>
              <h4>Hello Customer! let's get started</h4>
              <h6 class="fw-light">Sign in to continue.</h6>
              <form action="login_process.php" method="post" class="pt-3">
                <div class="form-group">
                  <input type="email" name="email" required class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" name="password" required class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" name="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
                <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="registration_form.php" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="design/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="design/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="design/js/off-canvas.js"></script>
  <script src="design/js/hoverable-collapse.js"></script>
  <script src="design/js/template.js"></script>
  <script src="design/js/settings.js"></script>
  <script src="design/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
