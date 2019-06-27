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
        <h2 style="margin-top:0px">M_pasien Read</h2>
        <table class="table">
	    <tr><td>NOMR</td><td><?php echo $NOMR; ?></td></tr>
	    <tr><td>TITLE</td><td><?php echo $TITLE; ?></td></tr>
	    <tr><td>NAMA</td><td><?php echo $NAMA; ?></td></tr>
	    <tr><td>TEMPAT</td><td><?php echo $TEMPAT; ?></td></tr>
	    <tr><td>TGLLAHIR</td><td><?php echo $TGLLAHIR; ?></td></tr>
	    <tr><td>JENISKELAMIN</td><td><?php echo $JENISKELAMIN; ?></td></tr>
	    <tr><td>ALAMAT</td><td><?php echo $ALAMAT; ?></td></tr>
	    <tr><td>KELURAHAN</td><td><?php echo $KELURAHAN; ?></td></tr>
	    <tr><td>KDKECAMATAN</td><td><?php echo $KDKECAMATAN; ?></td></tr>
	    <tr><td>KOTA</td><td><?php echo $KOTA; ?></td></tr>
	    <tr><td>KDPROVINSI</td><td><?php echo $KDPROVINSI; ?></td></tr>
	    <tr><td>NOTELP</td><td><?php echo $NOTELP; ?></td></tr>
	    <tr><td>NOKTP</td><td><?php echo $NOKTP; ?></td></tr>
	    <tr><td>SUAMI ORTU</td><td><?php echo $SUAMI_ORTU; ?></td></tr>
	    <tr><td>PEKERJAAN</td><td><?php echo $PEKERJAAN; ?></td></tr>
	    <tr><td>STATUS</td><td><?php echo $STATUS; ?></td></tr>
	    <tr><td>AGAMA</td><td><?php echo $AGAMA; ?></td></tr>
	    <tr><td>PENDIDIKAN</td><td><?php echo $PENDIDIKAN; ?></td></tr>
	    <tr><td>KDCARABAYAR</td><td><?php echo $KDCARABAYAR; ?></td></tr>
	    <tr><td>NIP</td><td><?php echo $NIP; ?></td></tr>
	    <tr><td>TGLDAFTAR</td><td><?php echo $TGLDAFTAR; ?></td></tr>
	    <tr><td>ALAMAT KTP</td><td><?php echo $ALAMAT_KTP; ?></td></tr>
	    <tr><td>PARENT NOMR</td><td><?php echo $PARENT_NOMR; ?></td></tr>
	    <tr><td>NAMA OBAT</td><td><?php echo $NAMA_OBAT; ?></td></tr>
	    <tr><td>DOSIS</td><td><?php echo $DOSIS; ?></td></tr>
	    <tr><td>CARA PEMBERIAN</td><td><?php echo $CARA_PEMBERIAN; ?></td></tr>
	    <tr><td>FREKUENSI</td><td><?php echo $FREKUENSI; ?></td></tr>
	    <tr><td>WAKTU TGL</td><td><?php echo $WAKTU_TGL; ?></td></tr>
	    <tr><td>LAMA WAKTU</td><td><?php echo $LAMA_WAKTU; ?></td></tr>
	    <tr><td>ALERGI OBAT</td><td><?php echo $ALERGI_OBAT; ?></td></tr>
	    <tr><td>REAKSI ALERGI</td><td><?php echo $REAKSI_ALERGI; ?></td></tr>
	    <tr><td>RIWAYAT KES</td><td><?php echo $RIWAYAT_KES; ?></td></tr>
	    <tr><td>BB LAHIR</td><td><?php echo $BB_LAHIR; ?></td></tr>
	    <tr><td>BB SEKARANG</td><td><?php echo $BB_SEKARANG; ?></td></tr>
	    <tr><td>FISIK FONTANEL</td><td><?php echo $FISIK_FONTANEL; ?></td></tr>
	    <tr><td>FISIK REFLEKS</td><td><?php echo $FISIK_REFLEKS; ?></td></tr>
	    <tr><td>FISIK SENSASI</td><td><?php echo $FISIK_SENSASI; ?></td></tr>
	    <tr><td>MOTORIK KASAR</td><td><?php echo $MOTORIK_KASAR; ?></td></tr>
	    <tr><td>MOTORIK HALUS</td><td><?php echo $MOTORIK_HALUS; ?></td></tr>
	    <tr><td>MAMPU BICARA</td><td><?php echo $MAMPU_BICARA; ?></td></tr>
	    <tr><td>MAMPU SOSIALISASI</td><td><?php echo $MAMPU_SOSIALISASI; ?></td></tr>
	    <tr><td>BCG</td><td><?php echo $BCG; ?></td></tr>
	    <tr><td>POLIO</td><td><?php echo $POLIO; ?></td></tr>
	    <tr><td>DPT</td><td><?php echo $DPT; ?></td></tr>
	    <tr><td>CAMPAK</td><td><?php echo $CAMPAK; ?></td></tr>
	    <tr><td>HEPATITIS B</td><td><?php echo $HEPATITIS_B; ?></td></tr>
	    <tr><td>TD</td><td><?php echo $TD; ?></td></tr>
	    <tr><td>SUHU</td><td><?php echo $SUHU; ?></td></tr>
	    <tr><td>RR</td><td><?php echo $RR; ?></td></tr>
	    <tr><td>NADI</td><td><?php echo $NADI; ?></td></tr>
	    <tr><td>BB</td><td><?php echo $BB; ?></td></tr>
	    <tr><td>TB</td><td><?php echo $TB; ?></td></tr>
	    <tr><td>EYE</td><td><?php echo $EYE; ?></td></tr>
	    <tr><td>MOTORIK</td><td><?php echo $MOTORIK; ?></td></tr>
	    <tr><td>VERBAL</td><td><?php echo $VERBAL; ?></td></tr>
	    <tr><td>TOTAL GCS</td><td><?php echo $TOTAL_GCS; ?></td></tr>
	    <tr><td>REAKSI PUPIL</td><td><?php echo $REAKSI_PUPIL; ?></td></tr>
	    <tr><td>KESADARAN</td><td><?php echo $KESADARAN; ?></td></tr>
	    <tr><td>KEPALA</td><td><?php echo $KEPALA; ?></td></tr>
	    <tr><td>RAMBUT</td><td><?php echo $RAMBUT; ?></td></tr>
	    <tr><td>MUKA</td><td><?php echo $MUKA; ?></td></tr>
	    <tr><td>MATA</td><td><?php echo $MATA; ?></td></tr>
	    <tr><td>GANG LIHAT</td><td><?php echo $GANG_LIHAT; ?></td></tr>
	    <tr><td>ALATBANTU LIHAT</td><td><?php echo $ALATBANTU_LIHAT; ?></td></tr>
	    <tr><td>BENTUK</td><td><?php echo $BENTUK; ?></td></tr>
	    <tr><td>PENDENGARAN</td><td><?php echo $PENDENGARAN; ?></td></tr>
	    <tr><td>LUB TELINGA</td><td><?php echo $LUB_TELINGA; ?></td></tr>
	    <tr><td>BENTUK HIDUNG</td><td><?php echo $BENTUK_HIDUNG; ?></td></tr>
	    <tr><td>MEMBRAN MUK</td><td><?php echo $MEMBRAN_MUK; ?></td></tr>
	    <tr><td>MAMPU HIDU</td><td><?php echo $MAMPU_HIDU; ?></td></tr>
	    <tr><td>ALAT HIDUNG</td><td><?php echo $ALAT_HIDUNG; ?></td></tr>
	    <tr><td>RONGGA MULUT</td><td><?php echo $RONGGA_MULUT; ?></td></tr>
	    <tr><td>WARNA MEMBRAN</td><td><?php echo $WARNA_MEMBRAN; ?></td></tr>
	    <tr><td>LEMBAB</td><td><?php echo $LEMBAB; ?></td></tr>
	    <tr><td>STOMATITIS</td><td><?php echo $STOMATITIS; ?></td></tr>
	    <tr><td>LIDAH</td><td><?php echo $LIDAH; ?></td></tr>
	    <tr><td>GIGI</td><td><?php echo $GIGI; ?></td></tr>
	    <tr><td>TONSIL</td><td><?php echo $TONSIL; ?></td></tr>
	    <tr><td>KELAINAN</td><td><?php echo $KELAINAN; ?></td></tr>
	    <tr><td>PERGERAKAN</td><td><?php echo $PERGERAKAN; ?></td></tr>
	    <tr><td>KEL TIROID</td><td><?php echo $KEL_TIROID; ?></td></tr>
	    <tr><td>KEL GETAH</td><td><?php echo $KEL_GETAH; ?></td></tr>
	    <tr><td>TEKANAN VENA</td><td><?php echo $TEKANAN_VENA; ?></td></tr>
	    <tr><td>REF MENELAN</td><td><?php echo $REF_MENELAN; ?></td></tr>
	    <tr><td>NYERI</td><td><?php echo $NYERI; ?></td></tr>
	    <tr><td>KREPITASI</td><td><?php echo $KREPITASI; ?></td></tr>
	    <tr><td>KEL LAIN</td><td><?php echo $KEL_LAIN; ?></td></tr>
	    <tr><td>BENTUK DADA</td><td><?php echo $BENTUK_DADA; ?></td></tr>
	    <tr><td>POLA NAPAS</td><td><?php echo $POLA_NAPAS; ?></td></tr>
	    <tr><td>BENTUK THORAKS</td><td><?php echo $BENTUK_THORAKS; ?></td></tr>
	    <tr><td>PAL KREP</td><td><?php echo $PAL_KREP; ?></td></tr>
	    <tr><td>BENJOLAN</td><td><?php echo $BENJOLAN; ?></td></tr>
	    <tr><td>PAL NYERI</td><td><?php echo $PAL_NYERI; ?></td></tr>
	    <tr><td>PERKUSI</td><td><?php echo $PERKUSI; ?></td></tr>
	    <tr><td>PARU</td><td><?php echo $PARU; ?></td></tr>
	    <tr><td>JANTUNG</td><td><?php echo $JANTUNG; ?></td></tr>
	    <tr><td>SUARA JANTUNG</td><td><?php echo $SUARA_JANTUNG; ?></td></tr>
	    <tr><td>ALATBANTU JAN</td><td><?php echo $ALATBANTU_JAN; ?></td></tr>
	    <tr><td>BENTUK ABDOMEN</td><td><?php echo $BENTUK_ABDOMEN; ?></td></tr>
	    <tr><td>AUSKULTASI</td><td><?php echo $AUSKULTASI; ?></td></tr>
	    <tr><td>NYERI PASI</td><td><?php echo $NYERI_PASI; ?></td></tr>
	    <tr><td>PEM KELENJAR</td><td><?php echo $PEM_KELENJAR; ?></td></tr>
	    <tr><td>PERKUSI AUS</td><td><?php echo $PERKUSI_AUS; ?></td></tr>
	    <tr><td>VAGINA</td><td><?php echo $VAGINA; ?></td></tr>
	    <tr><td>MENSTRUASI</td><td><?php echo $MENSTRUASI; ?></td></tr>
	    <tr><td>KATETER</td><td><?php echo $KATETER; ?></td></tr>
	    <tr><td>LABIA PROM</td><td><?php echo $LABIA_PROM; ?></td></tr>
	    <tr><td>HAMIL</td><td><?php echo $HAMIL; ?></td></tr>
	    <tr><td>TGL HAID</td><td><?php echo $TGL_HAID; ?></td></tr>
	    <tr><td>PERIKSA CERVIX</td><td><?php echo $PERIKSA_CERVIX; ?></td></tr>
	    <tr><td>BENTUK PAYUDARA</td><td><?php echo $BENTUK_PAYUDARA; ?></td></tr>
	    <tr><td>KENYAL</td><td><?php echo $KENYAL; ?></td></tr>
	    <tr><td>MASSA</td><td><?php echo $MASSA; ?></td></tr>
	    <tr><td>NYERI RABA</td><td><?php echo $NYERI_RABA; ?></td></tr>
	    <tr><td>BENTUK PUTING</td><td><?php echo $BENTUK_PUTING; ?></td></tr>
	    <tr><td>MAMMO</td><td><?php echo $MAMMO; ?></td></tr>
	    <tr><td>ALAT KONTRASEPSI</td><td><?php echo $ALAT_KONTRASEPSI; ?></td></tr>
	    <tr><td>MASALAH SEKS</td><td><?php echo $MASALAH_SEKS; ?></td></tr>
	    <tr><td>PREPUTIUM</td><td><?php echo $PREPUTIUM; ?></td></tr>
	    <tr><td>MASALAH PROSTAT</td><td><?php echo $MASALAH_PROSTAT; ?></td></tr>
	    <tr><td>BENTUK SKROTUM</td><td><?php echo $BENTUK_SKROTUM; ?></td></tr>
	    <tr><td>TESTIS</td><td><?php echo $TESTIS; ?></td></tr>
	    <tr><td>MASSA BEN</td><td><?php echo $MASSA_BEN; ?></td></tr>
	    <tr><td>HERNIASI</td><td><?php echo $HERNIASI; ?></td></tr>
	    <tr><td>LAIN2</td><td><?php echo $LAIN2; ?></td></tr>
	    <tr><td>ALAT KONTRA</td><td><?php echo $ALAT_KONTRA; ?></td></tr>
	    <tr><td>MASALAH REPRO</td><td><?php echo $MASALAH_REPRO; ?></td></tr>
	    <tr><td>EKSTREMITAS ATAS</td><td><?php echo $EKSTREMITAS_ATAS; ?></td></tr>
	    <tr><td>EKSTREMITAS BAWAH</td><td><?php echo $EKSTREMITAS_BAWAH; ?></td></tr>
	    <tr><td>AKTIVITAS</td><td><?php echo $AKTIVITAS; ?></td></tr>
	    <tr><td>BERJALAN</td><td><?php echo $BERJALAN; ?></td></tr>
	    <tr><td>SISTEM INTE</td><td><?php echo $SISTEM_INTE; ?></td></tr>
	    <tr><td>KENYAMANAN</td><td><?php echo $KENYAMANAN; ?></td></tr>
	    <tr><td>KES DIRI</td><td><?php echo $KES_DIRI; ?></td></tr>
	    <tr><td>SOS SUPORT</td><td><?php echo $SOS_SUPORT; ?></td></tr>
	    <tr><td>ANSIETAS</td><td><?php echo $ANSIETAS; ?></td></tr>
	    <tr><td>KEHILANGAN</td><td><?php echo $KEHILANGAN; ?></td></tr>
	    <tr><td>STATUS EMOSI</td><td><?php echo $STATUS_EMOSI; ?></td></tr>
	    <tr><td>KONSEP DIRI</td><td><?php echo $KONSEP_DIRI; ?></td></tr>
	    <tr><td>RESPON HILANG</td><td><?php echo $RESPON_HILANG; ?></td></tr>
	    <tr><td>SUMBER STRESS</td><td><?php echo $SUMBER_STRESS; ?></td></tr>
	    <tr><td>BERARTI</td><td><?php echo $BERARTI; ?></td></tr>
	    <tr><td>TERLIBAT</td><td><?php echo $TERLIBAT; ?></td></tr>
	    <tr><td>HUBUNGAN</td><td><?php echo $HUBUNGAN; ?></td></tr>
	    <tr><td>KOMUNIKASI</td><td><?php echo $KOMUNIKASI; ?></td></tr>
	    <tr><td>KEPUTUSAN</td><td><?php echo $KEPUTUSAN; ?></td></tr>
	    <tr><td>MENGASUH</td><td><?php echo $MENGASUH; ?></td></tr>
	    <tr><td>DUKUNGAN</td><td><?php echo $DUKUNGAN; ?></td></tr>
	    <tr><td>REAKSI</td><td><?php echo $REAKSI; ?></td></tr>
	    <tr><td>BUDAYA</td><td><?php echo $BUDAYA; ?></td></tr>
	    <tr><td>POLA AKTIVITAS</td><td><?php echo $POLA_AKTIVITAS; ?></td></tr>
	    <tr><td>POLA ISTIRAHAT</td><td><?php echo $POLA_ISTIRAHAT; ?></td></tr>
	    <tr><td>POLA MAKAN</td><td><?php echo $POLA_MAKAN; ?></td></tr>
	    <tr><td>PANTANGAN</td><td><?php echo $PANTANGAN; ?></td></tr>
	    <tr><td>KEPERCAYAAN</td><td><?php echo $KEPERCAYAAN; ?></td></tr>
	    <tr><td>PANTANGAN HARI</td><td><?php echo $PANTANGAN_HARI; ?></td></tr>
	    <tr><td>PANTANGAN LAIN</td><td><?php echo $PANTANGAN_LAIN; ?></td></tr>
	    <tr><td>ANJURAN</td><td><?php echo $ANJURAN; ?></td></tr>
	    <tr><td>NILAI KEYAKINAN</td><td><?php echo $NILAI_KEYAKINAN; ?></td></tr>
	    <tr><td>KEGIATAN IBADAH</td><td><?php echo $KEGIATAN_IBADAH; ?></td></tr>
	    <tr><td>PENG AGAMA</td><td><?php echo $PENG_AGAMA; ?></td></tr>
	    <tr><td>SPIRIT</td><td><?php echo $SPIRIT; ?></td></tr>
	    <tr><td>BANTUAN</td><td><?php echo $BANTUAN; ?></td></tr>
	    <tr><td>PAHAM PENYAKIT</td><td><?php echo $PAHAM_PENYAKIT; ?></td></tr>
	    <tr><td>PAHAM OBAT</td><td><?php echo $PAHAM_OBAT; ?></td></tr>
	    <tr><td>PAHAM NUTRISI</td><td><?php echo $PAHAM_NUTRISI; ?></td></tr>
	    <tr><td>PAHAM RAWAT</td><td><?php echo $PAHAM_RAWAT; ?></td></tr>
	    <tr><td>HAMBATAN EDUKASI</td><td><?php echo $HAMBATAN_EDUKASI; ?></td></tr>
	    <tr><td>FREK MAKAN</td><td><?php echo $FREK_MAKAN; ?></td></tr>
	    <tr><td>JUM MAKAN</td><td><?php echo $JUM_MAKAN; ?></td></tr>
	    <tr><td>JEN MAKAN</td><td><?php echo $JEN_MAKAN; ?></td></tr>
	    <tr><td>KOM MAKAN</td><td><?php echo $KOM_MAKAN; ?></td></tr>
	    <tr><td>DIET</td><td><?php echo $DIET; ?></td></tr>
	    <tr><td>CARA MAKAN</td><td><?php echo $CARA_MAKAN; ?></td></tr>
	    <tr><td>GANGGUAN</td><td><?php echo $GANGGUAN; ?></td></tr>
	    <tr><td>FREK MINUM</td><td><?php echo $FREK_MINUM; ?></td></tr>
	    <tr><td>JUM MINUM</td><td><?php echo $JUM_MINUM; ?></td></tr>
	    <tr><td>JEN MINUM</td><td><?php echo $JEN_MINUM; ?></td></tr>
	    <tr><td>GANG MINUM</td><td><?php echo $GANG_MINUM; ?></td></tr>
	    <tr><td>FREK BAK</td><td><?php echo $FREK_BAK; ?></td></tr>
	    <tr><td>WARNA BAK</td><td><?php echo $WARNA_BAK; ?></td></tr>
	    <tr><td>JMLH BAK</td><td><?php echo $JMLH_BAK; ?></td></tr>
	    <tr><td>PENG KAT BAK</td><td><?php echo $PENG_KAT_BAK; ?></td></tr>
	    <tr><td>KEM HAN BAK</td><td><?php echo $KEM_HAN_BAK; ?></td></tr>
	    <tr><td>INKONT BAK</td><td><?php echo $INKONT_BAK; ?></td></tr>
	    <tr><td>DIURESIS BAK</td><td><?php echo $DIURESIS_BAK; ?></td></tr>
	    <tr><td>FREK BAB</td><td><?php echo $FREK_BAB; ?></td></tr>
	    <tr><td>WARNA BAB</td><td><?php echo $WARNA_BAB; ?></td></tr>
	    <tr><td>KONSIST BAB</td><td><?php echo $KONSIST_BAB; ?></td></tr>
	    <tr><td>GANG BAB</td><td><?php echo $GANG_BAB; ?></td></tr>
	    <tr><td>STOMA BAB</td><td><?php echo $STOMA_BAB; ?></td></tr>
	    <tr><td>PENG OBAT BAB</td><td><?php echo $PENG_OBAT_BAB; ?></td></tr>
	    <tr><td>IST SIANG</td><td><?php echo $IST_SIANG; ?></td></tr>
	    <tr><td>IST MALAM</td><td><?php echo $IST_MALAM; ?></td></tr>
	    <tr><td>IST CAHAYA</td><td><?php echo $IST_CAHAYA; ?></td></tr>
	    <tr><td>IST POSISI</td><td><?php echo $IST_POSISI; ?></td></tr>
	    <tr><td>IST LING</td><td><?php echo $IST_LING; ?></td></tr>
	    <tr><td>IST GANG TIDUR</td><td><?php echo $IST_GANG_TIDUR; ?></td></tr>
	    <tr><td>PENG OBAT IST</td><td><?php echo $PENG_OBAT_IST; ?></td></tr>
	    <tr><td>FREK MAND</td><td><?php echo $FREK_MAND; ?></td></tr>
	    <tr><td>CUC RAMB MAND</td><td><?php echo $CUC_RAMB_MAND; ?></td></tr>
	    <tr><td>SIH GIGI MAND</td><td><?php echo $SIH_GIGI_MAND; ?></td></tr>
	    <tr><td>BANT MAND</td><td><?php echo $BANT_MAND; ?></td></tr>
	    <tr><td>GANT PAKAI</td><td><?php echo $GANT_PAKAI; ?></td></tr>
	    <tr><td>PAK CUCI</td><td><?php echo $PAK_CUCI; ?></td></tr>
	    <tr><td>PAK BANT</td><td><?php echo $PAK_BANT; ?></td></tr>
	    <tr><td>ALT BANT</td><td><?php echo $ALT_BANT; ?></td></tr>
	    <tr><td>KEMP MUND</td><td><?php echo $KEMP_MUND; ?></td></tr>
	    <tr><td>BIL PUT</td><td><?php echo $BIL_PUT; ?></td></tr>
	    <tr><td>ADAPTIF</td><td><?php echo $ADAPTIF; ?></td></tr>
	    <tr><td>MALADAPTIF</td><td><?php echo $MALADAPTIF; ?></td></tr>
	    <tr><td>PENANGGUNGJAWAB NAMA</td><td><?php echo $PENANGGUNGJAWAB_NAMA; ?></td></tr>
	    <tr><td>PENANGGUNGJAWAB HUBUNGAN</td><td><?php echo $PENANGGUNGJAWAB_HUBUNGAN; ?></td></tr>
	    <tr><td>PENANGGUNGJAWAB ALAMAT</td><td><?php echo $PENANGGUNGJAWAB_ALAMAT; ?></td></tr>
	    <tr><td>PENANGGUNGJAWAB PHONE</td><td><?php echo $PENANGGUNGJAWAB_PHONE; ?></td></tr>
	    <tr><td>Obat2</td><td><?php echo $obat2; ?></td></tr>
	    <tr><td>PERBANDINGAN BB</td><td><?php echo $PERBANDINGAN_BB; ?></td></tr>
	    <tr><td>KONTINENSIA</td><td><?php echo $KONTINENSIA; ?></td></tr>
	    <tr><td>JENIS KULIT1</td><td><?php echo $JENIS_KULIT1; ?></td></tr>
	    <tr><td>MOBILITAS</td><td><?php echo $MOBILITAS; ?></td></tr>
	    <tr><td>JK</td><td><?php echo $JK; ?></td></tr>
	    <tr><td>UMUR</td><td><?php echo $UMUR; ?></td></tr>
	    <tr><td>NAFSU MAKAN</td><td><?php echo $NAFSU_MAKAN; ?></td></tr>
	    <tr><td>OBAT1</td><td><?php echo $OBAT1; ?></td></tr>
	    <tr><td>MALNUTRISI</td><td><?php echo $MALNUTRISI; ?></td></tr>
	    <tr><td>MOTORIK1</td><td><?php echo $MOTORIK1; ?></td></tr>
	    <tr><td>SPINAL</td><td><?php echo $SPINAL; ?></td></tr>
	    <tr><td>MEJA OPERASI</td><td><?php echo $MEJA_OPERASI; ?></td></tr>
	    <tr><td>RIWAYAT JATUH</td><td><?php echo $RIWAYAT_JATUH; ?></td></tr>
	    <tr><td>DIAGNOSIS SEKUNDER</td><td><?php echo $DIAGNOSIS_SEKUNDER; ?></td></tr>
	    <tr><td>ALAT BANTU</td><td><?php echo $ALAT_BANTU; ?></td></tr>
	    <tr><td>HEPARIN</td><td><?php echo $HEPARIN; ?></td></tr>
	    <tr><td>GAYA BERJALAN</td><td><?php echo $GAYA_BERJALAN; ?></td></tr>
	    <tr><td>KESADARAN1</td><td><?php echo $KESADARAN1; ?></td></tr>
	    <tr><td>NOMR LAMA</td><td><?php echo $NOMR_LAMA; ?></td></tr>
	    <tr><td>NO KARTU</td><td><?php echo $NO_KARTU; ?></td></tr>
	    <tr><td>JNS PASIEN</td><td><?php echo $JNS_PASIEN; ?></td></tr>
	    <tr><td>KDPROVIDER</td><td><?php echo $KDPROVIDER; ?></td></tr>
	    <tr><td>NMPROVIDER</td><td><?php echo $NMPROVIDER; ?></td></tr>
	    <tr><td>Kelas</td><td><?php echo $Kelas; ?></td></tr>
	    <tr><td>Catatan Pembayaran</td><td><?php echo $catatan_pembayaran; ?></td></tr>
	    <tr><td>NAMAREF</td><td><?php echo $NAMAREF; ?></td></tr>
	    <tr><td>NOMRREF</td><td><?php echo $NOMRREF; ?></td></tr>
	    <tr><td>KETERANGAN</td><td><?php echo $KETERANGAN; ?></td></tr>
	    <tr><td>SUKU</td><td><?php echo $SUKU; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('m_pasien') ?>" class="btn btn-default">Cancel</a></td></tr>
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