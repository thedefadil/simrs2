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
        <div class=\"container-fluid\">
        <h2 style=\"margin-top:0px\">".ucfirst($table_name)." <?php echo \$button ?></h2>
        <form action=\"<?php echo \$action; ?>\" method=\"post\">";
foreach ($non_pk as $row) {
    if ($row["data_type"] == 'text')
    {
    $string .= "\n\t    <div class=\"form-group\">
            <label for=\"".$row["column_name"]."\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
            <textarea class=\"form-control\" rows=\"3\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\"><?php echo $".$row["column_name"]."; ?></textarea>
        </div>";
    } else
    {
    $string .= "\n\t    <div class=\"form-group\">
            <label for=\"".$row["data_type"]."\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
            <input type=\"text\" class=\"form-control\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\" value=\"<?php echo $".$row["column_name"]."; ?>\" />
        </div>";
    }
}
$string .= "\n\t    <input type=\"hidden\" name=\"".$pk."\" value=\"<?php echo $".$pk."; ?>\" /> ";
$string .= "\n\t    <button type=\"submit\" class=\"btn btn-primary\"><?php echo \$button ?></button> ";
$string .= "\n\t    <a href=\"<?php echo site_url('".$c_url."') ?>\" class=\"btn btn-default\">Cancel</a>";
$string .= "\n\t</form>
</div>
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

$hasil_view_form = createFile($string, $target."views/" . $c_url . "/" . $v_form_file);

?>