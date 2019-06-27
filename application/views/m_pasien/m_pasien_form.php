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
        <h2 style="margin-top:0px">M_pasien <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">NOMR <?php echo form_error('NOMR') ?></label>
            <input type="text" class="form-control" name="NOMR" id="NOMR" placeholder="NOMR" value="<?php echo $NOMR; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">TITLE <?php echo form_error('TITLE') ?></label>
            <input type="text" class="form-control" name="TITLE" id="TITLE" placeholder="TITLE" value="<?php echo $TITLE; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NAMA <?php echo form_error('NAMA') ?></label>
            <input type="text" class="form-control" name="NAMA" id="NAMA" placeholder="NAMA" value="<?php echo $NAMA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">TEMPAT <?php echo form_error('TEMPAT') ?></label>
            <input type="text" class="form-control" name="TEMPAT" id="TEMPAT" placeholder="TEMPAT" value="<?php echo $TEMPAT; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">TGLLAHIR <?php echo form_error('TGLLAHIR') ?></label>
            <input type="text" class="form-control" name="TGLLAHIR" id="TGLLAHIR" placeholder="TGLLAHIR" value="<?php echo $TGLLAHIR; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">JENISKELAMIN <?php echo form_error('JENISKELAMIN') ?></label>
            <input type="text" class="form-control" name="JENISKELAMIN" id="JENISKELAMIN" placeholder="JENISKELAMIN" value="<?php echo $JENISKELAMIN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">ALAMAT <?php echo form_error('ALAMAT') ?></label>
            <input type="text" class="form-control" name="ALAMAT" id="ALAMAT" placeholder="ALAMAT" value="<?php echo $ALAMAT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KELURAHAN <?php echo form_error('KELURAHAN') ?></label>
            <input type="text" class="form-control" name="KELURAHAN" id="KELURAHAN" placeholder="KELURAHAN" value="<?php echo $KELURAHAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">KDKECAMATAN <?php echo form_error('KDKECAMATAN') ?></label>
            <input type="text" class="form-control" name="KDKECAMATAN" id="KDKECAMATAN" placeholder="KDKECAMATAN" value="<?php echo $KDKECAMATAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KOTA <?php echo form_error('KOTA') ?></label>
            <input type="text" class="form-control" name="KOTA" id="KOTA" placeholder="KOTA" value="<?php echo $KOTA; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">KDPROVINSI <?php echo form_error('KDPROVINSI') ?></label>
            <input type="text" class="form-control" name="KDPROVINSI" id="KDPROVINSI" placeholder="KDPROVINSI" value="<?php echo $KDPROVINSI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NOTELP <?php echo form_error('NOTELP') ?></label>
            <input type="text" class="form-control" name="NOTELP" id="NOTELP" placeholder="NOTELP" value="<?php echo $NOTELP; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NOKTP <?php echo form_error('NOKTP') ?></label>
            <input type="text" class="form-control" name="NOKTP" id="NOKTP" placeholder="NOKTP" value="<?php echo $NOKTP; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">SUAMI ORTU <?php echo form_error('SUAMI_ORTU') ?></label>
            <input type="text" class="form-control" name="SUAMI_ORTU" id="SUAMI_ORTU" placeholder="SUAMI ORTU" value="<?php echo $SUAMI_ORTU; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PEKERJAAN <?php echo form_error('PEKERJAAN') ?></label>
            <input type="text" class="form-control" name="PEKERJAAN" id="PEKERJAAN" placeholder="PEKERJAAN" value="<?php echo $PEKERJAAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">STATUS <?php echo form_error('STATUS') ?></label>
            <input type="text" class="form-control" name="STATUS" id="STATUS" placeholder="STATUS" value="<?php echo $STATUS; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">AGAMA <?php echo form_error('AGAMA') ?></label>
            <input type="text" class="form-control" name="AGAMA" id="AGAMA" placeholder="AGAMA" value="<?php echo $AGAMA; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">PENDIDIKAN <?php echo form_error('PENDIDIKAN') ?></label>
            <input type="text" class="form-control" name="PENDIDIKAN" id="PENDIDIKAN" placeholder="PENDIDIKAN" value="<?php echo $PENDIDIKAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">KDCARABAYAR <?php echo form_error('KDCARABAYAR') ?></label>
            <input type="text" class="form-control" name="KDCARABAYAR" id="KDCARABAYAR" placeholder="KDCARABAYAR" value="<?php echo $KDCARABAYAR; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NIP <?php echo form_error('NIP') ?></label>
            <input type="text" class="form-control" name="NIP" id="NIP" placeholder="NIP" value="<?php echo $NIP; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">TGLDAFTAR <?php echo form_error('TGLDAFTAR') ?></label>
            <input type="text" class="form-control" name="TGLDAFTAR" id="TGLDAFTAR" placeholder="TGLDAFTAR" value="<?php echo $TGLDAFTAR; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">ALAMAT KTP <?php echo form_error('ALAMAT_KTP') ?></label>
            <input type="text" class="form-control" name="ALAMAT_KTP" id="ALAMAT_KTP" placeholder="ALAMAT KTP" value="<?php echo $ALAMAT_KTP; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PARENT NOMR <?php echo form_error('PARENT_NOMR') ?></label>
            <input type="text" class="form-control" name="PARENT_NOMR" id="PARENT_NOMR" placeholder="PARENT NOMR" value="<?php echo $PARENT_NOMR; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NAMA OBAT <?php echo form_error('NAMA_OBAT') ?></label>
            <input type="text" class="form-control" name="NAMA_OBAT" id="NAMA_OBAT" placeholder="NAMA OBAT" value="<?php echo $NAMA_OBAT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">DOSIS <?php echo form_error('DOSIS') ?></label>
            <input type="text" class="form-control" name="DOSIS" id="DOSIS" placeholder="DOSIS" value="<?php echo $DOSIS; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">CARA PEMBERIAN <?php echo form_error('CARA_PEMBERIAN') ?></label>
            <input type="text" class="form-control" name="CARA_PEMBERIAN" id="CARA_PEMBERIAN" placeholder="CARA PEMBERIAN" value="<?php echo $CARA_PEMBERIAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">FREKUENSI <?php echo form_error('FREKUENSI') ?></label>
            <input type="text" class="form-control" name="FREKUENSI" id="FREKUENSI" placeholder="FREKUENSI" value="<?php echo $FREKUENSI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">WAKTU TGL <?php echo form_error('WAKTU_TGL') ?></label>
            <input type="text" class="form-control" name="WAKTU_TGL" id="WAKTU_TGL" placeholder="WAKTU TGL" value="<?php echo $WAKTU_TGL; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">LAMA WAKTU <?php echo form_error('LAMA_WAKTU') ?></label>
            <input type="text" class="form-control" name="LAMA_WAKTU" id="LAMA_WAKTU" placeholder="LAMA WAKTU" value="<?php echo $LAMA_WAKTU; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">ALERGI OBAT <?php echo form_error('ALERGI_OBAT') ?></label>
            <input type="text" class="form-control" name="ALERGI_OBAT" id="ALERGI_OBAT" placeholder="ALERGI OBAT" value="<?php echo $ALERGI_OBAT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">REAKSI ALERGI <?php echo form_error('REAKSI_ALERGI') ?></label>
            <input type="text" class="form-control" name="REAKSI_ALERGI" id="REAKSI_ALERGI" placeholder="REAKSI ALERGI" value="<?php echo $REAKSI_ALERGI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">RIWAYAT KES <?php echo form_error('RIWAYAT_KES') ?></label>
            <input type="text" class="form-control" name="RIWAYAT_KES" id="RIWAYAT_KES" placeholder="RIWAYAT KES" value="<?php echo $RIWAYAT_KES; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">BB LAHIR <?php echo form_error('BB_LAHIR') ?></label>
            <input type="text" class="form-control" name="BB_LAHIR" id="BB_LAHIR" placeholder="BB LAHIR" value="<?php echo $BB_LAHIR; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">BB SEKARANG <?php echo form_error('BB_SEKARANG') ?></label>
            <input type="text" class="form-control" name="BB_SEKARANG" id="BB_SEKARANG" placeholder="BB SEKARANG" value="<?php echo $BB_SEKARANG; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">FISIK FONTANEL <?php echo form_error('FISIK_FONTANEL') ?></label>
            <input type="text" class="form-control" name="FISIK_FONTANEL" id="FISIK_FONTANEL" placeholder="FISIK FONTANEL" value="<?php echo $FISIK_FONTANEL; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">FISIK REFLEKS <?php echo form_error('FISIK_REFLEKS') ?></label>
            <input type="text" class="form-control" name="FISIK_REFLEKS" id="FISIK_REFLEKS" placeholder="FISIK REFLEKS" value="<?php echo $FISIK_REFLEKS; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">FISIK SENSASI <?php echo form_error('FISIK_SENSASI') ?></label>
            <input type="text" class="form-control" name="FISIK_SENSASI" id="FISIK_SENSASI" placeholder="FISIK SENSASI" value="<?php echo $FISIK_SENSASI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MOTORIK KASAR <?php echo form_error('MOTORIK_KASAR') ?></label>
            <input type="text" class="form-control" name="MOTORIK_KASAR" id="MOTORIK_KASAR" placeholder="MOTORIK KASAR" value="<?php echo $MOTORIK_KASAR; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MOTORIK HALUS <?php echo form_error('MOTORIK_HALUS') ?></label>
            <input type="text" class="form-control" name="MOTORIK_HALUS" id="MOTORIK_HALUS" placeholder="MOTORIK HALUS" value="<?php echo $MOTORIK_HALUS; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MAMPU BICARA <?php echo form_error('MAMPU_BICARA') ?></label>
            <input type="text" class="form-control" name="MAMPU_BICARA" id="MAMPU_BICARA" placeholder="MAMPU BICARA" value="<?php echo $MAMPU_BICARA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MAMPU SOSIALISASI <?php echo form_error('MAMPU_SOSIALISASI') ?></label>
            <input type="text" class="form-control" name="MAMPU_SOSIALISASI" id="MAMPU_SOSIALISASI" placeholder="MAMPU SOSIALISASI" value="<?php echo $MAMPU_SOSIALISASI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">BCG <?php echo form_error('BCG') ?></label>
            <input type="text" class="form-control" name="BCG" id="BCG" placeholder="BCG" value="<?php echo $BCG; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">POLIO <?php echo form_error('POLIO') ?></label>
            <input type="text" class="form-control" name="POLIO" id="POLIO" placeholder="POLIO" value="<?php echo $POLIO; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">DPT <?php echo form_error('DPT') ?></label>
            <input type="text" class="form-control" name="DPT" id="DPT" placeholder="DPT" value="<?php echo $DPT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">CAMPAK <?php echo form_error('CAMPAK') ?></label>
            <input type="text" class="form-control" name="CAMPAK" id="CAMPAK" placeholder="CAMPAK" value="<?php echo $CAMPAK; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">HEPATITIS B <?php echo form_error('HEPATITIS_B') ?></label>
            <input type="text" class="form-control" name="HEPATITIS_B" id="HEPATITIS_B" placeholder="HEPATITIS B" value="<?php echo $HEPATITIS_B; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">TD <?php echo form_error('TD') ?></label>
            <input type="text" class="form-control" name="TD" id="TD" placeholder="TD" value="<?php echo $TD; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">SUHU <?php echo form_error('SUHU') ?></label>
            <input type="text" class="form-control" name="SUHU" id="SUHU" placeholder="SUHU" value="<?php echo $SUHU; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">RR <?php echo form_error('RR') ?></label>
            <input type="text" class="form-control" name="RR" id="RR" placeholder="RR" value="<?php echo $RR; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NADI <?php echo form_error('NADI') ?></label>
            <input type="text" class="form-control" name="NADI" id="NADI" placeholder="NADI" value="<?php echo $NADI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">BB <?php echo form_error('BB') ?></label>
            <input type="text" class="form-control" name="BB" id="BB" placeholder="BB" value="<?php echo $BB; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">TB <?php echo form_error('TB') ?></label>
            <input type="text" class="form-control" name="TB" id="TB" placeholder="TB" value="<?php echo $TB; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">EYE <?php echo form_error('EYE') ?></label>
            <input type="text" class="form-control" name="EYE" id="EYE" placeholder="EYE" value="<?php echo $EYE; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MOTORIK <?php echo form_error('MOTORIK') ?></label>
            <input type="text" class="form-control" name="MOTORIK" id="MOTORIK" placeholder="MOTORIK" value="<?php echo $MOTORIK; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">VERBAL <?php echo form_error('VERBAL') ?></label>
            <input type="text" class="form-control" name="VERBAL" id="VERBAL" placeholder="VERBAL" value="<?php echo $VERBAL; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">TOTAL GCS <?php echo form_error('TOTAL_GCS') ?></label>
            <input type="text" class="form-control" name="TOTAL_GCS" id="TOTAL_GCS" placeholder="TOTAL GCS" value="<?php echo $TOTAL_GCS; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">REAKSI PUPIL <?php echo form_error('REAKSI_PUPIL') ?></label>
            <input type="text" class="form-control" name="REAKSI_PUPIL" id="REAKSI_PUPIL" placeholder="REAKSI PUPIL" value="<?php echo $REAKSI_PUPIL; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KESADARAN <?php echo form_error('KESADARAN') ?></label>
            <input type="text" class="form-control" name="KESADARAN" id="KESADARAN" placeholder="KESADARAN" value="<?php echo $KESADARAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KEPALA <?php echo form_error('KEPALA') ?></label>
            <input type="text" class="form-control" name="KEPALA" id="KEPALA" placeholder="KEPALA" value="<?php echo $KEPALA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">RAMBUT <?php echo form_error('RAMBUT') ?></label>
            <input type="text" class="form-control" name="RAMBUT" id="RAMBUT" placeholder="RAMBUT" value="<?php echo $RAMBUT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MUKA <?php echo form_error('MUKA') ?></label>
            <input type="text" class="form-control" name="MUKA" id="MUKA" placeholder="MUKA" value="<?php echo $MUKA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MATA <?php echo form_error('MATA') ?></label>
            <input type="text" class="form-control" name="MATA" id="MATA" placeholder="MATA" value="<?php echo $MATA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">GANG LIHAT <?php echo form_error('GANG_LIHAT') ?></label>
            <input type="text" class="form-control" name="GANG_LIHAT" id="GANG_LIHAT" placeholder="GANG LIHAT" value="<?php echo $GANG_LIHAT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">ALATBANTU LIHAT <?php echo form_error('ALATBANTU_LIHAT') ?></label>
            <input type="text" class="form-control" name="ALATBANTU_LIHAT" id="ALATBANTU_LIHAT" placeholder="ALATBANTU LIHAT" value="<?php echo $ALATBANTU_LIHAT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">BENTUK <?php echo form_error('BENTUK') ?></label>
            <input type="text" class="form-control" name="BENTUK" id="BENTUK" placeholder="BENTUK" value="<?php echo $BENTUK; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PENDENGARAN <?php echo form_error('PENDENGARAN') ?></label>
            <input type="text" class="form-control" name="PENDENGARAN" id="PENDENGARAN" placeholder="PENDENGARAN" value="<?php echo $PENDENGARAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">LUB TELINGA <?php echo form_error('LUB_TELINGA') ?></label>
            <input type="text" class="form-control" name="LUB_TELINGA" id="LUB_TELINGA" placeholder="LUB TELINGA" value="<?php echo $LUB_TELINGA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">BENTUK HIDUNG <?php echo form_error('BENTUK_HIDUNG') ?></label>
            <input type="text" class="form-control" name="BENTUK_HIDUNG" id="BENTUK_HIDUNG" placeholder="BENTUK HIDUNG" value="<?php echo $BENTUK_HIDUNG; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MEMBRAN MUK <?php echo form_error('MEMBRAN_MUK') ?></label>
            <input type="text" class="form-control" name="MEMBRAN_MUK" id="MEMBRAN_MUK" placeholder="MEMBRAN MUK" value="<?php echo $MEMBRAN_MUK; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MAMPU HIDU <?php echo form_error('MAMPU_HIDU') ?></label>
            <input type="text" class="form-control" name="MAMPU_HIDU" id="MAMPU_HIDU" placeholder="MAMPU HIDU" value="<?php echo $MAMPU_HIDU; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">ALAT HIDUNG <?php echo form_error('ALAT_HIDUNG') ?></label>
            <input type="text" class="form-control" name="ALAT_HIDUNG" id="ALAT_HIDUNG" placeholder="ALAT HIDUNG" value="<?php echo $ALAT_HIDUNG; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">RONGGA MULUT <?php echo form_error('RONGGA_MULUT') ?></label>
            <input type="text" class="form-control" name="RONGGA_MULUT" id="RONGGA_MULUT" placeholder="RONGGA MULUT" value="<?php echo $RONGGA_MULUT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">WARNA MEMBRAN <?php echo form_error('WARNA_MEMBRAN') ?></label>
            <input type="text" class="form-control" name="WARNA_MEMBRAN" id="WARNA_MEMBRAN" placeholder="WARNA MEMBRAN" value="<?php echo $WARNA_MEMBRAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">LEMBAB <?php echo form_error('LEMBAB') ?></label>
            <input type="text" class="form-control" name="LEMBAB" id="LEMBAB" placeholder="LEMBAB" value="<?php echo $LEMBAB; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">STOMATITIS <?php echo form_error('STOMATITIS') ?></label>
            <input type="text" class="form-control" name="STOMATITIS" id="STOMATITIS" placeholder="STOMATITIS" value="<?php echo $STOMATITIS; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">LIDAH <?php echo form_error('LIDAH') ?></label>
            <input type="text" class="form-control" name="LIDAH" id="LIDAH" placeholder="LIDAH" value="<?php echo $LIDAH; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">GIGI <?php echo form_error('GIGI') ?></label>
            <input type="text" class="form-control" name="GIGI" id="GIGI" placeholder="GIGI" value="<?php echo $GIGI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">TONSIL <?php echo form_error('TONSIL') ?></label>
            <input type="text" class="form-control" name="TONSIL" id="TONSIL" placeholder="TONSIL" value="<?php echo $TONSIL; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KELAINAN <?php echo form_error('KELAINAN') ?></label>
            <input type="text" class="form-control" name="KELAINAN" id="KELAINAN" placeholder="KELAINAN" value="<?php echo $KELAINAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PERGERAKAN <?php echo form_error('PERGERAKAN') ?></label>
            <input type="text" class="form-control" name="PERGERAKAN" id="PERGERAKAN" placeholder="PERGERAKAN" value="<?php echo $PERGERAKAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KEL TIROID <?php echo form_error('KEL_TIROID') ?></label>
            <input type="text" class="form-control" name="KEL_TIROID" id="KEL_TIROID" placeholder="KEL TIROID" value="<?php echo $KEL_TIROID; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KEL GETAH <?php echo form_error('KEL_GETAH') ?></label>
            <input type="text" class="form-control" name="KEL_GETAH" id="KEL_GETAH" placeholder="KEL GETAH" value="<?php echo $KEL_GETAH; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">TEKANAN VENA <?php echo form_error('TEKANAN_VENA') ?></label>
            <input type="text" class="form-control" name="TEKANAN_VENA" id="TEKANAN_VENA" placeholder="TEKANAN VENA" value="<?php echo $TEKANAN_VENA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">REF MENELAN <?php echo form_error('REF_MENELAN') ?></label>
            <input type="text" class="form-control" name="REF_MENELAN" id="REF_MENELAN" placeholder="REF MENELAN" value="<?php echo $REF_MENELAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NYERI <?php echo form_error('NYERI') ?></label>
            <input type="text" class="form-control" name="NYERI" id="NYERI" placeholder="NYERI" value="<?php echo $NYERI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KREPITASI <?php echo form_error('KREPITASI') ?></label>
            <input type="text" class="form-control" name="KREPITASI" id="KREPITASI" placeholder="KREPITASI" value="<?php echo $KREPITASI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KEL LAIN <?php echo form_error('KEL_LAIN') ?></label>
            <input type="text" class="form-control" name="KEL_LAIN" id="KEL_LAIN" placeholder="KEL LAIN" value="<?php echo $KEL_LAIN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">BENTUK DADA <?php echo form_error('BENTUK_DADA') ?></label>
            <input type="text" class="form-control" name="BENTUK_DADA" id="BENTUK_DADA" placeholder="BENTUK DADA" value="<?php echo $BENTUK_DADA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">POLA NAPAS <?php echo form_error('POLA_NAPAS') ?></label>
            <input type="text" class="form-control" name="POLA_NAPAS" id="POLA_NAPAS" placeholder="POLA NAPAS" value="<?php echo $POLA_NAPAS; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">BENTUK THORAKS <?php echo form_error('BENTUK_THORAKS') ?></label>
            <input type="text" class="form-control" name="BENTUK_THORAKS" id="BENTUK_THORAKS" placeholder="BENTUK THORAKS" value="<?php echo $BENTUK_THORAKS; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PAL KREP <?php echo form_error('PAL_KREP') ?></label>
            <input type="text" class="form-control" name="PAL_KREP" id="PAL_KREP" placeholder="PAL KREP" value="<?php echo $PAL_KREP; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">BENJOLAN <?php echo form_error('BENJOLAN') ?></label>
            <input type="text" class="form-control" name="BENJOLAN" id="BENJOLAN" placeholder="BENJOLAN" value="<?php echo $BENJOLAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PAL NYERI <?php echo form_error('PAL_NYERI') ?></label>
            <input type="text" class="form-control" name="PAL_NYERI" id="PAL_NYERI" placeholder="PAL NYERI" value="<?php echo $PAL_NYERI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PERKUSI <?php echo form_error('PERKUSI') ?></label>
            <input type="text" class="form-control" name="PERKUSI" id="PERKUSI" placeholder="PERKUSI" value="<?php echo $PERKUSI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PARU <?php echo form_error('PARU') ?></label>
            <input type="text" class="form-control" name="PARU" id="PARU" placeholder="PARU" value="<?php echo $PARU; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">JANTUNG <?php echo form_error('JANTUNG') ?></label>
            <input type="text" class="form-control" name="JANTUNG" id="JANTUNG" placeholder="JANTUNG" value="<?php echo $JANTUNG; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">SUARA JANTUNG <?php echo form_error('SUARA_JANTUNG') ?></label>
            <input type="text" class="form-control" name="SUARA_JANTUNG" id="SUARA_JANTUNG" placeholder="SUARA JANTUNG" value="<?php echo $SUARA_JANTUNG; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">ALATBANTU JAN <?php echo form_error('ALATBANTU_JAN') ?></label>
            <input type="text" class="form-control" name="ALATBANTU_JAN" id="ALATBANTU_JAN" placeholder="ALATBANTU JAN" value="<?php echo $ALATBANTU_JAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">BENTUK ABDOMEN <?php echo form_error('BENTUK_ABDOMEN') ?></label>
            <input type="text" class="form-control" name="BENTUK_ABDOMEN" id="BENTUK_ABDOMEN" placeholder="BENTUK ABDOMEN" value="<?php echo $BENTUK_ABDOMEN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">AUSKULTASI <?php echo form_error('AUSKULTASI') ?></label>
            <input type="text" class="form-control" name="AUSKULTASI" id="AUSKULTASI" placeholder="AUSKULTASI" value="<?php echo $AUSKULTASI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NYERI PASI <?php echo form_error('NYERI_PASI') ?></label>
            <input type="text" class="form-control" name="NYERI_PASI" id="NYERI_PASI" placeholder="NYERI PASI" value="<?php echo $NYERI_PASI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PEM KELENJAR <?php echo form_error('PEM_KELENJAR') ?></label>
            <input type="text" class="form-control" name="PEM_KELENJAR" id="PEM_KELENJAR" placeholder="PEM KELENJAR" value="<?php echo $PEM_KELENJAR; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PERKUSI AUS <?php echo form_error('PERKUSI_AUS') ?></label>
            <input type="text" class="form-control" name="PERKUSI_AUS" id="PERKUSI_AUS" placeholder="PERKUSI AUS" value="<?php echo $PERKUSI_AUS; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">VAGINA <?php echo form_error('VAGINA') ?></label>
            <input type="text" class="form-control" name="VAGINA" id="VAGINA" placeholder="VAGINA" value="<?php echo $VAGINA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MENSTRUASI <?php echo form_error('MENSTRUASI') ?></label>
            <input type="text" class="form-control" name="MENSTRUASI" id="MENSTRUASI" placeholder="MENSTRUASI" value="<?php echo $MENSTRUASI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KATETER <?php echo form_error('KATETER') ?></label>
            <input type="text" class="form-control" name="KATETER" id="KATETER" placeholder="KATETER" value="<?php echo $KATETER; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">LABIA PROM <?php echo form_error('LABIA_PROM') ?></label>
            <input type="text" class="form-control" name="LABIA_PROM" id="LABIA_PROM" placeholder="LABIA PROM" value="<?php echo $LABIA_PROM; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">HAMIL <?php echo form_error('HAMIL') ?></label>
            <input type="text" class="form-control" name="HAMIL" id="HAMIL" placeholder="HAMIL" value="<?php echo $HAMIL; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">TGL HAID <?php echo form_error('TGL_HAID') ?></label>
            <input type="text" class="form-control" name="TGL_HAID" id="TGL_HAID" placeholder="TGL HAID" value="<?php echo $TGL_HAID; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PERIKSA CERVIX <?php echo form_error('PERIKSA_CERVIX') ?></label>
            <input type="text" class="form-control" name="PERIKSA_CERVIX" id="PERIKSA_CERVIX" placeholder="PERIKSA CERVIX" value="<?php echo $PERIKSA_CERVIX; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">BENTUK PAYUDARA <?php echo form_error('BENTUK_PAYUDARA') ?></label>
            <input type="text" class="form-control" name="BENTUK_PAYUDARA" id="BENTUK_PAYUDARA" placeholder="BENTUK PAYUDARA" value="<?php echo $BENTUK_PAYUDARA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KENYAL <?php echo form_error('KENYAL') ?></label>
            <input type="text" class="form-control" name="KENYAL" id="KENYAL" placeholder="KENYAL" value="<?php echo $KENYAL; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MASSA <?php echo form_error('MASSA') ?></label>
            <input type="text" class="form-control" name="MASSA" id="MASSA" placeholder="MASSA" value="<?php echo $MASSA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NYERI RABA <?php echo form_error('NYERI_RABA') ?></label>
            <input type="text" class="form-control" name="NYERI_RABA" id="NYERI_RABA" placeholder="NYERI RABA" value="<?php echo $NYERI_RABA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">BENTUK PUTING <?php echo form_error('BENTUK_PUTING') ?></label>
            <input type="text" class="form-control" name="BENTUK_PUTING" id="BENTUK_PUTING" placeholder="BENTUK PUTING" value="<?php echo $BENTUK_PUTING; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MAMMO <?php echo form_error('MAMMO') ?></label>
            <input type="text" class="form-control" name="MAMMO" id="MAMMO" placeholder="MAMMO" value="<?php echo $MAMMO; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">ALAT KONTRASEPSI <?php echo form_error('ALAT_KONTRASEPSI') ?></label>
            <input type="text" class="form-control" name="ALAT_KONTRASEPSI" id="ALAT_KONTRASEPSI" placeholder="ALAT KONTRASEPSI" value="<?php echo $ALAT_KONTRASEPSI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MASALAH SEKS <?php echo form_error('MASALAH_SEKS') ?></label>
            <input type="text" class="form-control" name="MASALAH_SEKS" id="MASALAH_SEKS" placeholder="MASALAH SEKS" value="<?php echo $MASALAH_SEKS; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PREPUTIUM <?php echo form_error('PREPUTIUM') ?></label>
            <input type="text" class="form-control" name="PREPUTIUM" id="PREPUTIUM" placeholder="PREPUTIUM" value="<?php echo $PREPUTIUM; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MASALAH PROSTAT <?php echo form_error('MASALAH_PROSTAT') ?></label>
            <input type="text" class="form-control" name="MASALAH_PROSTAT" id="MASALAH_PROSTAT" placeholder="MASALAH PROSTAT" value="<?php echo $MASALAH_PROSTAT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">BENTUK SKROTUM <?php echo form_error('BENTUK_SKROTUM') ?></label>
            <input type="text" class="form-control" name="BENTUK_SKROTUM" id="BENTUK_SKROTUM" placeholder="BENTUK SKROTUM" value="<?php echo $BENTUK_SKROTUM; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">TESTIS <?php echo form_error('TESTIS') ?></label>
            <input type="text" class="form-control" name="TESTIS" id="TESTIS" placeholder="TESTIS" value="<?php echo $TESTIS; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MASSA BEN <?php echo form_error('MASSA_BEN') ?></label>
            <input type="text" class="form-control" name="MASSA_BEN" id="MASSA_BEN" placeholder="MASSA BEN" value="<?php echo $MASSA_BEN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">HERNIASI <?php echo form_error('HERNIASI') ?></label>
            <input type="text" class="form-control" name="HERNIASI" id="HERNIASI" placeholder="HERNIASI" value="<?php echo $HERNIASI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">LAIN2 <?php echo form_error('LAIN2') ?></label>
            <input type="text" class="form-control" name="LAIN2" id="LAIN2" placeholder="LAIN2" value="<?php echo $LAIN2; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">ALAT KONTRA <?php echo form_error('ALAT_KONTRA') ?></label>
            <input type="text" class="form-control" name="ALAT_KONTRA" id="ALAT_KONTRA" placeholder="ALAT KONTRA" value="<?php echo $ALAT_KONTRA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MASALAH REPRO <?php echo form_error('MASALAH_REPRO') ?></label>
            <input type="text" class="form-control" name="MASALAH_REPRO" id="MASALAH_REPRO" placeholder="MASALAH REPRO" value="<?php echo $MASALAH_REPRO; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">EKSTREMITAS ATAS <?php echo form_error('EKSTREMITAS_ATAS') ?></label>
            <input type="text" class="form-control" name="EKSTREMITAS_ATAS" id="EKSTREMITAS_ATAS" placeholder="EKSTREMITAS ATAS" value="<?php echo $EKSTREMITAS_ATAS; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">EKSTREMITAS BAWAH <?php echo form_error('EKSTREMITAS_BAWAH') ?></label>
            <input type="text" class="form-control" name="EKSTREMITAS_BAWAH" id="EKSTREMITAS_BAWAH" placeholder="EKSTREMITAS BAWAH" value="<?php echo $EKSTREMITAS_BAWAH; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">AKTIVITAS <?php echo form_error('AKTIVITAS') ?></label>
            <input type="text" class="form-control" name="AKTIVITAS" id="AKTIVITAS" placeholder="AKTIVITAS" value="<?php echo $AKTIVITAS; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">BERJALAN <?php echo form_error('BERJALAN') ?></label>
            <input type="text" class="form-control" name="BERJALAN" id="BERJALAN" placeholder="BERJALAN" value="<?php echo $BERJALAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">SISTEM INTE <?php echo form_error('SISTEM_INTE') ?></label>
            <input type="text" class="form-control" name="SISTEM_INTE" id="SISTEM_INTE" placeholder="SISTEM INTE" value="<?php echo $SISTEM_INTE; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KENYAMANAN <?php echo form_error('KENYAMANAN') ?></label>
            <input type="text" class="form-control" name="KENYAMANAN" id="KENYAMANAN" placeholder="KENYAMANAN" value="<?php echo $KENYAMANAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KES DIRI <?php echo form_error('KES_DIRI') ?></label>
            <input type="text" class="form-control" name="KES_DIRI" id="KES_DIRI" placeholder="KES DIRI" value="<?php echo $KES_DIRI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">SOS SUPORT <?php echo form_error('SOS_SUPORT') ?></label>
            <input type="text" class="form-control" name="SOS_SUPORT" id="SOS_SUPORT" placeholder="SOS SUPORT" value="<?php echo $SOS_SUPORT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">ANSIETAS <?php echo form_error('ANSIETAS') ?></label>
            <input type="text" class="form-control" name="ANSIETAS" id="ANSIETAS" placeholder="ANSIETAS" value="<?php echo $ANSIETAS; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KEHILANGAN <?php echo form_error('KEHILANGAN') ?></label>
            <input type="text" class="form-control" name="KEHILANGAN" id="KEHILANGAN" placeholder="KEHILANGAN" value="<?php echo $KEHILANGAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">STATUS EMOSI <?php echo form_error('STATUS_EMOSI') ?></label>
            <input type="text" class="form-control" name="STATUS_EMOSI" id="STATUS_EMOSI" placeholder="STATUS EMOSI" value="<?php echo $STATUS_EMOSI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KONSEP DIRI <?php echo form_error('KONSEP_DIRI') ?></label>
            <input type="text" class="form-control" name="KONSEP_DIRI" id="KONSEP_DIRI" placeholder="KONSEP DIRI" value="<?php echo $KONSEP_DIRI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">RESPON HILANG <?php echo form_error('RESPON_HILANG') ?></label>
            <input type="text" class="form-control" name="RESPON_HILANG" id="RESPON_HILANG" placeholder="RESPON HILANG" value="<?php echo $RESPON_HILANG; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">SUMBER STRESS <?php echo form_error('SUMBER_STRESS') ?></label>
            <input type="text" class="form-control" name="SUMBER_STRESS" id="SUMBER_STRESS" placeholder="SUMBER STRESS" value="<?php echo $SUMBER_STRESS; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">BERARTI <?php echo form_error('BERARTI') ?></label>
            <input type="text" class="form-control" name="BERARTI" id="BERARTI" placeholder="BERARTI" value="<?php echo $BERARTI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">TERLIBAT <?php echo form_error('TERLIBAT') ?></label>
            <input type="text" class="form-control" name="TERLIBAT" id="TERLIBAT" placeholder="TERLIBAT" value="<?php echo $TERLIBAT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">HUBUNGAN <?php echo form_error('HUBUNGAN') ?></label>
            <input type="text" class="form-control" name="HUBUNGAN" id="HUBUNGAN" placeholder="HUBUNGAN" value="<?php echo $HUBUNGAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KOMUNIKASI <?php echo form_error('KOMUNIKASI') ?></label>
            <input type="text" class="form-control" name="KOMUNIKASI" id="KOMUNIKASI" placeholder="KOMUNIKASI" value="<?php echo $KOMUNIKASI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KEPUTUSAN <?php echo form_error('KEPUTUSAN') ?></label>
            <input type="text" class="form-control" name="KEPUTUSAN" id="KEPUTUSAN" placeholder="KEPUTUSAN" value="<?php echo $KEPUTUSAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MENGASUH <?php echo form_error('MENGASUH') ?></label>
            <input type="text" class="form-control" name="MENGASUH" id="MENGASUH" placeholder="MENGASUH" value="<?php echo $MENGASUH; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">DUKUNGAN <?php echo form_error('DUKUNGAN') ?></label>
            <input type="text" class="form-control" name="DUKUNGAN" id="DUKUNGAN" placeholder="DUKUNGAN" value="<?php echo $DUKUNGAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">REAKSI <?php echo form_error('REAKSI') ?></label>
            <input type="text" class="form-control" name="REAKSI" id="REAKSI" placeholder="REAKSI" value="<?php echo $REAKSI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">BUDAYA <?php echo form_error('BUDAYA') ?></label>
            <input type="text" class="form-control" name="BUDAYA" id="BUDAYA" placeholder="BUDAYA" value="<?php echo $BUDAYA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">POLA AKTIVITAS <?php echo form_error('POLA_AKTIVITAS') ?></label>
            <input type="text" class="form-control" name="POLA_AKTIVITAS" id="POLA_AKTIVITAS" placeholder="POLA AKTIVITAS" value="<?php echo $POLA_AKTIVITAS; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">POLA ISTIRAHAT <?php echo form_error('POLA_ISTIRAHAT') ?></label>
            <input type="text" class="form-control" name="POLA_ISTIRAHAT" id="POLA_ISTIRAHAT" placeholder="POLA ISTIRAHAT" value="<?php echo $POLA_ISTIRAHAT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">POLA MAKAN <?php echo form_error('POLA_MAKAN') ?></label>
            <input type="text" class="form-control" name="POLA_MAKAN" id="POLA_MAKAN" placeholder="POLA MAKAN" value="<?php echo $POLA_MAKAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PANTANGAN <?php echo form_error('PANTANGAN') ?></label>
            <input type="text" class="form-control" name="PANTANGAN" id="PANTANGAN" placeholder="PANTANGAN" value="<?php echo $PANTANGAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KEPERCAYAAN <?php echo form_error('KEPERCAYAAN') ?></label>
            <input type="text" class="form-control" name="KEPERCAYAAN" id="KEPERCAYAAN" placeholder="KEPERCAYAAN" value="<?php echo $KEPERCAYAAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PANTANGAN HARI <?php echo form_error('PANTANGAN_HARI') ?></label>
            <input type="text" class="form-control" name="PANTANGAN_HARI" id="PANTANGAN_HARI" placeholder="PANTANGAN HARI" value="<?php echo $PANTANGAN_HARI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PANTANGAN LAIN <?php echo form_error('PANTANGAN_LAIN') ?></label>
            <input type="text" class="form-control" name="PANTANGAN_LAIN" id="PANTANGAN_LAIN" placeholder="PANTANGAN LAIN" value="<?php echo $PANTANGAN_LAIN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">ANJURAN <?php echo form_error('ANJURAN') ?></label>
            <input type="text" class="form-control" name="ANJURAN" id="ANJURAN" placeholder="ANJURAN" value="<?php echo $ANJURAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NILAI KEYAKINAN <?php echo form_error('NILAI_KEYAKINAN') ?></label>
            <input type="text" class="form-control" name="NILAI_KEYAKINAN" id="NILAI_KEYAKINAN" placeholder="NILAI KEYAKINAN" value="<?php echo $NILAI_KEYAKINAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KEGIATAN IBADAH <?php echo form_error('KEGIATAN_IBADAH') ?></label>
            <input type="text" class="form-control" name="KEGIATAN_IBADAH" id="KEGIATAN_IBADAH" placeholder="KEGIATAN IBADAH" value="<?php echo $KEGIATAN_IBADAH; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PENG AGAMA <?php echo form_error('PENG_AGAMA') ?></label>
            <input type="text" class="form-control" name="PENG_AGAMA" id="PENG_AGAMA" placeholder="PENG AGAMA" value="<?php echo $PENG_AGAMA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">SPIRIT <?php echo form_error('SPIRIT') ?></label>
            <input type="text" class="form-control" name="SPIRIT" id="SPIRIT" placeholder="SPIRIT" value="<?php echo $SPIRIT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">BANTUAN <?php echo form_error('BANTUAN') ?></label>
            <input type="text" class="form-control" name="BANTUAN" id="BANTUAN" placeholder="BANTUAN" value="<?php echo $BANTUAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PAHAM PENYAKIT <?php echo form_error('PAHAM_PENYAKIT') ?></label>
            <input type="text" class="form-control" name="PAHAM_PENYAKIT" id="PAHAM_PENYAKIT" placeholder="PAHAM PENYAKIT" value="<?php echo $PAHAM_PENYAKIT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PAHAM OBAT <?php echo form_error('PAHAM_OBAT') ?></label>
            <input type="text" class="form-control" name="PAHAM_OBAT" id="PAHAM_OBAT" placeholder="PAHAM OBAT" value="<?php echo $PAHAM_OBAT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PAHAM NUTRISI <?php echo form_error('PAHAM_NUTRISI') ?></label>
            <input type="text" class="form-control" name="PAHAM_NUTRISI" id="PAHAM_NUTRISI" placeholder="PAHAM NUTRISI" value="<?php echo $PAHAM_NUTRISI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PAHAM RAWAT <?php echo form_error('PAHAM_RAWAT') ?></label>
            <input type="text" class="form-control" name="PAHAM_RAWAT" id="PAHAM_RAWAT" placeholder="PAHAM RAWAT" value="<?php echo $PAHAM_RAWAT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">HAMBATAN EDUKASI <?php echo form_error('HAMBATAN_EDUKASI') ?></label>
            <input type="text" class="form-control" name="HAMBATAN_EDUKASI" id="HAMBATAN_EDUKASI" placeholder="HAMBATAN EDUKASI" value="<?php echo $HAMBATAN_EDUKASI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">FREK MAKAN <?php echo form_error('FREK_MAKAN') ?></label>
            <input type="text" class="form-control" name="FREK_MAKAN" id="FREK_MAKAN" placeholder="FREK MAKAN" value="<?php echo $FREK_MAKAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">JUM MAKAN <?php echo form_error('JUM_MAKAN') ?></label>
            <input type="text" class="form-control" name="JUM_MAKAN" id="JUM_MAKAN" placeholder="JUM MAKAN" value="<?php echo $JUM_MAKAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">JEN MAKAN <?php echo form_error('JEN_MAKAN') ?></label>
            <input type="text" class="form-control" name="JEN_MAKAN" id="JEN_MAKAN" placeholder="JEN MAKAN" value="<?php echo $JEN_MAKAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KOM MAKAN <?php echo form_error('KOM_MAKAN') ?></label>
            <input type="text" class="form-control" name="KOM_MAKAN" id="KOM_MAKAN" placeholder="KOM MAKAN" value="<?php echo $KOM_MAKAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">DIET <?php echo form_error('DIET') ?></label>
            <input type="text" class="form-control" name="DIET" id="DIET" placeholder="DIET" value="<?php echo $DIET; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">CARA MAKAN <?php echo form_error('CARA_MAKAN') ?></label>
            <input type="text" class="form-control" name="CARA_MAKAN" id="CARA_MAKAN" placeholder="CARA MAKAN" value="<?php echo $CARA_MAKAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">GANGGUAN <?php echo form_error('GANGGUAN') ?></label>
            <input type="text" class="form-control" name="GANGGUAN" id="GANGGUAN" placeholder="GANGGUAN" value="<?php echo $GANGGUAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">FREK MINUM <?php echo form_error('FREK_MINUM') ?></label>
            <input type="text" class="form-control" name="FREK_MINUM" id="FREK_MINUM" placeholder="FREK MINUM" value="<?php echo $FREK_MINUM; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">JUM MINUM <?php echo form_error('JUM_MINUM') ?></label>
            <input type="text" class="form-control" name="JUM_MINUM" id="JUM_MINUM" placeholder="JUM MINUM" value="<?php echo $JUM_MINUM; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">JEN MINUM <?php echo form_error('JEN_MINUM') ?></label>
            <input type="text" class="form-control" name="JEN_MINUM" id="JEN_MINUM" placeholder="JEN MINUM" value="<?php echo $JEN_MINUM; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">GANG MINUM <?php echo form_error('GANG_MINUM') ?></label>
            <input type="text" class="form-control" name="GANG_MINUM" id="GANG_MINUM" placeholder="GANG MINUM" value="<?php echo $GANG_MINUM; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">FREK BAK <?php echo form_error('FREK_BAK') ?></label>
            <input type="text" class="form-control" name="FREK_BAK" id="FREK_BAK" placeholder="FREK BAK" value="<?php echo $FREK_BAK; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">WARNA BAK <?php echo form_error('WARNA_BAK') ?></label>
            <input type="text" class="form-control" name="WARNA_BAK" id="WARNA_BAK" placeholder="WARNA BAK" value="<?php echo $WARNA_BAK; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">JMLH BAK <?php echo form_error('JMLH_BAK') ?></label>
            <input type="text" class="form-control" name="JMLH_BAK" id="JMLH_BAK" placeholder="JMLH BAK" value="<?php echo $JMLH_BAK; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PENG KAT BAK <?php echo form_error('PENG_KAT_BAK') ?></label>
            <input type="text" class="form-control" name="PENG_KAT_BAK" id="PENG_KAT_BAK" placeholder="PENG KAT BAK" value="<?php echo $PENG_KAT_BAK; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KEM HAN BAK <?php echo form_error('KEM_HAN_BAK') ?></label>
            <input type="text" class="form-control" name="KEM_HAN_BAK" id="KEM_HAN_BAK" placeholder="KEM HAN BAK" value="<?php echo $KEM_HAN_BAK; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">INKONT BAK <?php echo form_error('INKONT_BAK') ?></label>
            <input type="text" class="form-control" name="INKONT_BAK" id="INKONT_BAK" placeholder="INKONT BAK" value="<?php echo $INKONT_BAK; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">DIURESIS BAK <?php echo form_error('DIURESIS_BAK') ?></label>
            <input type="text" class="form-control" name="DIURESIS_BAK" id="DIURESIS_BAK" placeholder="DIURESIS BAK" value="<?php echo $DIURESIS_BAK; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">FREK BAB <?php echo form_error('FREK_BAB') ?></label>
            <input type="text" class="form-control" name="FREK_BAB" id="FREK_BAB" placeholder="FREK BAB" value="<?php echo $FREK_BAB; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">WARNA BAB <?php echo form_error('WARNA_BAB') ?></label>
            <input type="text" class="form-control" name="WARNA_BAB" id="WARNA_BAB" placeholder="WARNA BAB" value="<?php echo $WARNA_BAB; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KONSIST BAB <?php echo form_error('KONSIST_BAB') ?></label>
            <input type="text" class="form-control" name="KONSIST_BAB" id="KONSIST_BAB" placeholder="KONSIST BAB" value="<?php echo $KONSIST_BAB; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">GANG BAB <?php echo form_error('GANG_BAB') ?></label>
            <input type="text" class="form-control" name="GANG_BAB" id="GANG_BAB" placeholder="GANG BAB" value="<?php echo $GANG_BAB; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">STOMA BAB <?php echo form_error('STOMA_BAB') ?></label>
            <input type="text" class="form-control" name="STOMA_BAB" id="STOMA_BAB" placeholder="STOMA BAB" value="<?php echo $STOMA_BAB; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PENG OBAT BAB <?php echo form_error('PENG_OBAT_BAB') ?></label>
            <input type="text" class="form-control" name="PENG_OBAT_BAB" id="PENG_OBAT_BAB" placeholder="PENG OBAT BAB" value="<?php echo $PENG_OBAT_BAB; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">IST SIANG <?php echo form_error('IST_SIANG') ?></label>
            <input type="text" class="form-control" name="IST_SIANG" id="IST_SIANG" placeholder="IST SIANG" value="<?php echo $IST_SIANG; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">IST MALAM <?php echo form_error('IST_MALAM') ?></label>
            <input type="text" class="form-control" name="IST_MALAM" id="IST_MALAM" placeholder="IST MALAM" value="<?php echo $IST_MALAM; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">IST CAHAYA <?php echo form_error('IST_CAHAYA') ?></label>
            <input type="text" class="form-control" name="IST_CAHAYA" id="IST_CAHAYA" placeholder="IST CAHAYA" value="<?php echo $IST_CAHAYA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">IST POSISI <?php echo form_error('IST_POSISI') ?></label>
            <input type="text" class="form-control" name="IST_POSISI" id="IST_POSISI" placeholder="IST POSISI" value="<?php echo $IST_POSISI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">IST LING <?php echo form_error('IST_LING') ?></label>
            <input type="text" class="form-control" name="IST_LING" id="IST_LING" placeholder="IST LING" value="<?php echo $IST_LING; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">IST GANG TIDUR <?php echo form_error('IST_GANG_TIDUR') ?></label>
            <input type="text" class="form-control" name="IST_GANG_TIDUR" id="IST_GANG_TIDUR" placeholder="IST GANG TIDUR" value="<?php echo $IST_GANG_TIDUR; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PENG OBAT IST <?php echo form_error('PENG_OBAT_IST') ?></label>
            <input type="text" class="form-control" name="PENG_OBAT_IST" id="PENG_OBAT_IST" placeholder="PENG OBAT IST" value="<?php echo $PENG_OBAT_IST; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">FREK MAND <?php echo form_error('FREK_MAND') ?></label>
            <input type="text" class="form-control" name="FREK_MAND" id="FREK_MAND" placeholder="FREK MAND" value="<?php echo $FREK_MAND; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">CUC RAMB MAND <?php echo form_error('CUC_RAMB_MAND') ?></label>
            <input type="text" class="form-control" name="CUC_RAMB_MAND" id="CUC_RAMB_MAND" placeholder="CUC RAMB MAND" value="<?php echo $CUC_RAMB_MAND; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">SIH GIGI MAND <?php echo form_error('SIH_GIGI_MAND') ?></label>
            <input type="text" class="form-control" name="SIH_GIGI_MAND" id="SIH_GIGI_MAND" placeholder="SIH GIGI MAND" value="<?php echo $SIH_GIGI_MAND; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">BANT MAND <?php echo form_error('BANT_MAND') ?></label>
            <input type="text" class="form-control" name="BANT_MAND" id="BANT_MAND" placeholder="BANT MAND" value="<?php echo $BANT_MAND; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">GANT PAKAI <?php echo form_error('GANT_PAKAI') ?></label>
            <input type="text" class="form-control" name="GANT_PAKAI" id="GANT_PAKAI" placeholder="GANT PAKAI" value="<?php echo $GANT_PAKAI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PAK CUCI <?php echo form_error('PAK_CUCI') ?></label>
            <input type="text" class="form-control" name="PAK_CUCI" id="PAK_CUCI" placeholder="PAK CUCI" value="<?php echo $PAK_CUCI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PAK BANT <?php echo form_error('PAK_BANT') ?></label>
            <input type="text" class="form-control" name="PAK_BANT" id="PAK_BANT" placeholder="PAK BANT" value="<?php echo $PAK_BANT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">ALT BANT <?php echo form_error('ALT_BANT') ?></label>
            <input type="text" class="form-control" name="ALT_BANT" id="ALT_BANT" placeholder="ALT BANT" value="<?php echo $ALT_BANT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KEMP MUND <?php echo form_error('KEMP_MUND') ?></label>
            <input type="text" class="form-control" name="KEMP_MUND" id="KEMP_MUND" placeholder="KEMP MUND" value="<?php echo $KEMP_MUND; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">BIL PUT <?php echo form_error('BIL_PUT') ?></label>
            <input type="text" class="form-control" name="BIL_PUT" id="BIL_PUT" placeholder="BIL PUT" value="<?php echo $BIL_PUT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">ADAPTIF <?php echo form_error('ADAPTIF') ?></label>
            <input type="text" class="form-control" name="ADAPTIF" id="ADAPTIF" placeholder="ADAPTIF" value="<?php echo $ADAPTIF; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MALADAPTIF <?php echo form_error('MALADAPTIF') ?></label>
            <input type="text" class="form-control" name="MALADAPTIF" id="MALADAPTIF" placeholder="MALADAPTIF" value="<?php echo $MALADAPTIF; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PENANGGUNGJAWAB NAMA <?php echo form_error('PENANGGUNGJAWAB_NAMA') ?></label>
            <input type="text" class="form-control" name="PENANGGUNGJAWAB_NAMA" id="PENANGGUNGJAWAB_NAMA" placeholder="PENANGGUNGJAWAB NAMA" value="<?php echo $PENANGGUNGJAWAB_NAMA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PENANGGUNGJAWAB HUBUNGAN <?php echo form_error('PENANGGUNGJAWAB_HUBUNGAN') ?></label>
            <input type="text" class="form-control" name="PENANGGUNGJAWAB_HUBUNGAN" id="PENANGGUNGJAWAB_HUBUNGAN" placeholder="PENANGGUNGJAWAB HUBUNGAN" value="<?php echo $PENANGGUNGJAWAB_HUBUNGAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PENANGGUNGJAWAB ALAMAT <?php echo form_error('PENANGGUNGJAWAB_ALAMAT') ?></label>
            <input type="text" class="form-control" name="PENANGGUNGJAWAB_ALAMAT" id="PENANGGUNGJAWAB_ALAMAT" placeholder="PENANGGUNGJAWAB ALAMAT" value="<?php echo $PENANGGUNGJAWAB_ALAMAT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PENANGGUNGJAWAB PHONE <?php echo form_error('PENANGGUNGJAWAB_PHONE') ?></label>
            <input type="text" class="form-control" name="PENANGGUNGJAWAB_PHONE" id="PENANGGUNGJAWAB_PHONE" placeholder="PENANGGUNGJAWAB PHONE" value="<?php echo $PENANGGUNGJAWAB_PHONE; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Obat2 <?php echo form_error('obat2') ?></label>
            <input type="text" class="form-control" name="obat2" id="obat2" placeholder="Obat2" value="<?php echo $obat2; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PERBANDINGAN BB <?php echo form_error('PERBANDINGAN_BB') ?></label>
            <input type="text" class="form-control" name="PERBANDINGAN_BB" id="PERBANDINGAN_BB" placeholder="PERBANDINGAN BB" value="<?php echo $PERBANDINGAN_BB; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KONTINENSIA <?php echo form_error('KONTINENSIA') ?></label>
            <input type="text" class="form-control" name="KONTINENSIA" id="KONTINENSIA" placeholder="KONTINENSIA" value="<?php echo $KONTINENSIA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">JENIS KULIT1 <?php echo form_error('JENIS_KULIT1') ?></label>
            <input type="text" class="form-control" name="JENIS_KULIT1" id="JENIS_KULIT1" placeholder="JENIS KULIT1" value="<?php echo $JENIS_KULIT1; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MOBILITAS <?php echo form_error('MOBILITAS') ?></label>
            <input type="text" class="form-control" name="MOBILITAS" id="MOBILITAS" placeholder="MOBILITAS" value="<?php echo $MOBILITAS; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">JK <?php echo form_error('JK') ?></label>
            <input type="text" class="form-control" name="JK" id="JK" placeholder="JK" value="<?php echo $JK; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">UMUR <?php echo form_error('UMUR') ?></label>
            <input type="text" class="form-control" name="UMUR" id="UMUR" placeholder="UMUR" value="<?php echo $UMUR; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NAFSU MAKAN <?php echo form_error('NAFSU_MAKAN') ?></label>
            <input type="text" class="form-control" name="NAFSU_MAKAN" id="NAFSU_MAKAN" placeholder="NAFSU MAKAN" value="<?php echo $NAFSU_MAKAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">OBAT1 <?php echo form_error('OBAT1') ?></label>
            <input type="text" class="form-control" name="OBAT1" id="OBAT1" placeholder="OBAT1" value="<?php echo $OBAT1; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MALNUTRISI <?php echo form_error('MALNUTRISI') ?></label>
            <input type="text" class="form-control" name="MALNUTRISI" id="MALNUTRISI" placeholder="MALNUTRISI" value="<?php echo $MALNUTRISI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MOTORIK1 <?php echo form_error('MOTORIK1') ?></label>
            <input type="text" class="form-control" name="MOTORIK1" id="MOTORIK1" placeholder="MOTORIK1" value="<?php echo $MOTORIK1; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">SPINAL <?php echo form_error('SPINAL') ?></label>
            <input type="text" class="form-control" name="SPINAL" id="SPINAL" placeholder="SPINAL" value="<?php echo $SPINAL; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">MEJA OPERASI <?php echo form_error('MEJA_OPERASI') ?></label>
            <input type="text" class="form-control" name="MEJA_OPERASI" id="MEJA_OPERASI" placeholder="MEJA OPERASI" value="<?php echo $MEJA_OPERASI; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">RIWAYAT JATUH <?php echo form_error('RIWAYAT_JATUH') ?></label>
            <input type="text" class="form-control" name="RIWAYAT_JATUH" id="RIWAYAT_JATUH" placeholder="RIWAYAT JATUH" value="<?php echo $RIWAYAT_JATUH; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">DIAGNOSIS SEKUNDER <?php echo form_error('DIAGNOSIS_SEKUNDER') ?></label>
            <input type="text" class="form-control" name="DIAGNOSIS_SEKUNDER" id="DIAGNOSIS_SEKUNDER" placeholder="DIAGNOSIS SEKUNDER" value="<?php echo $DIAGNOSIS_SEKUNDER; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">ALAT BANTU <?php echo form_error('ALAT_BANTU') ?></label>
            <input type="text" class="form-control" name="ALAT_BANTU" id="ALAT_BANTU" placeholder="ALAT BANTU" value="<?php echo $ALAT_BANTU; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">HEPARIN <?php echo form_error('HEPARIN') ?></label>
            <input type="text" class="form-control" name="HEPARIN" id="HEPARIN" placeholder="HEPARIN" value="<?php echo $HEPARIN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">GAYA BERJALAN <?php echo form_error('GAYA_BERJALAN') ?></label>
            <input type="text" class="form-control" name="GAYA_BERJALAN" id="GAYA_BERJALAN" placeholder="GAYA BERJALAN" value="<?php echo $GAYA_BERJALAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KESADARAN1 <?php echo form_error('KESADARAN1') ?></label>
            <input type="text" class="form-control" name="KESADARAN1" id="KESADARAN1" placeholder="KESADARAN1" value="<?php echo $KESADARAN1; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NOMR LAMA <?php echo form_error('NOMR_LAMA') ?></label>
            <input type="text" class="form-control" name="NOMR_LAMA" id="NOMR_LAMA" placeholder="NOMR LAMA" value="<?php echo $NOMR_LAMA; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">NO KARTU <?php echo form_error('NO_KARTU') ?></label>
            <input type="text" class="form-control" name="NO_KARTU" id="NO_KARTU" placeholder="NO KARTU" value="<?php echo $NO_KARTU; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">JNS PASIEN <?php echo form_error('JNS_PASIEN') ?></label>
            <input type="text" class="form-control" name="JNS_PASIEN" id="JNS_PASIEN" placeholder="JNS PASIEN" value="<?php echo $JNS_PASIEN; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">KDPROVIDER <?php echo form_error('KDPROVIDER') ?></label>
            <input type="text" class="form-control" name="KDPROVIDER" id="KDPROVIDER" placeholder="KDPROVIDER" value="<?php echo $KDPROVIDER; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">NMPROVIDER <?php echo form_error('NMPROVIDER') ?></label>
            <input type="text" class="form-control" name="NMPROVIDER" id="NMPROVIDER" placeholder="NMPROVIDER" value="<?php echo $NMPROVIDER; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Kelas <?php echo form_error('Kelas') ?></label>
            <input type="text" class="form-control" name="Kelas" id="Kelas" placeholder="Kelas" value="<?php echo $Kelas; ?>" />
        </div>
	    <div class="form-group">
            <label for="catatan_pembayaran">Catatan Pembayaran <?php echo form_error('catatan_pembayaran') ?></label>
            <textarea class="form-control" rows="3" name="catatan_pembayaran" id="catatan_pembayaran" placeholder="Catatan Pembayaran"><?php echo $catatan_pembayaran; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">NAMAREF <?php echo form_error('NAMAREF') ?></label>
            <input type="text" class="form-control" name="NAMAREF" id="NAMAREF" placeholder="NAMAREF" value="<?php echo $NAMAREF; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NOMRREF <?php echo form_error('NOMRREF') ?></label>
            <input type="text" class="form-control" name="NOMRREF" id="NOMRREF" placeholder="NOMRREF" value="<?php echo $NOMRREF; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KETERANGAN <?php echo form_error('KETERANGAN') ?></label>
            <input type="text" class="form-control" name="KETERANGAN" id="KETERANGAN" placeholder="KETERANGAN" value="<?php echo $KETERANGAN; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">SUKU <?php echo form_error('SUKU') ?></label>
            <input type="text" class="form-control" name="SUKU" id="SUKU" placeholder="SUKU" value="<?php echo $SUKU; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('m_pasien') ?>" class="btn btn-default">Cancel</a>
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