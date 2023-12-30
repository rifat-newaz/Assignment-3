
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
	  

	  
	  </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
	  
	  
        <ul class="nav">
		
		
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
		  
		 
		<?php if($_SESSION['u_type']==2){ ?> 
		  
          <li class="nav-item">
            <a class="nav-link" href="deposit.php">
              <i class="mdi mdi-coin menu-icon"></i>
              <span class="menu-title">Deposit money</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="withdraw.php">
              <i class="mdi mdi-folder-upload menu-icon"></i>
              <span class="menu-title">Withdraw money</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transfer.php">
              <i class="mdi mdi-reply menu-icon"></i>
              <span class="menu-title">Transfer Money</span>
            </a>
          </li>
		  
		<?php } else { ?>
		
		
          <li class="nav-item">
            <a class="nav-link" href="transaction_list.php">
              <i class="mdi mdi-book-open menu-icon"></i>
              <span class="menu-title">Transaction List</span>
            </a>
          </li>
		  
		<?php } ?>
		  
        </ul>
      
	  
	  
	  </nav>
     