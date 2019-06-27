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
        <h2 style="margin-top:0px">M_kelurahan Read</h2>
        <table class="table">
	    <tr><td>Idkecamatan</td><td><?php echo $idkecamatan; ?></td></tr>
	    <tr><td>Namakelurahan</td><td><?php echo $namakelurahan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('m_kelurahan') ?>" class="btn btn-default">Cancel</a></td></tr>
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