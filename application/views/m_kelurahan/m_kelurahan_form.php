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
        <h2 style="margin-top:0px">M_kelurahan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Idkecamatan <?php echo form_error('idkecamatan') ?></label>
            <input type="text" class="form-control" name="idkecamatan" id="idkecamatan" placeholder="Idkecamatan" value="<?php echo $idkecamatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Namakelurahan <?php echo form_error('namakelurahan') ?></label>
            <input type="text" class="form-control" name="namakelurahan" id="namakelurahan" placeholder="Namakelurahan" value="<?php echo $namakelurahan; ?>" />
        </div>
	    <input type="hidden" name="idkelurahan" value="<?php echo $idkelurahan; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('m_kelurahan') ?>" class="btn btn-default">Cancel</a>
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