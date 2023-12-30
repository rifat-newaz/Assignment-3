<?php 
session_start(); 
require_once 'vendor/autoload.php' ;

use Classes\Transaction;
$transaction = new Transaction();

?>
<?php 

require_once 'includes/header.php' ;

?>

    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->



<?php require_once 'includes/sidebar.php' ; ?>


	  <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
			
			
	

			
			
		
			
			
			
			
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Transaction List</h4>
                  <p class="card-description">
                 <?php if($_SESSION['u_type']==1){?> 
              <form action="index.php" method="get" class="pt-3">  
					<div class="form-group">
                    <div class="input-group">
                      <input type="email" name="email" class="form-control" placeholder="Customr's Email" aria-label="Recipient's username">
                      <div class="input-group-append">
                        <button type="submit" name="search" class="btn btn-sm btn-primary" type="button">Search</button>
                      </div>
                    </div>
                  </div>
			</form>	
				 <?php } ?>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                        <th>Ref ID</th>
                        <th>Date</th>
                        <th>Particular ID</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        <th>Balance</th>
                        <th>Details</th>
                        <th>Customer ID</th>
                        <th>Posted By</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!--<tr>
                          <td class="py-1">
                            <img src="design/images/faces/face1.jpg" alt="image"/>
                          </td>
                          <td>
                            Herman Beck
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 77.99
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                        </tr>!--!-->
						<?php
					
if(!empty($_REQUEST['email'])){
	
	$email = $_REQUEST['email'];
}
else{
	
	$email = "";
}
$transaction->getTransactionsTable($email);

?>
					  </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			</div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="design/https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="design/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="design/vendors/chart.js/Chart.min.js"></script>
  <script src="design/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="design/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="design/js/off-canvas.js"></script>
  <script src="design/js/hoverable-collapse.js"></script>
  <script src="design/js/template.js"></script>
  <script src="design/js/settings.js"></script>
  <script src="design/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="design/js/dashboard.js"></script>
  <script src="design/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

