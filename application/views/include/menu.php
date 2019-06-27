<li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url().'welcome/index/'.$this->session->userdata('kd_kab').'/'.date('Y')?>">

          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
  



  <!--Akses Menu Untuk Admin-->
  <?php // if($this->session->userdata('level')>'3'):
  ?>
     <!-- Nav Item - Dashboard -->
      

      <!-- Heading -->
      <div class="sidebar-heading">
        Referensi
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseone" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Referensi</span>
        </a>
        <div id="collapseone" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="<?echo base_url('profil'); ?>">Profil</a>
            <a class="collapse-item" href="<?echo base_url('m_pasien'); ?>">Master Pasien</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-user fa-cog"></i>
          <span>Pengelolaan Akun</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="<?echo base_url('user'); ?>">Register User</a>
            <a class="collapse-item" href="<?echo base_url('user/read/'.$this->session->userdata('ses_id')); ?>">My Account</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
     <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>-->

      <!-- Divider -->
      <hr class="sidebar-divider">

     
  <!--Akses Menu Untuk Dosen-->
  
  <?php // endif;
  ?>
 
   <!-- Heading -->
      <div class="sidebar-heading">
        Laporan
      </div>

       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapselap" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-table"></i>
          <span>Laporan</span>
        </a>
        <div id="collapselap" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="<?echo site_url('kepadatan/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">1 Kepadatan Penduduk</a>
             <a class="collapse-item" href="<?echo site_url('umur/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">2 Kelompok Umur</a>
             <a class="collapse-item" href="<?echo site_url('melek_huruf/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">3 Melek Huruf</a>
             <a class="collapse-item" href="<?echo site_url('sarana_kesehatan/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">4 Sarana Kesehatan</a>
             <a class="collapse-item" href="<?echo site_url('kunjungan_faskes/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">5 Kunjungan Faskes</a>
             <a class="collapse-item" href="<?echo site_url('gadar/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">6 Pelayanan Gawat Darurat</a>
             <a class="collapse-item" href="<?echo site_url('angka_kematian/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">7 Angka Kematian</a>
             <a class="collapse-item" href="<?echo site_url('indikator_kinerja/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">8 Indikator Kinerja</a>
             <a class="collapse-item" href="<?echo site_url('vaksin_esensial/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">9 Ketersediaan Vaksin Esensial</a>
             <a class="collapse-item" href="<?echo site_url('posyandu/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">10 Posyandu dan Posbindu</a>
             <a class="collapse-item" href="<?echo site_url('nakes/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">11 - 16 Tenaga Kesehatan</a>
             <a class="collapse-item" href="<?echo site_url('jkn/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">17 Jaminan Kesehatan</a>
             <a class="collapse-item" href="<?echo site_url('dana_desa/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">18 Pemanfaatan Dana Desa</a>
             <a class="collapse-item" href="<?echo site_url('anggaran/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">19 Anggaran Kesehatan</a>
             <a class="collapse-item" href="<?echo site_url('kelahiran/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">20 - 29 Angka Kelahiran</a>
             <a class="collapse-item" href="<?echo site_url('kesehatan_anak/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">30 - 45 Kesehatan Anak</a>
             <a class="collapse-item" href="<?echo site_url('gilut/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">46 - 47 Kesehatan Gigi & Mulut</a>
             <a class="collapse-item" href="<?echo site_url('usia_produktif/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">48 - 49 Kesehatan Usia Produktif</a>
             <a class="collapse-item" href="<?echo site_url('penyakit_menular/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">50 - 60 Penyakit Menular</a>
             <a class="collapse-item" href="<?echo site_url('aids/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">54 - 55 Kasus AIDS</a>
             <a class="collapse-item" href="<?echo site_url('dapat_dicegah/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">61 - 63 Penyakit Dapat Dicegah</a>
             <a class="collapse-item" href="<?echo site_url('klb/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">64 KLB</a>
             <a class="collapse-item" href="<?echo site_url('tular_vektor/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">65-67 Tular Vektor</a>
             <a class="collapse-item" href="<?echo site_url('ptm/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">68-71 Penyakit Tidak Menular</a>
             <a class="collapse-item" href="<?echo site_url('kesling/view/'.$this->session->userdata('kd_kab').'/'.date('Y'));?>">72-77 Kesehatan Lingkungan</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Data</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="<?echo site_url('kepadatan');?>">1 Kepadatan Penduduk</a>
             <a class="collapse-item" href="<?echo site_url('umur');?>">2 Kelompok Umur</a>
             <a class="collapse-item" href="<?echo site_url('melek_huruf');?>">3 Melek Huruf</a>
             <a class="collapse-item" href="<?echo site_url('sarana_kesehatan');?>">4 Sarana Kesehatan</a>
             <a class="collapse-item" href="<?echo site_url('kunjungan_faskes');?>">5 Kunjungan Faskes</a>
             <a class="collapse-item" href="<?echo site_url('gadar');?>">6 Pelayanan Gawat Darurat</a>
             <a class="collapse-item" href="<?echo site_url('angka_kematian');?>">7 Angka Kematian</a>
             <a class="collapse-item" href="<?echo site_url('indikator_kinerja');?>">8 Indikator Kinerja</a>
             <a class="collapse-item" href="<?echo site_url('vaksin_esensial');?>">9 Ketersediaan Vaksin Esensial</a>
             <a class="collapse-item" href="<?echo site_url('posyandu');?>">10 Posyandu dan Posbindu</a>
             <a class="collapse-item" href="<?echo site_url('nakes');?>">11 - 16 Tenaga Kesehatan</a>
             <a class="collapse-item" href="<?echo site_url('jkn');?>">17 Jaminan Kesehatan</a>
             <a class="collapse-item" href="<?echo site_url('dana_desa');?>">18 Pemanfaatan Dana Desa</a>
             <a class="collapse-item" href="<?echo site_url('anggaran');?>">19 Anggaran Kesehatan</a>
             <a class="collapse-item" href="<?echo site_url('kelahiran');?>">20 - 29 Angka Kelahiran</a>
             <a class="collapse-item" href="<?echo site_url('kesehatan_anak');?>">30 - 45 Kesehatan Anak</a>
             <a class="collapse-item" href="<?echo site_url('gilut');?>">46 - 47 Kesehatan Gigi & Mulut</a>
             <a class="collapse-item" href="<?echo site_url('usia_produktif');?>">48 - 49 Kesehatan Usia Produktif</a>
             <a class="collapse-item" href="<?echo site_url('penyakit_menular');?>">50 - 60 Penyakit Menular</a>
             <a class="collapse-item" href="<?echo site_url('aids');?>">54 - 55 Kasus AIDS</a>
             <a class="collapse-item" href="<?echo site_url('dapat_dicegah');?>">61 - 63 Penyakit Dapat Dicegah</a>
             <a class="collapse-item" href="<?echo site_url('klb');?>">64 KLB</a>
             <a class="collapse-item" href="<?echo site_url('tular_vektor');?>">65-67 Tular Vektor</a>
             <a class="collapse-item" href="<?echo site_url('ptm');?>">68-71 Penyakit Tidak Menular</a>
             <a class="collapse-item" href="<?echo site_url('kesling');?>">72-77 Kesehatan Lingkungan</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts 
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>-->
      <li class="nav-item">
        <a class="nav-link" href="<?echo site_url('log');?>">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Log</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-question-circle"></i>
          <span>Help</span></a>
      </li>

      <!-- Nav Item - Tables 
     
  
    <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'index.php/login/logout'?>"><span>Sign Out</span></a></li>-->
  



