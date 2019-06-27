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
        <h2 style="margin-top:0px">M_pasien List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('m_pasien/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('m_pasien/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('m_pasien'); ?>" class="btn btn-default">Reset</a>
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
		<th>NOMR</th>
		<th>TITLE</th>
		<th>NAMA</th>
		<th>TEMPAT</th>
		<th>TGLLAHIR</th>
		<th>JENISKELAMIN</th>
		<th>ALAMAT</th>
		<th>KELURAHAN</th>
		<th>KDKECAMATAN</th>
		<th>KOTA</th>
		<th>KDPROVINSI</th>
		<th>NOTELP</th>
		<th>NOKTP</th>
		<th>SUAMI ORTU</th>
		<th>PEKERJAAN</th>
		<th>STATUS</th>
		<th>AGAMA</th>
		<th>PENDIDIKAN</th>
		<th>KDCARABAYAR</th>
		<th>NIP</th>
		<th>TGLDAFTAR</th>
		<th>ALAMAT KTP</th>
		<th>PARENT NOMR</th>
		<th>NAMA OBAT</th>
		<th>DOSIS</th>
		<th>CARA PEMBERIAN</th>
		<th>FREKUENSI</th>
		<th>WAKTU TGL</th>
		<th>LAMA WAKTU</th>
		<th>ALERGI OBAT</th>
		<th>REAKSI ALERGI</th>
		<th>RIWAYAT KES</th>
		<th>BB LAHIR</th>
		<th>BB SEKARANG</th>
		<th>FISIK FONTANEL</th>
		<th>FISIK REFLEKS</th>
		<th>FISIK SENSASI</th>
		<th>MOTORIK KASAR</th>
		<th>MOTORIK HALUS</th>
		<th>MAMPU BICARA</th>
		<th>MAMPU SOSIALISASI</th>
		<th>BCG</th>
		<th>POLIO</th>
		<th>DPT</th>
		<th>CAMPAK</th>
		<th>HEPATITIS B</th>
		<th>TD</th>
		<th>SUHU</th>
		<th>RR</th>
		<th>NADI</th>
		<th>BB</th>
		<th>TB</th>
		<th>EYE</th>
		<th>MOTORIK</th>
		<th>VERBAL</th>
		<th>TOTAL GCS</th>
		<th>REAKSI PUPIL</th>
		<th>KESADARAN</th>
		<th>KEPALA</th>
		<th>RAMBUT</th>
		<th>MUKA</th>
		<th>MATA</th>
		<th>GANG LIHAT</th>
		<th>ALATBANTU LIHAT</th>
		<th>BENTUK</th>
		<th>PENDENGARAN</th>
		<th>LUB TELINGA</th>
		<th>BENTUK HIDUNG</th>
		<th>MEMBRAN MUK</th>
		<th>MAMPU HIDU</th>
		<th>ALAT HIDUNG</th>
		<th>RONGGA MULUT</th>
		<th>WARNA MEMBRAN</th>
		<th>LEMBAB</th>
		<th>STOMATITIS</th>
		<th>LIDAH</th>
		<th>GIGI</th>
		<th>TONSIL</th>
		<th>KELAINAN</th>
		<th>PERGERAKAN</th>
		<th>KEL TIROID</th>
		<th>KEL GETAH</th>
		<th>TEKANAN VENA</th>
		<th>REF MENELAN</th>
		<th>NYERI</th>
		<th>KREPITASI</th>
		<th>KEL LAIN</th>
		<th>BENTUK DADA</th>
		<th>POLA NAPAS</th>
		<th>BENTUK THORAKS</th>
		<th>PAL KREP</th>
		<th>BENJOLAN</th>
		<th>PAL NYERI</th>
		<th>PERKUSI</th>
		<th>PARU</th>
		<th>JANTUNG</th>
		<th>SUARA JANTUNG</th>
		<th>ALATBANTU JAN</th>
		<th>BENTUK ABDOMEN</th>
		<th>AUSKULTASI</th>
		<th>NYERI PASI</th>
		<th>PEM KELENJAR</th>
		<th>PERKUSI AUS</th>
		<th>VAGINA</th>
		<th>MENSTRUASI</th>
		<th>KATETER</th>
		<th>LABIA PROM</th>
		<th>HAMIL</th>
		<th>TGL HAID</th>
		<th>PERIKSA CERVIX</th>
		<th>BENTUK PAYUDARA</th>
		<th>KENYAL</th>
		<th>MASSA</th>
		<th>NYERI RABA</th>
		<th>BENTUK PUTING</th>
		<th>MAMMO</th>
		<th>ALAT KONTRASEPSI</th>
		<th>MASALAH SEKS</th>
		<th>PREPUTIUM</th>
		<th>MASALAH PROSTAT</th>
		<th>BENTUK SKROTUM</th>
		<th>TESTIS</th>
		<th>MASSA BEN</th>
		<th>HERNIASI</th>
		<th>LAIN2</th>
		<th>ALAT KONTRA</th>
		<th>MASALAH REPRO</th>
		<th>EKSTREMITAS ATAS</th>
		<th>EKSTREMITAS BAWAH</th>
		<th>AKTIVITAS</th>
		<th>BERJALAN</th>
		<th>SISTEM INTE</th>
		<th>KENYAMANAN</th>
		<th>KES DIRI</th>
		<th>SOS SUPORT</th>
		<th>ANSIETAS</th>
		<th>KEHILANGAN</th>
		<th>STATUS EMOSI</th>
		<th>KONSEP DIRI</th>
		<th>RESPON HILANG</th>
		<th>SUMBER STRESS</th>
		<th>BERARTI</th>
		<th>TERLIBAT</th>
		<th>HUBUNGAN</th>
		<th>KOMUNIKASI</th>
		<th>KEPUTUSAN</th>
		<th>MENGASUH</th>
		<th>DUKUNGAN</th>
		<th>REAKSI</th>
		<th>BUDAYA</th>
		<th>POLA AKTIVITAS</th>
		<th>POLA ISTIRAHAT</th>
		<th>POLA MAKAN</th>
		<th>PANTANGAN</th>
		<th>KEPERCAYAAN</th>
		<th>PANTANGAN HARI</th>
		<th>PANTANGAN LAIN</th>
		<th>ANJURAN</th>
		<th>NILAI KEYAKINAN</th>
		<th>KEGIATAN IBADAH</th>
		<th>PENG AGAMA</th>
		<th>SPIRIT</th>
		<th>BANTUAN</th>
		<th>PAHAM PENYAKIT</th>
		<th>PAHAM OBAT</th>
		<th>PAHAM NUTRISI</th>
		<th>PAHAM RAWAT</th>
		<th>HAMBATAN EDUKASI</th>
		<th>FREK MAKAN</th>
		<th>JUM MAKAN</th>
		<th>JEN MAKAN</th>
		<th>KOM MAKAN</th>
		<th>DIET</th>
		<th>CARA MAKAN</th>
		<th>GANGGUAN</th>
		<th>FREK MINUM</th>
		<th>JUM MINUM</th>
		<th>JEN MINUM</th>
		<th>GANG MINUM</th>
		<th>FREK BAK</th>
		<th>WARNA BAK</th>
		<th>JMLH BAK</th>
		<th>PENG KAT BAK</th>
		<th>KEM HAN BAK</th>
		<th>INKONT BAK</th>
		<th>DIURESIS BAK</th>
		<th>FREK BAB</th>
		<th>WARNA BAB</th>
		<th>KONSIST BAB</th>
		<th>GANG BAB</th>
		<th>STOMA BAB</th>
		<th>PENG OBAT BAB</th>
		<th>IST SIANG</th>
		<th>IST MALAM</th>
		<th>IST CAHAYA</th>
		<th>IST POSISI</th>
		<th>IST LING</th>
		<th>IST GANG TIDUR</th>
		<th>PENG OBAT IST</th>
		<th>FREK MAND</th>
		<th>CUC RAMB MAND</th>
		<th>SIH GIGI MAND</th>
		<th>BANT MAND</th>
		<th>GANT PAKAI</th>
		<th>PAK CUCI</th>
		<th>PAK BANT</th>
		<th>ALT BANT</th>
		<th>KEMP MUND</th>
		<th>BIL PUT</th>
		<th>ADAPTIF</th>
		<th>MALADAPTIF</th>
		<th>PENANGGUNGJAWAB NAMA</th>
		<th>PENANGGUNGJAWAB HUBUNGAN</th>
		<th>PENANGGUNGJAWAB ALAMAT</th>
		<th>PENANGGUNGJAWAB PHONE</th>
		<th>Obat2</th>
		<th>PERBANDINGAN BB</th>
		<th>KONTINENSIA</th>
		<th>JENIS KULIT1</th>
		<th>MOBILITAS</th>
		<th>JK</th>
		<th>UMUR</th>
		<th>NAFSU MAKAN</th>
		<th>OBAT1</th>
		<th>MALNUTRISI</th>
		<th>MOTORIK1</th>
		<th>SPINAL</th>
		<th>MEJA OPERASI</th>
		<th>RIWAYAT JATUH</th>
		<th>DIAGNOSIS SEKUNDER</th>
		<th>ALAT BANTU</th>
		<th>HEPARIN</th>
		<th>GAYA BERJALAN</th>
		<th>KESADARAN1</th>
		<th>NOMR LAMA</th>
		<th>NO KARTU</th>
		<th>JNS PASIEN</th>
		<th>KDPROVIDER</th>
		<th>NMPROVIDER</th>
		<th>Kelas</th>
		<th>Catatan Pembayaran</th>
		<th>NAMAREF</th>
		<th>NOMRREF</th>
		<th>KETERANGAN</th>
		<th>SUKU</th>
		<th>Action</th>
            </tr><?php
            foreach ($m_pasien_data as $m_pasien)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $m_pasien->NOMR ?></td>
			<td><?php echo $m_pasien->TITLE ?></td>
			<td><?php echo $m_pasien->NAMA ?></td>
			<td><?php echo $m_pasien->TEMPAT ?></td>
			<td><?php echo $m_pasien->TGLLAHIR ?></td>
			<td><?php echo $m_pasien->JENISKELAMIN ?></td>
			<td><?php echo $m_pasien->ALAMAT ?></td>
			<td><?php echo $m_pasien->KELURAHAN ?></td>
			<td><?php echo $m_pasien->KDKECAMATAN ?></td>
			<td><?php echo $m_pasien->KOTA ?></td>
			<td><?php echo $m_pasien->KDPROVINSI ?></td>
			<td><?php echo $m_pasien->NOTELP ?></td>
			<td><?php echo $m_pasien->NOKTP ?></td>
			<td><?php echo $m_pasien->SUAMI_ORTU ?></td>
			<td><?php echo $m_pasien->PEKERJAAN ?></td>
			<td><?php echo $m_pasien->STATUS ?></td>
			<td><?php echo $m_pasien->AGAMA ?></td>
			<td><?php echo $m_pasien->PENDIDIKAN ?></td>
			<td><?php echo $m_pasien->KDCARABAYAR ?></td>
			<td><?php echo $m_pasien->NIP ?></td>
			<td><?php echo $m_pasien->TGLDAFTAR ?></td>
			<td><?php echo $m_pasien->ALAMAT_KTP ?></td>
			<td><?php echo $m_pasien->PARENT_NOMR ?></td>
			<td><?php echo $m_pasien->NAMA_OBAT ?></td>
			<td><?php echo $m_pasien->DOSIS ?></td>
			<td><?php echo $m_pasien->CARA_PEMBERIAN ?></td>
			<td><?php echo $m_pasien->FREKUENSI ?></td>
			<td><?php echo $m_pasien->WAKTU_TGL ?></td>
			<td><?php echo $m_pasien->LAMA_WAKTU ?></td>
			<td><?php echo $m_pasien->ALERGI_OBAT ?></td>
			<td><?php echo $m_pasien->REAKSI_ALERGI ?></td>
			<td><?php echo $m_pasien->RIWAYAT_KES ?></td>
			<td><?php echo $m_pasien->BB_LAHIR ?></td>
			<td><?php echo $m_pasien->BB_SEKARANG ?></td>
			<td><?php echo $m_pasien->FISIK_FONTANEL ?></td>
			<td><?php echo $m_pasien->FISIK_REFLEKS ?></td>
			<td><?php echo $m_pasien->FISIK_SENSASI ?></td>
			<td><?php echo $m_pasien->MOTORIK_KASAR ?></td>
			<td><?php echo $m_pasien->MOTORIK_HALUS ?></td>
			<td><?php echo $m_pasien->MAMPU_BICARA ?></td>
			<td><?php echo $m_pasien->MAMPU_SOSIALISASI ?></td>
			<td><?php echo $m_pasien->BCG ?></td>
			<td><?php echo $m_pasien->POLIO ?></td>
			<td><?php echo $m_pasien->DPT ?></td>
			<td><?php echo $m_pasien->CAMPAK ?></td>
			<td><?php echo $m_pasien->HEPATITIS_B ?></td>
			<td><?php echo $m_pasien->TD ?></td>
			<td><?php echo $m_pasien->SUHU ?></td>
			<td><?php echo $m_pasien->RR ?></td>
			<td><?php echo $m_pasien->NADI ?></td>
			<td><?php echo $m_pasien->BB ?></td>
			<td><?php echo $m_pasien->TB ?></td>
			<td><?php echo $m_pasien->EYE ?></td>
			<td><?php echo $m_pasien->MOTORIK ?></td>
			<td><?php echo $m_pasien->VERBAL ?></td>
			<td><?php echo $m_pasien->TOTAL_GCS ?></td>
			<td><?php echo $m_pasien->REAKSI_PUPIL ?></td>
			<td><?php echo $m_pasien->KESADARAN ?></td>
			<td><?php echo $m_pasien->KEPALA ?></td>
			<td><?php echo $m_pasien->RAMBUT ?></td>
			<td><?php echo $m_pasien->MUKA ?></td>
			<td><?php echo $m_pasien->MATA ?></td>
			<td><?php echo $m_pasien->GANG_LIHAT ?></td>
			<td><?php echo $m_pasien->ALATBANTU_LIHAT ?></td>
			<td><?php echo $m_pasien->BENTUK ?></td>
			<td><?php echo $m_pasien->PENDENGARAN ?></td>
			<td><?php echo $m_pasien->LUB_TELINGA ?></td>
			<td><?php echo $m_pasien->BENTUK_HIDUNG ?></td>
			<td><?php echo $m_pasien->MEMBRAN_MUK ?></td>
			<td><?php echo $m_pasien->MAMPU_HIDU ?></td>
			<td><?php echo $m_pasien->ALAT_HIDUNG ?></td>
			<td><?php echo $m_pasien->RONGGA_MULUT ?></td>
			<td><?php echo $m_pasien->WARNA_MEMBRAN ?></td>
			<td><?php echo $m_pasien->LEMBAB ?></td>
			<td><?php echo $m_pasien->STOMATITIS ?></td>
			<td><?php echo $m_pasien->LIDAH ?></td>
			<td><?php echo $m_pasien->GIGI ?></td>
			<td><?php echo $m_pasien->TONSIL ?></td>
			<td><?php echo $m_pasien->KELAINAN ?></td>
			<td><?php echo $m_pasien->PERGERAKAN ?></td>
			<td><?php echo $m_pasien->KEL_TIROID ?></td>
			<td><?php echo $m_pasien->KEL_GETAH ?></td>
			<td><?php echo $m_pasien->TEKANAN_VENA ?></td>
			<td><?php echo $m_pasien->REF_MENELAN ?></td>
			<td><?php echo $m_pasien->NYERI ?></td>
			<td><?php echo $m_pasien->KREPITASI ?></td>
			<td><?php echo $m_pasien->KEL_LAIN ?></td>
			<td><?php echo $m_pasien->BENTUK_DADA ?></td>
			<td><?php echo $m_pasien->POLA_NAPAS ?></td>
			<td><?php echo $m_pasien->BENTUK_THORAKS ?></td>
			<td><?php echo $m_pasien->PAL_KREP ?></td>
			<td><?php echo $m_pasien->BENJOLAN ?></td>
			<td><?php echo $m_pasien->PAL_NYERI ?></td>
			<td><?php echo $m_pasien->PERKUSI ?></td>
			<td><?php echo $m_pasien->PARU ?></td>
			<td><?php echo $m_pasien->JANTUNG ?></td>
			<td><?php echo $m_pasien->SUARA_JANTUNG ?></td>
			<td><?php echo $m_pasien->ALATBANTU_JAN ?></td>
			<td><?php echo $m_pasien->BENTUK_ABDOMEN ?></td>
			<td><?php echo $m_pasien->AUSKULTASI ?></td>
			<td><?php echo $m_pasien->NYERI_PASI ?></td>
			<td><?php echo $m_pasien->PEM_KELENJAR ?></td>
			<td><?php echo $m_pasien->PERKUSI_AUS ?></td>
			<td><?php echo $m_pasien->VAGINA ?></td>
			<td><?php echo $m_pasien->MENSTRUASI ?></td>
			<td><?php echo $m_pasien->KATETER ?></td>
			<td><?php echo $m_pasien->LABIA_PROM ?></td>
			<td><?php echo $m_pasien->HAMIL ?></td>
			<td><?php echo $m_pasien->TGL_HAID ?></td>
			<td><?php echo $m_pasien->PERIKSA_CERVIX ?></td>
			<td><?php echo $m_pasien->BENTUK_PAYUDARA ?></td>
			<td><?php echo $m_pasien->KENYAL ?></td>
			<td><?php echo $m_pasien->MASSA ?></td>
			<td><?php echo $m_pasien->NYERI_RABA ?></td>
			<td><?php echo $m_pasien->BENTUK_PUTING ?></td>
			<td><?php echo $m_pasien->MAMMO ?></td>
			<td><?php echo $m_pasien->ALAT_KONTRASEPSI ?></td>
			<td><?php echo $m_pasien->MASALAH_SEKS ?></td>
			<td><?php echo $m_pasien->PREPUTIUM ?></td>
			<td><?php echo $m_pasien->MASALAH_PROSTAT ?></td>
			<td><?php echo $m_pasien->BENTUK_SKROTUM ?></td>
			<td><?php echo $m_pasien->TESTIS ?></td>
			<td><?php echo $m_pasien->MASSA_BEN ?></td>
			<td><?php echo $m_pasien->HERNIASI ?></td>
			<td><?php echo $m_pasien->LAIN2 ?></td>
			<td><?php echo $m_pasien->ALAT_KONTRA ?></td>
			<td><?php echo $m_pasien->MASALAH_REPRO ?></td>
			<td><?php echo $m_pasien->EKSTREMITAS_ATAS ?></td>
			<td><?php echo $m_pasien->EKSTREMITAS_BAWAH ?></td>
			<td><?php echo $m_pasien->AKTIVITAS ?></td>
			<td><?php echo $m_pasien->BERJALAN ?></td>
			<td><?php echo $m_pasien->SISTEM_INTE ?></td>
			<td><?php echo $m_pasien->KENYAMANAN ?></td>
			<td><?php echo $m_pasien->KES_DIRI ?></td>
			<td><?php echo $m_pasien->SOS_SUPORT ?></td>
			<td><?php echo $m_pasien->ANSIETAS ?></td>
			<td><?php echo $m_pasien->KEHILANGAN ?></td>
			<td><?php echo $m_pasien->STATUS_EMOSI ?></td>
			<td><?php echo $m_pasien->KONSEP_DIRI ?></td>
			<td><?php echo $m_pasien->RESPON_HILANG ?></td>
			<td><?php echo $m_pasien->SUMBER_STRESS ?></td>
			<td><?php echo $m_pasien->BERARTI ?></td>
			<td><?php echo $m_pasien->TERLIBAT ?></td>
			<td><?php echo $m_pasien->HUBUNGAN ?></td>
			<td><?php echo $m_pasien->KOMUNIKASI ?></td>
			<td><?php echo $m_pasien->KEPUTUSAN ?></td>
			<td><?php echo $m_pasien->MENGASUH ?></td>
			<td><?php echo $m_pasien->DUKUNGAN ?></td>
			<td><?php echo $m_pasien->REAKSI ?></td>
			<td><?php echo $m_pasien->BUDAYA ?></td>
			<td><?php echo $m_pasien->POLA_AKTIVITAS ?></td>
			<td><?php echo $m_pasien->POLA_ISTIRAHAT ?></td>
			<td><?php echo $m_pasien->POLA_MAKAN ?></td>
			<td><?php echo $m_pasien->PANTANGAN ?></td>
			<td><?php echo $m_pasien->KEPERCAYAAN ?></td>
			<td><?php echo $m_pasien->PANTANGAN_HARI ?></td>
			<td><?php echo $m_pasien->PANTANGAN_LAIN ?></td>
			<td><?php echo $m_pasien->ANJURAN ?></td>
			<td><?php echo $m_pasien->NILAI_KEYAKINAN ?></td>
			<td><?php echo $m_pasien->KEGIATAN_IBADAH ?></td>
			<td><?php echo $m_pasien->PENG_AGAMA ?></td>
			<td><?php echo $m_pasien->SPIRIT ?></td>
			<td><?php echo $m_pasien->BANTUAN ?></td>
			<td><?php echo $m_pasien->PAHAM_PENYAKIT ?></td>
			<td><?php echo $m_pasien->PAHAM_OBAT ?></td>
			<td><?php echo $m_pasien->PAHAM_NUTRISI ?></td>
			<td><?php echo $m_pasien->PAHAM_RAWAT ?></td>
			<td><?php echo $m_pasien->HAMBATAN_EDUKASI ?></td>
			<td><?php echo $m_pasien->FREK_MAKAN ?></td>
			<td><?php echo $m_pasien->JUM_MAKAN ?></td>
			<td><?php echo $m_pasien->JEN_MAKAN ?></td>
			<td><?php echo $m_pasien->KOM_MAKAN ?></td>
			<td><?php echo $m_pasien->DIET ?></td>
			<td><?php echo $m_pasien->CARA_MAKAN ?></td>
			<td><?php echo $m_pasien->GANGGUAN ?></td>
			<td><?php echo $m_pasien->FREK_MINUM ?></td>
			<td><?php echo $m_pasien->JUM_MINUM ?></td>
			<td><?php echo $m_pasien->JEN_MINUM ?></td>
			<td><?php echo $m_pasien->GANG_MINUM ?></td>
			<td><?php echo $m_pasien->FREK_BAK ?></td>
			<td><?php echo $m_pasien->WARNA_BAK ?></td>
			<td><?php echo $m_pasien->JMLH_BAK ?></td>
			<td><?php echo $m_pasien->PENG_KAT_BAK ?></td>
			<td><?php echo $m_pasien->KEM_HAN_BAK ?></td>
			<td><?php echo $m_pasien->INKONT_BAK ?></td>
			<td><?php echo $m_pasien->DIURESIS_BAK ?></td>
			<td><?php echo $m_pasien->FREK_BAB ?></td>
			<td><?php echo $m_pasien->WARNA_BAB ?></td>
			<td><?php echo $m_pasien->KONSIST_BAB ?></td>
			<td><?php echo $m_pasien->GANG_BAB ?></td>
			<td><?php echo $m_pasien->STOMA_BAB ?></td>
			<td><?php echo $m_pasien->PENG_OBAT_BAB ?></td>
			<td><?php echo $m_pasien->IST_SIANG ?></td>
			<td><?php echo $m_pasien->IST_MALAM ?></td>
			<td><?php echo $m_pasien->IST_CAHAYA ?></td>
			<td><?php echo $m_pasien->IST_POSISI ?></td>
			<td><?php echo $m_pasien->IST_LING ?></td>
			<td><?php echo $m_pasien->IST_GANG_TIDUR ?></td>
			<td><?php echo $m_pasien->PENG_OBAT_IST ?></td>
			<td><?php echo $m_pasien->FREK_MAND ?></td>
			<td><?php echo $m_pasien->CUC_RAMB_MAND ?></td>
			<td><?php echo $m_pasien->SIH_GIGI_MAND ?></td>
			<td><?php echo $m_pasien->BANT_MAND ?></td>
			<td><?php echo $m_pasien->GANT_PAKAI ?></td>
			<td><?php echo $m_pasien->PAK_CUCI ?></td>
			<td><?php echo $m_pasien->PAK_BANT ?></td>
			<td><?php echo $m_pasien->ALT_BANT ?></td>
			<td><?php echo $m_pasien->KEMP_MUND ?></td>
			<td><?php echo $m_pasien->BIL_PUT ?></td>
			<td><?php echo $m_pasien->ADAPTIF ?></td>
			<td><?php echo $m_pasien->MALADAPTIF ?></td>
			<td><?php echo $m_pasien->PENANGGUNGJAWAB_NAMA ?></td>
			<td><?php echo $m_pasien->PENANGGUNGJAWAB_HUBUNGAN ?></td>
			<td><?php echo $m_pasien->PENANGGUNGJAWAB_ALAMAT ?></td>
			<td><?php echo $m_pasien->PENANGGUNGJAWAB_PHONE ?></td>
			<td><?php echo $m_pasien->obat2 ?></td>
			<td><?php echo $m_pasien->PERBANDINGAN_BB ?></td>
			<td><?php echo $m_pasien->KONTINENSIA ?></td>
			<td><?php echo $m_pasien->JENIS_KULIT1 ?></td>
			<td><?php echo $m_pasien->MOBILITAS ?></td>
			<td><?php echo $m_pasien->JK ?></td>
			<td><?php echo $m_pasien->UMUR ?></td>
			<td><?php echo $m_pasien->NAFSU_MAKAN ?></td>
			<td><?php echo $m_pasien->OBAT1 ?></td>
			<td><?php echo $m_pasien->MALNUTRISI ?></td>
			<td><?php echo $m_pasien->MOTORIK1 ?></td>
			<td><?php echo $m_pasien->SPINAL ?></td>
			<td><?php echo $m_pasien->MEJA_OPERASI ?></td>
			<td><?php echo $m_pasien->RIWAYAT_JATUH ?></td>
			<td><?php echo $m_pasien->DIAGNOSIS_SEKUNDER ?></td>
			<td><?php echo $m_pasien->ALAT_BANTU ?></td>
			<td><?php echo $m_pasien->HEPARIN ?></td>
			<td><?php echo $m_pasien->GAYA_BERJALAN ?></td>
			<td><?php echo $m_pasien->KESADARAN1 ?></td>
			<td><?php echo $m_pasien->NOMR_LAMA ?></td>
			<td><?php echo $m_pasien->NO_KARTU ?></td>
			<td><?php echo $m_pasien->JNS_PASIEN ?></td>
			<td><?php echo $m_pasien->KDPROVIDER ?></td>
			<td><?php echo $m_pasien->NMPROVIDER ?></td>
			<td><?php echo $m_pasien->Kelas ?></td>
			<td><?php echo $m_pasien->catatan_pembayaran ?></td>
			<td><?php echo $m_pasien->NAMAREF ?></td>
			<td><?php echo $m_pasien->NOMRREF ?></td>
			<td><?php echo $m_pasien->KETERANGAN ?></td>
			<td><?php echo $m_pasien->SUKU ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('m_pasien/read/'.$m_pasien->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('m_pasien/update/'.$m_pasien->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('m_pasien/delete/'.$m_pasien->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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