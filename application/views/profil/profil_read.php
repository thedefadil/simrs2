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
        <h2 style="margin-top:0px">Profil Read</h2>
        <table class="table">
	    <tr><td>Rstitle</td><td><?php echo $rstitle; ?></td></tr>
	    <tr><td>Singrstitl</td><td><?php echo $singrstitl; ?></td></tr>
	    <tr><td>Singhead1</td><td><?php echo $singhead1; ?></td></tr>
	    <tr><td>Singsurat</td><td><?php echo $singsurat; ?></td></tr>
	    <tr><td>Header1</td><td><?php echo $header1; ?></td></tr>
	    <tr><td>Header2</td><td><?php echo $header2; ?></td></tr>
	    <tr><td>Header3</td><td><?php echo $header3; ?></td></tr>
	    <tr><td>Header4</td><td><?php echo $header4; ?></td></tr>
	    <tr><td>Kdrs</td><td><?php echo $kdrs; ?></td></tr>
	    <tr><td>Kelasrs</td><td><?php echo $kelasrs; ?></td></tr>
	    <tr><td>Namars</td><td><?php echo $namars; ?></td></tr>
	    <tr><td>Kdtarifnacbg</td><td><?php echo $kdtarifnacbg; ?></td></tr>
	    <tr><td>Version</td><td><?php echo $version; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('profil') ?>" class="btn btn-default">Cancel</a></td></tr>
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