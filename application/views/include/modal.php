<!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('login/logout')?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

 

  <!---modal laporan--->
         <div class="modal fade" id="laporanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Laporan</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo site_url('/'.$this->uri->segment(1).'/url/') ?>">

                <div class="modal-body">
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kabupaten / Kota</label>
                        <div class="col-xs-8">
                          <select name="url3" id="url3" class="form-control">
                  <option value="">-- Select One --</option>
                  <option value="0">Provinsi</option>
                  <?php
            foreach ($m_kab as $m_kab)
            {

                ?>
                <option value="<?php echo $m_kab->id ?>" >  <?php echo $m_kab->nama ?></option>
                <?}?>
                </select>
                            
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tahun</label>
                        <div class="col-xs-8">
                            <select name="url4" id="url4" class="form-control">
                  <option value="">-- Select One --</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                </select>
                        </div>
                    </div>
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Buat Laporan</button>
                </div>

            </form>

            </div>
            </div>

        </div>