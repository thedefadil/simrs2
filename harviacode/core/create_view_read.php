<?php 

$string = "<!doctype html>
<html>
    <head>
        <?php \$this->load->view(\"include/head.php\") ?>
    </head>
    <body>
     <!-- Page Wrapper -->
  <div id=\"wrapper\">

    <!-- Sidebar -->
   <?php \$this->load->view(\"include/sidebar.php\") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

      <!-- Main Content -->
      <div id=\"content\">

        <!-- Topbar -->
        <?php \$this->load->view(\"include/topbar.php\") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <h2 style=\"margin-top:0px\">".ucfirst($table_name)." Read</h2>
        <table class=\"table\">";
foreach ($non_pk as $row) {
    $string .= "\n\t    <tr><td>".label($row["column_name"])."</td><td><?php echo $".$row["column_name"]."; ?></td></tr>";
}
$string .= "\n\t    <tr><td></td><td><a href=\"<?php echo site_url('".$c_url."') ?>\" class=\"btn btn-default\">Cancel</a></td></tr>";
$string .= "\n\t</table>
<!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php \$this->load->view(\"include/footer.php\") ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php \$this->load->view(\"include/scrool.php\") ?>


  <!---modal--->
  <?php \$this->load->view(\"include/modal.php\") ?>

  <!-- Bootstrap core JavaScript-->
  <?php \$this->load->view(\"include/js.php\") ?>
        </body>
</html>";



$hasil_view_read = createFile($string, $target."views/" . $c_url . "/" . $v_read_file);

?>