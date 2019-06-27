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
        <h2 style="margin-top:0px">M_dokter Read</h2>
        <table class="table">
	    <tr><td>KDPOLY</td><td><?php echo $KDPOLY; ?></td></tr>
	    <tr><td>NAMADOKTER</td><td><?php echo $NAMADOKTER; ?></td></tr>
	    <tr><td>KDPROFESI</td><td><?php echo $KDPROFESI; ?></td></tr>
	    <tr><td>NAMAPROFESI</td><td><?php echo $NAMAPROFESI; ?></td></tr>
	    <tr><td>St Aktif</td><td><?php echo $st_aktif; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('m_dokter') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
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