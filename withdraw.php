<?php 
session_start(); 
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
				             

				 <form action="transaction_process.php" method="post">
				
                  <h4 class="card-title"> Withdraw Money </h4>
				  <?php if(!empty($_REQUEST['message'])){
	
	if($_REQUEST['message']=="success"){
		
		echo  "<font color='green'>Amount Successfully Withdraw!</font>";
	}
	    else {
        echo "<font color='red'>Faild !</font>";
    }  
}

?>
				  
                  <p class="card-description">
                   
                  </p>
                  <div class="form-group">
                    <label>Withdraw Amount</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Withdraw Amount" name="Amount" aria-label="Deposit Amount">
                  </div>
                  <div class="form-group">
                    <label>Details</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Details" name="Details" aria-label="Details">
                  </div>
                  <div class="form-group">
                    <label>Date</label>
                    <input type="date" class="form-control form-control-lg" name="Date" pattern="\d{4}-\d{2}-\d{2}" value="" min="1997-01-01" max="2030-12-31" aria-label="Date">
		
	
		
                  </div>
				  
                <div class="mt-3">
				
                  <button type="submit" name="withdraw" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn float-right">SAVE</button>
                </div>
                </div>
				</form>
				
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

