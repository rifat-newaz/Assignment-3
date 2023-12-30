<?php 
session_start(); 
require_once 'vendor/autoload.php' ;

use Classes\User;
$transaction = new User();

?>
<?php 

if($_SESSION['u_type']>1){
	
	    header("Location: transaction_list.php");
        exit();
}
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
                  <h4 class="card-title">User List</h4>
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
				 <?php } 
				 
 if(!empty($_REQUEST['message'])){
	
	if($_REQUEST['message']=="success"){
		
		echo "Registration successful! Please <a href='login.php'>Login</a>";
	}
	    else {
        echo "This Username or Email Already Exist!";
    }  
}

?>
				
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Action</th>
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
$transaction->getUserList($email);

?>
					  </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
			
			
			
			
			

  <form action="accept_or_reject_user.php" method="post" class="pt-3">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alert Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
       Are You Sure You Want to Accept ?
      <input type="hidden" id='xpaytype' name='users_id' class='form-control'/>
	   
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Username:</label>
                        <input type="text" readonly class="form-control" name='username' id="username">
                    </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="accept" class="btn btn-success">Yes</button>
      </div>
    </div>
  </div>
</div>
	 </form>		


<script>
    $(document).ready(function() {
        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var recipient = button.data('whatever'); // Extract info from data-* attributes
            var modal = $(this);
            modal.find('.modal-title').text('New message to ' + recipient);
            modal.find('.modal-body input').val(recipient);
        });
    });
</script>
	
			
			
				

  <form action="accept_or_reject_user.php" method="post" class="pt-3">
<div class="modal fade" id="RejectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="RejectModal">Alert Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
       Are You Sure You Want to Reject ?
      <input type="hidden" id='RejectUsers_id' name='users_id' class='form-control'/>
	   
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Username:</label>
                        <input type="text" readonly class="form-control" name='username' id="RejectUsername">
                    </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="reject" class="btn btn-danger">Yes</button>
      </div>
    </div>
  </div>
</div>
	 </form>		


<script>
    $(document).ready(function() {
        $('#RejectModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var recipient = button.data('whatever'); // Extract info from data-* attributes
            var modal = $(this);
            modal.find('.modal-title').text('New message to ' + recipient);
            modal.find('.modal-body input').val(recipient);
        });
    });
</script>
	
			
			
			
			
			
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

