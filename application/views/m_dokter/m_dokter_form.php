<!doctype html>
<html>
    <head>
         
        <?php $this->load->view("include/head.php") ?>
        
    </head>
    <body>
    <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
   <?php $this->load->view("include/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("include/topbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <h2 style="margin-top:0px">M_dokter <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">KDPOLY <?php echo form_error('KDPOLY') ?></label>
            <input type="text" class="form-control" name="KDPOLY" id="KDPOLY" placeholder="KDPOLY" value="<?php echo $KDPOLY; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NAMADOKTER <?php echo form_error('NAMADOKTER') ?></label>
            <input type="text" class="form-control" name="NAMADOKTER" id="NAMADOKTER" placeholder="NAMADOKTER" value="<?php echo $NAMADOKTER; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">KDPROFESI <?php echo form_error('KDPROFESI') ?></label>
            <input type="text" class="form-control" name="KDPROFESI" id="KDPROFESI" placeholder="KDPROFESI" value="<?php echo $KDPROFESI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NAMAPROFESI <?php echo form_error('NAMAPROFESI') ?></label>
            <input type="text" class="form-control" name="NAMAPROFESI" id="NAMAPROFESI" placeholder="NAMAPROFESI" value="<?php echo $NAMAPROFESI; ?>" />
        </div>
	    <div class="form-group">
            <label for="smallint">St Aktif <?php echo form_error('st_aktif') ?></label>
            <input type="text" class="form-control" name="st_aktif" id="st_aktif" placeholder="St Aktif" value="<?php echo $st_aktif; ?>" />
        </div>
	    <input type="hidden" name="KDDOKTER" value="<?php echo $KDDOKTER; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('m_dokter') ?>" class="btn btn-default">Cancel</a>
	</form>
</div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view("include/footer.php") ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view("include/scrool.php") ?>


  <!---modal--->
  <?php $this->load->view("include/modal.php") ?>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view("include/js.php") ?>
    </body>
</html>