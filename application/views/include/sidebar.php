 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url().'index.php'?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i > <img src="<?php echo base_url('assets/img/germas.png') ?>" height="60"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SIMRS</div>
        
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <?php $this->load->view("include/menu.php") ?>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>