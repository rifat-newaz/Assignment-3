<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
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
  	<SCRIPT language="JavaScript">
<!--hide

var password;

var pass1="cool";

password=prompt('Please enter your password to view this page!',' ');

if (password==pass1)
{
	
}
else
   {
    alert('Password Incorrect!');
	
	window.location="login.php";
    }

//-->
</SCRIPT>
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
		
		echo "Registration successful! Please <a href='login_admin.php'>Login</a>";
	}
	    else {
        echo "This Username or Email Already Exist!";
    }  
}

?>
              <h4>Hello Admin! let's get registered!</h4>
              <h6 class="fw-light">Fill up this form.</h6>
              <form action="registration_process.php" method="post" class="pt-3">
                <div class="form-group">
                  <input type="text" name="username" required class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="email" name="email" required class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" name="password" required class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" name="admin_reg" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                </div>
                <div class="text-center mt-4 fw-light">
                  Already have an account? <a href="login_admin.php" class="text-primary">Login Here</a>
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
