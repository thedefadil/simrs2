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
        <h2 style="margin-top:0px">Profil <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Rstitle <?php echo form_error('rstitle') ?></label>
            <input type="text" class="form-control" name="rstitle" id="rstitle" placeholder="Rstitle" value="<?php echo $rstitle; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Singrstitl <?php echo form_error('singrstitl') ?></label>
            <input type="text" class="form-control" name="singrstitl" id="singrstitl" placeholder="Singrstitl" value="<?php echo $singrstitl; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Singhead1 <?php echo form_error('singhead1') ?></label>
            <input type="text" class="form-control" name="singhead1" id="singhead1" placeholder="Singhead1" value="<?php echo $singhead1; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Singsurat <?php echo form_error('singsurat') ?></label>
            <input type="text" class="form-control" name="singsurat" id="singsurat" placeholder="Singsurat" value="<?php echo $singsurat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Header1 <?php echo form_error('header1') ?></label>
            <input type="text" class="form-control" name="header1" id="header1" placeholder="Header1" value="<?php echo $header1; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Header2 <?php echo form_error('header2') ?></label>
            <input type="text" class="form-control" name="header2" id="header2" placeholder="Header2" value="<?php echo $header2; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Header3 <?php echo form_error('header3') ?></label>
            <input type="text" class="form-control" name="header3" id="header3" placeholder="Header3" value="<?php echo $header3; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Header4 <?php echo form_error('header4') ?></label>
            <input type="text" class="form-control" name="header4" id="header4" placeholder="Header4" value="<?php echo $header4; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Kdrs <?php echo form_error('kdrs') ?></label>
            <input type="text" class="form-control" name="kdrs" id="kdrs" placeholder="Kdrs" value="<?php echo $kdrs; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kelasrs <?php echo form_error('kelasrs') ?></label>
            <input type="text" class="form-control" name="kelasrs" id="kelasrs" placeholder="Kelasrs" value="<?php echo $kelasrs; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Namars <?php echo form_error('namars') ?></label>
            <input type="text" class="form-control" name="namars" id="namars" placeholder="Namars" value="<?php echo $namars; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kdtarifnacbg <?php echo form_error('kdtarifnacbg') ?></label>
            <input type="text" class="form-control" name="kdtarifnacbg" id="kdtarifnacbg" placeholder="Kdtarifnacbg" value="<?php echo $kdtarifnacbg; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Version <?php echo form_error('version') ?></label>
            <input type="text" class="form-control" name="version" id="version" placeholder="Version" value="<?php echo $version; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('profil') ?>" class="btn btn-default">Cancel</a>
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