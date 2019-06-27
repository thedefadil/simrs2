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
        <h2 style="margin-top:0px">Profil List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('profil/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('profil/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('profil'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Rstitle</th>
		<th>Singrstitl</th>
		<th>Singhead1</th>
		<th>Singsurat</th>
		<th>Header1</th>
		<th>Header2</th>
		<th>Header3</th>
		<th>Header4</th>
		<th>Kdrs</th>
		<th>Kelasrs</th>
		<th>Namars</th>
		<th>Kdtarifnacbg</th>
		<th>Version</th>
		<th>Action</th>
            </tr><?php
            foreach ($profil_data as $profil)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $profil->rstitle ?></td>
			<td><?php echo $profil->singrstitl ?></td>
			<td><?php echo $profil->singhead1 ?></td>
			<td><?php echo $profil->singsurat ?></td>
			<td><?php echo $profil->header1 ?></td>
			<td><?php echo $profil->header2 ?></td>
			<td><?php echo $profil->header3 ?></td>
			<td><?php echo $profil->header4 ?></td>
			<td><?php echo $profil->kdrs ?></td>
			<td><?php echo $profil->kelasrs ?></td>
			<td><?php echo $profil->namars ?></td>
			<td><?php echo $profil->kdtarifnacbg ?></td>
			<td><?php echo $profil->version ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('profil/read/'.$profil->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('profil/update/'.$profil->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('profil/delete/'.$profil->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
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