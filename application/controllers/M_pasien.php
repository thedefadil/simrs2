<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_pasien extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pasien_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'm_pasien/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'm_pasien/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'm_pasien/index.html';
            $config['first_url'] = base_url() . 'm_pasien/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_pasien_model->total_rows($q);
        $m_pasien = $this->M_pasien_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'm_pasien_data' => $m_pasien,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('m_pasien/m_pasien_list', $data);
    }

    public function read($id) 
    {
        $row = $this->M_pasien_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'NOMR' => $row->NOMR,
		'TITLE' => $row->TITLE,
		'NAMA' => $row->NAMA,
		'TEMPAT' => $row->TEMPAT,
		'TGLLAHIR' => $row->TGLLAHIR,
		'JENISKELAMIN' => $row->JENISKELAMIN,
		'ALAMAT' => $row->ALAMAT,
		'KELURAHAN' => $row->KELURAHAN,
		'KDKECAMATAN' => $row->KDKECAMATAN,
		'KOTA' => $row->KOTA,
		'KDPROVINSI' => $row->KDPROVINSI,
		'NOTELP' => $row->NOTELP,
		'NOKTP' => $row->NOKTP,
		'SUAMI_ORTU' => $row->SUAMI_ORTU,
		'PEKERJAAN' => $row->PEKERJAAN,
		'STATUS' => $row->STATUS,
		'AGAMA' => $row->AGAMA,
		'PENDIDIKAN' => $row->PENDIDIKAN,
		'KDCARABAYAR' => $row->KDCARABAYAR,
		'NIP' => $row->NIP,
		'TGLDAFTAR' => $row->TGLDAFTAR,
		'ALAMAT_KTP' => $row->ALAMAT_KTP,
		'PARENT_NOMR' => $row->PARENT_NOMR,
		'NAMA_OBAT' => $row->NAMA_OBAT,
		'DOSIS' => $row->DOSIS,
		'CARA_PEMBERIAN' => $row->CARA_PEMBERIAN,
		'FREKUENSI' => $row->FREKUENSI,
		'WAKTU_TGL' => $row->WAKTU_TGL,
		'LAMA_WAKTU' => $row->LAMA_WAKTU,
		'ALERGI_OBAT' => $row->ALERGI_OBAT,
		'REAKSI_ALERGI' => $row->REAKSI_ALERGI,
		'RIWAYAT_KES' => $row->RIWAYAT_KES,
		'BB_LAHIR' => $row->BB_LAHIR,
		'BB_SEKARANG' => $row->BB_SEKARANG,
		'FISIK_FONTANEL' => $row->FISIK_FONTANEL,
		'FISIK_REFLEKS' => $row->FISIK_REFLEKS,
		'FISIK_SENSASI' => $row->FISIK_SENSASI,
		'MOTORIK_KASAR' => $row->MOTORIK_KASAR,
		'MOTORIK_HALUS' => $row->MOTORIK_HALUS,
		'MAMPU_BICARA' => $row->MAMPU_BICARA,
		'MAMPU_SOSIALISASI' => $row->MAMPU_SOSIALISASI,
		'BCG' => $row->BCG,
		'POLIO' => $row->POLIO,
		'DPT' => $row->DPT,
		'CAMPAK' => $row->CAMPAK,
		'HEPATITIS_B' => $row->HEPATITIS_B,
		'TD' => $row->TD,
		'SUHU' => $row->SUHU,
		'RR' => $row->RR,
		'NADI' => $row->NADI,
		'BB' => $row->BB,
		'TB' => $row->TB,
		'EYE' => $row->EYE,
		'MOTORIK' => $row->MOTORIK,
		'VERBAL' => $row->VERBAL,
		'TOTAL_GCS' => $row->TOTAL_GCS,
		'REAKSI_PUPIL' => $row->REAKSI_PUPIL,
		'KESADARAN' => $row->KESADARAN,
		'KEPALA' => $row->KEPALA,
		'RAMBUT' => $row->RAMBUT,
		'MUKA' => $row->MUKA,
		'MATA' => $row->MATA,
		'GANG_LIHAT' => $row->GANG_LIHAT,
		'ALATBANTU_LIHAT' => $row->ALATBANTU_LIHAT,
		'BENTUK' => $row->BENTUK,
		'PENDENGARAN' => $row->PENDENGARAN,
		'LUB_TELINGA' => $row->LUB_TELINGA,
		'BENTUK_HIDUNG' => $row->BENTUK_HIDUNG,
		'MEMBRAN_MUK' => $row->MEMBRAN_MUK,
		'MAMPU_HIDU' => $row->MAMPU_HIDU,
		'ALAT_HIDUNG' => $row->ALAT_HIDUNG,
		'RONGGA_MULUT' => $row->RONGGA_MULUT,
		'WARNA_MEMBRAN' => $row->WARNA_MEMBRAN,
		'LEMBAB' => $row->LEMBAB,
		'STOMATITIS' => $row->STOMATITIS,
		'LIDAH' => $row->LIDAH,
		'GIGI' => $row->GIGI,
		'TONSIL' => $row->TONSIL,
		'KELAINAN' => $row->KELAINAN,
		'PERGERAKAN' => $row->PERGERAKAN,
		'KEL_TIROID' => $row->KEL_TIROID,
		'KEL_GETAH' => $row->KEL_GETAH,
		'TEKANAN_VENA' => $row->TEKANAN_VENA,
		'REF_MENELAN' => $row->REF_MENELAN,
		'NYERI' => $row->NYERI,
		'KREPITASI' => $row->KREPITASI,
		'KEL_LAIN' => $row->KEL_LAIN,
		'BENTUK_DADA' => $row->BENTUK_DADA,
		'POLA_NAPAS' => $row->POLA_NAPAS,
		'BENTUK_THORAKS' => $row->BENTUK_THORAKS,
		'PAL_KREP' => $row->PAL_KREP,
		'BENJOLAN' => $row->BENJOLAN,
		'PAL_NYERI' => $row->PAL_NYERI,
		'PERKUSI' => $row->PERKUSI,
		'PARU' => $row->PARU,
		'JANTUNG' => $row->JANTUNG,
		'SUARA_JANTUNG' => $row->SUARA_JANTUNG,
		'ALATBANTU_JAN' => $row->ALATBANTU_JAN,
		'BENTUK_ABDOMEN' => $row->BENTUK_ABDOMEN,
		'AUSKULTASI' => $row->AUSKULTASI,
		'NYERI_PASI' => $row->NYERI_PASI,
		'PEM_KELENJAR' => $row->PEM_KELENJAR,
		'PERKUSI_AUS' => $row->PERKUSI_AUS,
		'VAGINA' => $row->VAGINA,
		'MENSTRUASI' => $row->MENSTRUASI,
		'KATETER' => $row->KATETER,
		'LABIA_PROM' => $row->LABIA_PROM,
		'HAMIL' => $row->HAMIL,
		'TGL_HAID' => $row->TGL_HAID,
		'PERIKSA_CERVIX' => $row->PERIKSA_CERVIX,
		'BENTUK_PAYUDARA' => $row->BENTUK_PAYUDARA,
		'KENYAL' => $row->KENYAL,
		'MASSA' => $row->MASSA,
		'NYERI_RABA' => $row->NYERI_RABA,
		'BENTUK_PUTING' => $row->BENTUK_PUTING,
		'MAMMO' => $row->MAMMO,
		'ALAT_KONTRASEPSI' => $row->ALAT_KONTRASEPSI,
		'MASALAH_SEKS' => $row->MASALAH_SEKS,
		'PREPUTIUM' => $row->PREPUTIUM,
		'MASALAH_PROSTAT' => $row->MASALAH_PROSTAT,
		'BENTUK_SKROTUM' => $row->BENTUK_SKROTUM,
		'TESTIS' => $row->TESTIS,
		'MASSA_BEN' => $row->MASSA_BEN,
		'HERNIASI' => $row->HERNIASI,
		'LAIN2' => $row->LAIN2,
		'ALAT_KONTRA' => $row->ALAT_KONTRA,
		'MASALAH_REPRO' => $row->MASALAH_REPRO,
		'EKSTREMITAS_ATAS' => $row->EKSTREMITAS_ATAS,
		'EKSTREMITAS_BAWAH' => $row->EKSTREMITAS_BAWAH,
		'AKTIVITAS' => $row->AKTIVITAS,
		'BERJALAN' => $row->BERJALAN,
		'SISTEM_INTE' => $row->SISTEM_INTE,
		'KENYAMANAN' => $row->KENYAMANAN,
		'KES_DIRI' => $row->KES_DIRI,
		'SOS_SUPORT' => $row->SOS_SUPORT,
		'ANSIETAS' => $row->ANSIETAS,
		'KEHILANGAN' => $row->KEHILANGAN,
		'STATUS_EMOSI' => $row->STATUS_EMOSI,
		'KONSEP_DIRI' => $row->KONSEP_DIRI,
		'RESPON_HILANG' => $row->RESPON_HILANG,
		'SUMBER_STRESS' => $row->SUMBER_STRESS,
		'BERARTI' => $row->BERARTI,
		'TERLIBAT' => $row->TERLIBAT,
		'HUBUNGAN' => $row->HUBUNGAN,
		'KOMUNIKASI' => $row->KOMUNIKASI,
		'KEPUTUSAN' => $row->KEPUTUSAN,
		'MENGASUH' => $row->MENGASUH,
		'DUKUNGAN' => $row->DUKUNGAN,
		'REAKSI' => $row->REAKSI,
		'BUDAYA' => $row->BUDAYA,
		'POLA_AKTIVITAS' => $row->POLA_AKTIVITAS,
		'POLA_ISTIRAHAT' => $row->POLA_ISTIRAHAT,
		'POLA_MAKAN' => $row->POLA_MAKAN,
		'PANTANGAN' => $row->PANTANGAN,
		'KEPERCAYAAN' => $row->KEPERCAYAAN,
		'PANTANGAN_HARI' => $row->PANTANGAN_HARI,
		'PANTANGAN_LAIN' => $row->PANTANGAN_LAIN,
		'ANJURAN' => $row->ANJURAN,
		'NILAI_KEYAKINAN' => $row->NILAI_KEYAKINAN,
		'KEGIATAN_IBADAH' => $row->KEGIATAN_IBADAH,
		'PENG_AGAMA' => $row->PENG_AGAMA,
		'SPIRIT' => $row->SPIRIT,
		'BANTUAN' => $row->BANTUAN,
		'PAHAM_PENYAKIT' => $row->PAHAM_PENYAKIT,
		'PAHAM_OBAT' => $row->PAHAM_OBAT,
		'PAHAM_NUTRISI' => $row->PAHAM_NUTRISI,
		'PAHAM_RAWAT' => $row->PAHAM_RAWAT,
		'HAMBATAN_EDUKASI' => $row->HAMBATAN_EDUKASI,
		'FREK_MAKAN' => $row->FREK_MAKAN,
		'JUM_MAKAN' => $row->JUM_MAKAN,
		'JEN_MAKAN' => $row->JEN_MAKAN,
		'KOM_MAKAN' => $row->KOM_MAKAN,
		'DIET' => $row->DIET,
		'CARA_MAKAN' => $row->CARA_MAKAN,
		'GANGGUAN' => $row->GANGGUAN,
		'FREK_MINUM' => $row->FREK_MINUM,
		'JUM_MINUM' => $row->JUM_MINUM,
		'JEN_MINUM' => $row->JEN_MINUM,
		'GANG_MINUM' => $row->GANG_MINUM,
		'FREK_BAK' => $row->FREK_BAK,
		'WARNA_BAK' => $row->WARNA_BAK,
		'JMLH_BAK' => $row->JMLH_BAK,
		'PENG_KAT_BAK' => $row->PENG_KAT_BAK,
		'KEM_HAN_BAK' => $row->KEM_HAN_BAK,
		'INKONT_BAK' => $row->INKONT_BAK,
		'DIURESIS_BAK' => $row->DIURESIS_BAK,
		'FREK_BAB' => $row->FREK_BAB,
		'WARNA_BAB' => $row->WARNA_BAB,
		'KONSIST_BAB' => $row->KONSIST_BAB,
		'GANG_BAB' => $row->GANG_BAB,
		'STOMA_BAB' => $row->STOMA_BAB,
		'PENG_OBAT_BAB' => $row->PENG_OBAT_BAB,
		'IST_SIANG' => $row->IST_SIANG,
		'IST_MALAM' => $row->IST_MALAM,
		'IST_CAHAYA' => $row->IST_CAHAYA,
		'IST_POSISI' => $row->IST_POSISI,
		'IST_LING' => $row->IST_LING,
		'IST_GANG_TIDUR' => $row->IST_GANG_TIDUR,
		'PENG_OBAT_IST' => $row->PENG_OBAT_IST,
		'FREK_MAND' => $row->FREK_MAND,
		'CUC_RAMB_MAND' => $row->CUC_RAMB_MAND,
		'SIH_GIGI_MAND' => $row->SIH_GIGI_MAND,
		'BANT_MAND' => $row->BANT_MAND,
		'GANT_PAKAI' => $row->GANT_PAKAI,
		'PAK_CUCI' => $row->PAK_CUCI,
		'PAK_BANT' => $row->PAK_BANT,
		'ALT_BANT' => $row->ALT_BANT,
		'KEMP_MUND' => $row->KEMP_MUND,
		'BIL_PUT' => $row->BIL_PUT,
		'ADAPTIF' => $row->ADAPTIF,
		'MALADAPTIF' => $row->MALADAPTIF,
		'PENANGGUNGJAWAB_NAMA' => $row->PENANGGUNGJAWAB_NAMA,
		'PENANGGUNGJAWAB_HUBUNGAN' => $row->PENANGGUNGJAWAB_HUBUNGAN,
		'PENANGGUNGJAWAB_ALAMAT' => $row->PENANGGUNGJAWAB_ALAMAT,
		'PENANGGUNGJAWAB_PHONE' => $row->PENANGGUNGJAWAB_PHONE,
		'obat2' => $row->obat2,
		'PERBANDINGAN_BB' => $row->PERBANDINGAN_BB,
		'KONTINENSIA' => $row->KONTINENSIA,
		'JENIS_KULIT1' => $row->JENIS_KULIT1,
		'MOBILITAS' => $row->MOBILITAS,
		'JK' => $row->JK,
		'UMUR' => $row->UMUR,
		'NAFSU_MAKAN' => $row->NAFSU_MAKAN,
		'OBAT1' => $row->OBAT1,
		'MALNUTRISI' => $row->MALNUTRISI,
		'MOTORIK1' => $row->MOTORIK1,
		'SPINAL' => $row->SPINAL,
		'MEJA_OPERASI' => $row->MEJA_OPERASI,
		'RIWAYAT_JATUH' => $row->RIWAYAT_JATUH,
		'DIAGNOSIS_SEKUNDER' => $row->DIAGNOSIS_SEKUNDER,
		'ALAT_BANTU' => $row->ALAT_BANTU,
		'HEPARIN' => $row->HEPARIN,
		'GAYA_BERJALAN' => $row->GAYA_BERJALAN,
		'KESADARAN1' => $row->KESADARAN1,
		'NOMR_LAMA' => $row->NOMR_LAMA,
		'NO_KARTU' => $row->NO_KARTU,
		'JNS_PASIEN' => $row->JNS_PASIEN,
		'KDPROVIDER' => $row->KDPROVIDER,
		'NMPROVIDER' => $row->NMPROVIDER,
		'Kelas' => $row->Kelas,
		'catatan_pembayaran' => $row->catatan_pembayaran,
		'NAMAREF' => $row->NAMAREF,
		'NOMRREF' => $row->NOMRREF,
		'KETERANGAN' => $row->KETERANGAN,
		'SUKU' => $row->SUKU,
	    );
            $this->load->view('m_pasien/m_pasien_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('m_pasien'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('m_pasien/create_action'),
	    'id' => set_value('id'),
	    'NOMR' => set_value('NOMR'),
	    'TITLE' => set_value('TITLE'),
	    'NAMA' => set_value('NAMA'),
	    'TEMPAT' => set_value('TEMPAT'),
	    'TGLLAHIR' => set_value('TGLLAHIR'),
	    'JENISKELAMIN' => set_value('JENISKELAMIN'),
	    'ALAMAT' => set_value('ALAMAT'),
	    'KELURAHAN' => set_value('KELURAHAN'),
	    'KDKECAMATAN' => set_value('KDKECAMATAN'),
	    'KOTA' => set_value('KOTA'),
	    'KDPROVINSI' => set_value('KDPROVINSI'),
	    'NOTELP' => set_value('NOTELP'),
	    'NOKTP' => set_value('NOKTP'),
	    'SUAMI_ORTU' => set_value('SUAMI_ORTU'),
	    'PEKERJAAN' => set_value('PEKERJAAN'),
	    'STATUS' => set_value('STATUS'),
	    'AGAMA' => set_value('AGAMA'),
	    'PENDIDIKAN' => set_value('PENDIDIKAN'),
	    'KDCARABAYAR' => set_value('KDCARABAYAR'),
	    'NIP' => set_value('NIP'),
	    'TGLDAFTAR' => set_value('TGLDAFTAR'),
	    'ALAMAT_KTP' => set_value('ALAMAT_KTP'),
	    'PARENT_NOMR' => set_value('PARENT_NOMR'),
	    'NAMA_OBAT' => set_value('NAMA_OBAT'),
	    'DOSIS' => set_value('DOSIS'),
	    'CARA_PEMBERIAN' => set_value('CARA_PEMBERIAN'),
	    'FREKUENSI' => set_value('FREKUENSI'),
	    'WAKTU_TGL' => set_value('WAKTU_TGL'),
	    'LAMA_WAKTU' => set_value('LAMA_WAKTU'),
	    'ALERGI_OBAT' => set_value('ALERGI_OBAT'),
	    'REAKSI_ALERGI' => set_value('REAKSI_ALERGI'),
	    'RIWAYAT_KES' => set_value('RIWAYAT_KES'),
	    'BB_LAHIR' => set_value('BB_LAHIR'),
	    'BB_SEKARANG' => set_value('BB_SEKARANG'),
	    'FISIK_FONTANEL' => set_value('FISIK_FONTANEL'),
	    'FISIK_REFLEKS' => set_value('FISIK_REFLEKS'),
	    'FISIK_SENSASI' => set_value('FISIK_SENSASI'),
	    'MOTORIK_KASAR' => set_value('MOTORIK_KASAR'),
	    'MOTORIK_HALUS' => set_value('MOTORIK_HALUS'),
	    'MAMPU_BICARA' => set_value('MAMPU_BICARA'),
	    'MAMPU_SOSIALISASI' => set_value('MAMPU_SOSIALISASI'),
	    'BCG' => set_value('BCG'),
	    'POLIO' => set_value('POLIO'),
	    'DPT' => set_value('DPT'),
	    'CAMPAK' => set_value('CAMPAK'),
	    'HEPATITIS_B' => set_value('HEPATITIS_B'),
	    'TD' => set_value('TD'),
	    'SUHU' => set_value('SUHU'),
	    'RR' => set_value('RR'),
	    'NADI' => set_value('NADI'),
	    'BB' => set_value('BB'),
	    'TB' => set_value('TB'),
	    'EYE' => set_value('EYE'),
	    'MOTORIK' => set_value('MOTORIK'),
	    'VERBAL' => set_value('VERBAL'),
	    'TOTAL_GCS' => set_value('TOTAL_GCS'),
	    'REAKSI_PUPIL' => set_value('REAKSI_PUPIL'),
	    'KESADARAN' => set_value('KESADARAN'),
	    'KEPALA' => set_value('KEPALA'),
	    'RAMBUT' => set_value('RAMBUT'),
	    'MUKA' => set_value('MUKA'),
	    'MATA' => set_value('MATA'),
	    'GANG_LIHAT' => set_value('GANG_LIHAT'),
	    'ALATBANTU_LIHAT' => set_value('ALATBANTU_LIHAT'),
	    'BENTUK' => set_value('BENTUK'),
	    'PENDENGARAN' => set_value('PENDENGARAN'),
	    'LUB_TELINGA' => set_value('LUB_TELINGA'),
	    'BENTUK_HIDUNG' => set_value('BENTUK_HIDUNG'),
	    'MEMBRAN_MUK' => set_value('MEMBRAN_MUK'),
	    'MAMPU_HIDU' => set_value('MAMPU_HIDU'),
	    'ALAT_HIDUNG' => set_value('ALAT_HIDUNG'),
	    'RONGGA_MULUT' => set_value('RONGGA_MULUT'),
	    'WARNA_MEMBRAN' => set_value('WARNA_MEMBRAN'),
	    'LEMBAB' => set_value('LEMBAB'),
	    'STOMATITIS' => set_value('STOMATITIS'),
	    'LIDAH' => set_value('LIDAH'),
	    'GIGI' => set_value('GIGI'),
	    'TONSIL' => set_value('TONSIL'),
	    'KELAINAN' => set_value('KELAINAN'),
	    'PERGERAKAN' => set_value('PERGERAKAN'),
	    'KEL_TIROID' => set_value('KEL_TIROID'),
	    'KEL_GETAH' => set_value('KEL_GETAH'),
	    'TEKANAN_VENA' => set_value('TEKANAN_VENA'),
	    'REF_MENELAN' => set_value('REF_MENELAN'),
	    'NYERI' => set_value('NYERI'),
	    'KREPITASI' => set_value('KREPITASI'),
	    'KEL_LAIN' => set_value('KEL_LAIN'),
	    'BENTUK_DADA' => set_value('BENTUK_DADA'),
	    'POLA_NAPAS' => set_value('POLA_NAPAS'),
	    'BENTUK_THORAKS' => set_value('BENTUK_THORAKS'),
	    'PAL_KREP' => set_value('PAL_KREP'),
	    'BENJOLAN' => set_value('BENJOLAN'),
	    'PAL_NYERI' => set_value('PAL_NYERI'),
	    'PERKUSI' => set_value('PERKUSI'),
	    'PARU' => set_value('PARU'),
	    'JANTUNG' => set_value('JANTUNG'),
	    'SUARA_JANTUNG' => set_value('SUARA_JANTUNG'),
	    'ALATBANTU_JAN' => set_value('ALATBANTU_JAN'),
	    'BENTUK_ABDOMEN' => set_value('BENTUK_ABDOMEN'),
	    'AUSKULTASI' => set_value('AUSKULTASI'),
	    'NYERI_PASI' => set_value('NYERI_PASI'),
	    'PEM_KELENJAR' => set_value('PEM_KELENJAR'),
	    'PERKUSI_AUS' => set_value('PERKUSI_AUS'),
	    'VAGINA' => set_value('VAGINA'),
	    'MENSTRUASI' => set_value('MENSTRUASI'),
	    'KATETER' => set_value('KATETER'),
	    'LABIA_PROM' => set_value('LABIA_PROM'),
	    'HAMIL' => set_value('HAMIL'),
	    'TGL_HAID' => set_value('TGL_HAID'),
	    'PERIKSA_CERVIX' => set_value('PERIKSA_CERVIX'),
	    'BENTUK_PAYUDARA' => set_value('BENTUK_PAYUDARA'),
	    'KENYAL' => set_value('KENYAL'),
	    'MASSA' => set_value('MASSA'),
	    'NYERI_RABA' => set_value('NYERI_RABA'),
	    'BENTUK_PUTING' => set_value('BENTUK_PUTING'),
	    'MAMMO' => set_value('MAMMO'),
	    'ALAT_KONTRASEPSI' => set_value('ALAT_KONTRASEPSI'),
	    'MASALAH_SEKS' => set_value('MASALAH_SEKS'),
	    'PREPUTIUM' => set_value('PREPUTIUM'),
	    'MASALAH_PROSTAT' => set_value('MASALAH_PROSTAT'),
	    'BENTUK_SKROTUM' => set_value('BENTUK_SKROTUM'),
	    'TESTIS' => set_value('TESTIS'),
	    'MASSA_BEN' => set_value('MASSA_BEN'),
	    'HERNIASI' => set_value('HERNIASI'),
	    'LAIN2' => set_value('LAIN2'),
	    'ALAT_KONTRA' => set_value('ALAT_KONTRA'),
	    'MASALAH_REPRO' => set_value('MASALAH_REPRO'),
	    'EKSTREMITAS_ATAS' => set_value('EKSTREMITAS_ATAS'),
	    'EKSTREMITAS_BAWAH' => set_value('EKSTREMITAS_BAWAH'),
	    'AKTIVITAS' => set_value('AKTIVITAS'),
	    'BERJALAN' => set_value('BERJALAN'),
	    'SISTEM_INTE' => set_value('SISTEM_INTE'),
	    'KENYAMANAN' => set_value('KENYAMANAN'),
	    'KES_DIRI' => set_value('KES_DIRI'),
	    'SOS_SUPORT' => set_value('SOS_SUPORT'),
	    'ANSIETAS' => set_value('ANSIETAS'),
	    'KEHILANGAN' => set_value('KEHILANGAN'),
	    'STATUS_EMOSI' => set_value('STATUS_EMOSI'),
	    'KONSEP_DIRI' => set_value('KONSEP_DIRI'),
	    'RESPON_HILANG' => set_value('RESPON_HILANG'),
	    'SUMBER_STRESS' => set_value('SUMBER_STRESS'),
	    'BERARTI' => set_value('BERARTI'),
	    'TERLIBAT' => set_value('TERLIBAT'),
	    'HUBUNGAN' => set_value('HUBUNGAN'),
	    'KOMUNIKASI' => set_value('KOMUNIKASI'),
	    'KEPUTUSAN' => set_value('KEPUTUSAN'),
	    'MENGASUH' => set_value('MENGASUH'),
	    'DUKUNGAN' => set_value('DUKUNGAN'),
	    'REAKSI' => set_value('REAKSI'),
	    'BUDAYA' => set_value('BUDAYA'),
	    'POLA_AKTIVITAS' => set_value('POLA_AKTIVITAS'),
	    'POLA_ISTIRAHAT' => set_value('POLA_ISTIRAHAT'),
	    'POLA_MAKAN' => set_value('POLA_MAKAN'),
	    'PANTANGAN' => set_value('PANTANGAN'),
	    'KEPERCAYAAN' => set_value('KEPERCAYAAN'),
	    'PANTANGAN_HARI' => set_value('PANTANGAN_HARI'),
	    'PANTANGAN_LAIN' => set_value('PANTANGAN_LAIN'),
	    'ANJURAN' => set_value('ANJURAN'),
	    'NILAI_KEYAKINAN' => set_value('NILAI_KEYAKINAN'),
	    'KEGIATAN_IBADAH' => set_value('KEGIATAN_IBADAH'),
	    'PENG_AGAMA' => set_value('PENG_AGAMA'),
	    'SPIRIT' => set_value('SPIRIT'),
	    'BANTUAN' => set_value('BANTUAN'),
	    'PAHAM_PENYAKIT' => set_value('PAHAM_PENYAKIT'),
	    'PAHAM_OBAT' => set_value('PAHAM_OBAT'),
	    'PAHAM_NUTRISI' => set_value('PAHAM_NUTRISI'),
	    'PAHAM_RAWAT' => set_value('PAHAM_RAWAT'),
	    'HAMBATAN_EDUKASI' => set_value('HAMBATAN_EDUKASI'),
	    'FREK_MAKAN' => set_value('FREK_MAKAN'),
	    'JUM_MAKAN' => set_value('JUM_MAKAN'),
	    'JEN_MAKAN' => set_value('JEN_MAKAN'),
	    'KOM_MAKAN' => set_value('KOM_MAKAN'),
	    'DIET' => set_value('DIET'),
	    'CARA_MAKAN' => set_value('CARA_MAKAN'),
	    'GANGGUAN' => set_value('GANGGUAN'),
	    'FREK_MINUM' => set_value('FREK_MINUM'),
	    'JUM_MINUM' => set_value('JUM_MINUM'),
	    'JEN_MINUM' => set_value('JEN_MINUM'),
	    'GANG_MINUM' => set_value('GANG_MINUM'),
	    'FREK_BAK' => set_value('FREK_BAK'),
	    'WARNA_BAK' => set_value('WARNA_BAK'),
	    'JMLH_BAK' => set_value('JMLH_BAK'),
	    'PENG_KAT_BAK' => set_value('PENG_KAT_BAK'),
	    'KEM_HAN_BAK' => set_value('KEM_HAN_BAK'),
	    'INKONT_BAK' => set_value('INKONT_BAK'),
	    'DIURESIS_BAK' => set_value('DIURESIS_BAK'),
	    'FREK_BAB' => set_value('FREK_BAB'),
	    'WARNA_BAB' => set_value('WARNA_BAB'),
	    'KONSIST_BAB' => set_value('KONSIST_BAB'),
	    'GANG_BAB' => set_value('GANG_BAB'),
	    'STOMA_BAB' => set_value('STOMA_BAB'),
	    'PENG_OBAT_BAB' => set_value('PENG_OBAT_BAB'),
	    'IST_SIANG' => set_value('IST_SIANG'),
	    'IST_MALAM' => set_value('IST_MALAM'),
	    'IST_CAHAYA' => set_value('IST_CAHAYA'),
	    'IST_POSISI' => set_value('IST_POSISI'),
	    'IST_LING' => set_value('IST_LING'),
	    'IST_GANG_TIDUR' => set_value('IST_GANG_TIDUR'),
	    'PENG_OBAT_IST' => set_value('PENG_OBAT_IST'),
	    'FREK_MAND' => set_value('FREK_MAND'),
	    'CUC_RAMB_MAND' => set_value('CUC_RAMB_MAND'),
	    'SIH_GIGI_MAND' => set_value('SIH_GIGI_MAND'),
	    'BANT_MAND' => set_value('BANT_MAND'),
	    'GANT_PAKAI' => set_value('GANT_PAKAI'),
	    'PAK_CUCI' => set_value('PAK_CUCI'),
	    'PAK_BANT' => set_value('PAK_BANT'),
	    'ALT_BANT' => set_value('ALT_BANT'),
	    'KEMP_MUND' => set_value('KEMP_MUND'),
	    'BIL_PUT' => set_value('BIL_PUT'),
	    'ADAPTIF' => set_value('ADAPTIF'),
	    'MALADAPTIF' => set_value('MALADAPTIF'),
	    'PENANGGUNGJAWAB_NAMA' => set_value('PENANGGUNGJAWAB_NAMA'),
	    'PENANGGUNGJAWAB_HUBUNGAN' => set_value('PENANGGUNGJAWAB_HUBUNGAN'),
	    'PENANGGUNGJAWAB_ALAMAT' => set_value('PENANGGUNGJAWAB_ALAMAT'),
	    'PENANGGUNGJAWAB_PHONE' => set_value('PENANGGUNGJAWAB_PHONE'),
	    'obat2' => set_value('obat2'),
	    'PERBANDINGAN_BB' => set_value('PERBANDINGAN_BB'),
	    'KONTINENSIA' => set_value('KONTINENSIA'),
	    'JENIS_KULIT1' => set_value('JENIS_KULIT1'),
	    'MOBILITAS' => set_value('MOBILITAS'),
	    'JK' => set_value('JK'),
	    'UMUR' => set_value('UMUR'),
	    'NAFSU_MAKAN' => set_value('NAFSU_MAKAN'),
	    'OBAT1' => set_value('OBAT1'),
	    'MALNUTRISI' => set_value('MALNUTRISI'),
	    'MOTORIK1' => set_value('MOTORIK1'),
	    'SPINAL' => set_value('SPINAL'),
	    'MEJA_OPERASI' => set_value('MEJA_OPERASI'),
	    'RIWAYAT_JATUH' => set_value('RIWAYAT_JATUH'),
	    'DIAGNOSIS_SEKUNDER' => set_value('DIAGNOSIS_SEKUNDER'),
	    'ALAT_BANTU' => set_value('ALAT_BANTU'),
	    'HEPARIN' => set_value('HEPARIN'),
	    'GAYA_BERJALAN' => set_value('GAYA_BERJALAN'),
	    'KESADARAN1' => set_value('KESADARAN1'),
	    'NOMR_LAMA' => set_value('NOMR_LAMA'),
	    'NO_KARTU' => set_value('NO_KARTU'),
	    'JNS_PASIEN' => set_value('JNS_PASIEN'),
	    'KDPROVIDER' => set_value('KDPROVIDER'),
	    'NMPROVIDER' => set_value('NMPROVIDER'),
	    'Kelas' => set_value('Kelas'),
	    'catatan_pembayaran' => set_value('catatan_pembayaran'),
	    'NAMAREF' => set_value('NAMAREF'),
	    'NOMRREF' => set_value('NOMRREF'),
	    'KETERANGAN' => set_value('KETERANGAN'),
	    'SUKU' => set_value('SUKU'),
	);
        $this->load->view('m_pasien/m_pasien_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'NOMR' => $this->input->post('NOMR',TRUE),
		'TITLE' => $this->input->post('TITLE',TRUE),
		'NAMA' => $this->input->post('NAMA',TRUE),
		'TEMPAT' => $this->input->post('TEMPAT',TRUE),
		'TGLLAHIR' => $this->input->post('TGLLAHIR',TRUE),
		'JENISKELAMIN' => $this->input->post('JENISKELAMIN',TRUE),
		'ALAMAT' => $this->input->post('ALAMAT',TRUE),
		'KELURAHAN' => $this->input->post('KELURAHAN',TRUE),
		'KDKECAMATAN' => $this->input->post('KDKECAMATAN',TRUE),
		'KOTA' => $this->input->post('KOTA',TRUE),
		'KDPROVINSI' => $this->input->post('KDPROVINSI',TRUE),
		'NOTELP' => $this->input->post('NOTELP',TRUE),
		'NOKTP' => $this->input->post('NOKTP',TRUE),
		'SUAMI_ORTU' => $this->input->post('SUAMI_ORTU',TRUE),
		'PEKERJAAN' => $this->input->post('PEKERJAAN',TRUE),
		'STATUS' => $this->input->post('STATUS',TRUE),
		'AGAMA' => $this->input->post('AGAMA',TRUE),
		'PENDIDIKAN' => $this->input->post('PENDIDIKAN',TRUE),
		'KDCARABAYAR' => $this->input->post('KDCARABAYAR',TRUE),
		'NIP' => $this->input->post('NIP',TRUE),
		'TGLDAFTAR' => $this->input->post('TGLDAFTAR',TRUE),
		'ALAMAT_KTP' => $this->input->post('ALAMAT_KTP',TRUE),
		'PARENT_NOMR' => $this->input->post('PARENT_NOMR',TRUE),
		'NAMA_OBAT' => $this->input->post('NAMA_OBAT',TRUE),
		'DOSIS' => $this->input->post('DOSIS',TRUE),
		'CARA_PEMBERIAN' => $this->input->post('CARA_PEMBERIAN',TRUE),
		'FREKUENSI' => $this->input->post('FREKUENSI',TRUE),
		'WAKTU_TGL' => $this->input->post('WAKTU_TGL',TRUE),
		'LAMA_WAKTU' => $this->input->post('LAMA_WAKTU',TRUE),
		'ALERGI_OBAT' => $this->input->post('ALERGI_OBAT',TRUE),
		'REAKSI_ALERGI' => $this->input->post('REAKSI_ALERGI',TRUE),
		'RIWAYAT_KES' => $this->input->post('RIWAYAT_KES',TRUE),
		'BB_LAHIR' => $this->input->post('BB_LAHIR',TRUE),
		'BB_SEKARANG' => $this->input->post('BB_SEKARANG',TRUE),
		'FISIK_FONTANEL' => $this->input->post('FISIK_FONTANEL',TRUE),
		'FISIK_REFLEKS' => $this->input->post('FISIK_REFLEKS',TRUE),
		'FISIK_SENSASI' => $this->input->post('FISIK_SENSASI',TRUE),
		'MOTORIK_KASAR' => $this->input->post('MOTORIK_KASAR',TRUE),
		'MOTORIK_HALUS' => $this->input->post('MOTORIK_HALUS',TRUE),
		'MAMPU_BICARA' => $this->input->post('MAMPU_BICARA',TRUE),
		'MAMPU_SOSIALISASI' => $this->input->post('MAMPU_SOSIALISASI',TRUE),
		'BCG' => $this->input->post('BCG',TRUE),
		'POLIO' => $this->input->post('POLIO',TRUE),
		'DPT' => $this->input->post('DPT',TRUE),
		'CAMPAK' => $this->input->post('CAMPAK',TRUE),
		'HEPATITIS_B' => $this->input->post('HEPATITIS_B',TRUE),
		'TD' => $this->input->post('TD',TRUE),
		'SUHU' => $this->input->post('SUHU',TRUE),
		'RR' => $this->input->post('RR',TRUE),
		'NADI' => $this->input->post('NADI',TRUE),
		'BB' => $this->input->post('BB',TRUE),
		'TB' => $this->input->post('TB',TRUE),
		'EYE' => $this->input->post('EYE',TRUE),
		'MOTORIK' => $this->input->post('MOTORIK',TRUE),
		'VERBAL' => $this->input->post('VERBAL',TRUE),
		'TOTAL_GCS' => $this->input->post('TOTAL_GCS',TRUE),
		'REAKSI_PUPIL' => $this->input->post('REAKSI_PUPIL',TRUE),
		'KESADARAN' => $this->input->post('KESADARAN',TRUE),
		'KEPALA' => $this->input->post('KEPALA',TRUE),
		'RAMBUT' => $this->input->post('RAMBUT',TRUE),
		'MUKA' => $this->input->post('MUKA',TRUE),
		'MATA' => $this->input->post('MATA',TRUE),
		'GANG_LIHAT' => $this->input->post('GANG_LIHAT',TRUE),
		'ALATBANTU_LIHAT' => $this->input->post('ALATBANTU_LIHAT',TRUE),
		'BENTUK' => $this->input->post('BENTUK',TRUE),
		'PENDENGARAN' => $this->input->post('PENDENGARAN',TRUE),
		'LUB_TELINGA' => $this->input->post('LUB_TELINGA',TRUE),
		'BENTUK_HIDUNG' => $this->input->post('BENTUK_HIDUNG',TRUE),
		'MEMBRAN_MUK' => $this->input->post('MEMBRAN_MUK',TRUE),
		'MAMPU_HIDU' => $this->input->post('MAMPU_HIDU',TRUE),
		'ALAT_HIDUNG' => $this->input->post('ALAT_HIDUNG',TRUE),
		'RONGGA_MULUT' => $this->input->post('RONGGA_MULUT',TRUE),
		'WARNA_MEMBRAN' => $this->input->post('WARNA_MEMBRAN',TRUE),
		'LEMBAB' => $this->input->post('LEMBAB',TRUE),
		'STOMATITIS' => $this->input->post('STOMATITIS',TRUE),
		'LIDAH' => $this->input->post('LIDAH',TRUE),
		'GIGI' => $this->input->post('GIGI',TRUE),
		'TONSIL' => $this->input->post('TONSIL',TRUE),
		'KELAINAN' => $this->input->post('KELAINAN',TRUE),
		'PERGERAKAN' => $this->input->post('PERGERAKAN',TRUE),
		'KEL_TIROID' => $this->input->post('KEL_TIROID',TRUE),
		'KEL_GETAH' => $this->input->post('KEL_GETAH',TRUE),
		'TEKANAN_VENA' => $this->input->post('TEKANAN_VENA',TRUE),
		'REF_MENELAN' => $this->input->post('REF_MENELAN',TRUE),
		'NYERI' => $this->input->post('NYERI',TRUE),
		'KREPITASI' => $this->input->post('KREPITASI',TRUE),
		'KEL_LAIN' => $this->input->post('KEL_LAIN',TRUE),
		'BENTUK_DADA' => $this->input->post('BENTUK_DADA',TRUE),
		'POLA_NAPAS' => $this->input->post('POLA_NAPAS',TRUE),
		'BENTUK_THORAKS' => $this->input->post('BENTUK_THORAKS',TRUE),
		'PAL_KREP' => $this->input->post('PAL_KREP',TRUE),
		'BENJOLAN' => $this->input->post('BENJOLAN',TRUE),
		'PAL_NYERI' => $this->input->post('PAL_NYERI',TRUE),
		'PERKUSI' => $this->input->post('PERKUSI',TRUE),
		'PARU' => $this->input->post('PARU',TRUE),
		'JANTUNG' => $this->input->post('JANTUNG',TRUE),
		'SUARA_JANTUNG' => $this->input->post('SUARA_JANTUNG',TRUE),
		'ALATBANTU_JAN' => $this->input->post('ALATBANTU_JAN',TRUE),
		'BENTUK_ABDOMEN' => $this->input->post('BENTUK_ABDOMEN',TRUE),
		'AUSKULTASI' => $this->input->post('AUSKULTASI',TRUE),
		'NYERI_PASI' => $this->input->post('NYERI_PASI',TRUE),
		'PEM_KELENJAR' => $this->input->post('PEM_KELENJAR',TRUE),
		'PERKUSI_AUS' => $this->input->post('PERKUSI_AUS',TRUE),
		'VAGINA' => $this->input->post('VAGINA',TRUE),
		'MENSTRUASI' => $this->input->post('MENSTRUASI',TRUE),
		'KATETER' => $this->input->post('KATETER',TRUE),
		'LABIA_PROM' => $this->input->post('LABIA_PROM',TRUE),
		'HAMIL' => $this->input->post('HAMIL',TRUE),
		'TGL_HAID' => $this->input->post('TGL_HAID',TRUE),
		'PERIKSA_CERVIX' => $this->input->post('PERIKSA_CERVIX',TRUE),
		'BENTUK_PAYUDARA' => $this->input->post('BENTUK_PAYUDARA',TRUE),
		'KENYAL' => $this->input->post('KENYAL',TRUE),
		'MASSA' => $this->input->post('MASSA',TRUE),
		'NYERI_RABA' => $this->input->post('NYERI_RABA',TRUE),
		'BENTUK_PUTING' => $this->input->post('BENTUK_PUTING',TRUE),
		'MAMMO' => $this->input->post('MAMMO',TRUE),
		'ALAT_KONTRASEPSI' => $this->input->post('ALAT_KONTRASEPSI',TRUE),
		'MASALAH_SEKS' => $this->input->post('MASALAH_SEKS',TRUE),
		'PREPUTIUM' => $this->input->post('PREPUTIUM',TRUE),
		'MASALAH_PROSTAT' => $this->input->post('MASALAH_PROSTAT',TRUE),
		'BENTUK_SKROTUM' => $this->input->post('BENTUK_SKROTUM',TRUE),
		'TESTIS' => $this->input->post('TESTIS',TRUE),
		'MASSA_BEN' => $this->input->post('MASSA_BEN',TRUE),
		'HERNIASI' => $this->input->post('HERNIASI',TRUE),
		'LAIN2' => $this->input->post('LAIN2',TRUE),
		'ALAT_KONTRA' => $this->input->post('ALAT_KONTRA',TRUE),
		'MASALAH_REPRO' => $this->input->post('MASALAH_REPRO',TRUE),
		'EKSTREMITAS_ATAS' => $this->input->post('EKSTREMITAS_ATAS',TRUE),
		'EKSTREMITAS_BAWAH' => $this->input->post('EKSTREMITAS_BAWAH',TRUE),
		'AKTIVITAS' => $this->input->post('AKTIVITAS',TRUE),
		'BERJALAN' => $this->input->post('BERJALAN',TRUE),
		'SISTEM_INTE' => $this->input->post('SISTEM_INTE',TRUE),
		'KENYAMANAN' => $this->input->post('KENYAMANAN',TRUE),
		'KES_DIRI' => $this->input->post('KES_DIRI',TRUE),
		'SOS_SUPORT' => $this->input->post('SOS_SUPORT',TRUE),
		'ANSIETAS' => $this->input->post('ANSIETAS',TRUE),
		'KEHILANGAN' => $this->input->post('KEHILANGAN',TRUE),
		'STATUS_EMOSI' => $this->input->post('STATUS_EMOSI',TRUE),
		'KONSEP_DIRI' => $this->input->post('KONSEP_DIRI',TRUE),
		'RESPON_HILANG' => $this->input->post('RESPON_HILANG',TRUE),
		'SUMBER_STRESS' => $this->input->post('SUMBER_STRESS',TRUE),
		'BERARTI' => $this->input->post('BERARTI',TRUE),
		'TERLIBAT' => $this->input->post('TERLIBAT',TRUE),
		'HUBUNGAN' => $this->input->post('HUBUNGAN',TRUE),
		'KOMUNIKASI' => $this->input->post('KOMUNIKASI',TRUE),
		'KEPUTUSAN' => $this->input->post('KEPUTUSAN',TRUE),
		'MENGASUH' => $this->input->post('MENGASUH',TRUE),
		'DUKUNGAN' => $this->input->post('DUKUNGAN',TRUE),
		'REAKSI' => $this->input->post('REAKSI',TRUE),
		'BUDAYA' => $this->input->post('BUDAYA',TRUE),
		'POLA_AKTIVITAS' => $this->input->post('POLA_AKTIVITAS',TRUE),
		'POLA_ISTIRAHAT' => $this->input->post('POLA_ISTIRAHAT',TRUE),
		'POLA_MAKAN' => $this->input->post('POLA_MAKAN',TRUE),
		'PANTANGAN' => $this->input->post('PANTANGAN',TRUE),
		'KEPERCAYAAN' => $this->input->post('KEPERCAYAAN',TRUE),
		'PANTANGAN_HARI' => $this->input->post('PANTANGAN_HARI',TRUE),
		'PANTANGAN_LAIN' => $this->input->post('PANTANGAN_LAIN',TRUE),
		'ANJURAN' => $this->input->post('ANJURAN',TRUE),
		'NILAI_KEYAKINAN' => $this->input->post('NILAI_KEYAKINAN',TRUE),
		'KEGIATAN_IBADAH' => $this->input->post('KEGIATAN_IBADAH',TRUE),
		'PENG_AGAMA' => $this->input->post('PENG_AGAMA',TRUE),
		'SPIRIT' => $this->input->post('SPIRIT',TRUE),
		'BANTUAN' => $this->input->post('BANTUAN',TRUE),
		'PAHAM_PENYAKIT' => $this->input->post('PAHAM_PENYAKIT',TRUE),
		'PAHAM_OBAT' => $this->input->post('PAHAM_OBAT',TRUE),
		'PAHAM_NUTRISI' => $this->input->post('PAHAM_NUTRISI',TRUE),
		'PAHAM_RAWAT' => $this->input->post('PAHAM_RAWAT',TRUE),
		'HAMBATAN_EDUKASI' => $this->input->post('HAMBATAN_EDUKASI',TRUE),
		'FREK_MAKAN' => $this->input->post('FREK_MAKAN',TRUE),
		'JUM_MAKAN' => $this->input->post('JUM_MAKAN',TRUE),
		'JEN_MAKAN' => $this->input->post('JEN_MAKAN',TRUE),
		'KOM_MAKAN' => $this->input->post('KOM_MAKAN',TRUE),
		'DIET' => $this->input->post('DIET',TRUE),
		'CARA_MAKAN' => $this->input->post('CARA_MAKAN',TRUE),
		'GANGGUAN' => $this->input->post('GANGGUAN',TRUE),
		'FREK_MINUM' => $this->input->post('FREK_MINUM',TRUE),
		'JUM_MINUM' => $this->input->post('JUM_MINUM',TRUE),
		'JEN_MINUM' => $this->input->post('JEN_MINUM',TRUE),
		'GANG_MINUM' => $this->input->post('GANG_MINUM',TRUE),
		'FREK_BAK' => $this->input->post('FREK_BAK',TRUE),
		'WARNA_BAK' => $this->input->post('WARNA_BAK',TRUE),
		'JMLH_BAK' => $this->input->post('JMLH_BAK',TRUE),
		'PENG_KAT_BAK' => $this->input->post('PENG_KAT_BAK',TRUE),
		'KEM_HAN_BAK' => $this->input->post('KEM_HAN_BAK',TRUE),
		'INKONT_BAK' => $this->input->post('INKONT_BAK',TRUE),
		'DIURESIS_BAK' => $this->input->post('DIURESIS_BAK',TRUE),
		'FREK_BAB' => $this->input->post('FREK_BAB',TRUE),
		'WARNA_BAB' => $this->input->post('WARNA_BAB',TRUE),
		'KONSIST_BAB' => $this->input->post('KONSIST_BAB',TRUE),
		'GANG_BAB' => $this->input->post('GANG_BAB',TRUE),
		'STOMA_BAB' => $this->input->post('STOMA_BAB',TRUE),
		'PENG_OBAT_BAB' => $this->input->post('PENG_OBAT_BAB',TRUE),
		'IST_SIANG' => $this->input->post('IST_SIANG',TRUE),
		'IST_MALAM' => $this->input->post('IST_MALAM',TRUE),
		'IST_CAHAYA' => $this->input->post('IST_CAHAYA',TRUE),
		'IST_POSISI' => $this->input->post('IST_POSISI',TRUE),
		'IST_LING' => $this->input->post('IST_LING',TRUE),
		'IST_GANG_TIDUR' => $this->input->post('IST_GANG_TIDUR',TRUE),
		'PENG_OBAT_IST' => $this->input->post('PENG_OBAT_IST',TRUE),
		'FREK_MAND' => $this->input->post('FREK_MAND',TRUE),
		'CUC_RAMB_MAND' => $this->input->post('CUC_RAMB_MAND',TRUE),
		'SIH_GIGI_MAND' => $this->input->post('SIH_GIGI_MAND',TRUE),
		'BANT_MAND' => $this->input->post('BANT_MAND',TRUE),
		'GANT_PAKAI' => $this->input->post('GANT_PAKAI',TRUE),
		'PAK_CUCI' => $this->input->post('PAK_CUCI',TRUE),
		'PAK_BANT' => $this->input->post('PAK_BANT',TRUE),
		'ALT_BANT' => $this->input->post('ALT_BANT',TRUE),
		'KEMP_MUND' => $this->input->post('KEMP_MUND',TRUE),
		'BIL_PUT' => $this->input->post('BIL_PUT',TRUE),
		'ADAPTIF' => $this->input->post('ADAPTIF',TRUE),
		'MALADAPTIF' => $this->input->post('MALADAPTIF',TRUE),
		'PENANGGUNGJAWAB_NAMA' => $this->input->post('PENANGGUNGJAWAB_NAMA',TRUE),
		'PENANGGUNGJAWAB_HUBUNGAN' => $this->input->post('PENANGGUNGJAWAB_HUBUNGAN',TRUE),
		'PENANGGUNGJAWAB_ALAMAT' => $this->input->post('PENANGGUNGJAWAB_ALAMAT',TRUE),
		'PENANGGUNGJAWAB_PHONE' => $this->input->post('PENANGGUNGJAWAB_PHONE',TRUE),
		'obat2' => $this->input->post('obat2',TRUE),
		'PERBANDINGAN_BB' => $this->input->post('PERBANDINGAN_BB',TRUE),
		'KONTINENSIA' => $this->input->post('KONTINENSIA',TRUE),
		'JENIS_KULIT1' => $this->input->post('JENIS_KULIT1',TRUE),
		'MOBILITAS' => $this->input->post('MOBILITAS',TRUE),
		'JK' => $this->input->post('JK',TRUE),
		'UMUR' => $this->input->post('UMUR',TRUE),
		'NAFSU_MAKAN' => $this->input->post('NAFSU_MAKAN',TRUE),
		'OBAT1' => $this->input->post('OBAT1',TRUE),
		'MALNUTRISI' => $this->input->post('MALNUTRISI',TRUE),
		'MOTORIK1' => $this->input->post('MOTORIK1',TRUE),
		'SPINAL' => $this->input->post('SPINAL',TRUE),
		'MEJA_OPERASI' => $this->input->post('MEJA_OPERASI',TRUE),
		'RIWAYAT_JATUH' => $this->input->post('RIWAYAT_JATUH',TRUE),
		'DIAGNOSIS_SEKUNDER' => $this->input->post('DIAGNOSIS_SEKUNDER',TRUE),
		'ALAT_BANTU' => $this->input->post('ALAT_BANTU',TRUE),
		'HEPARIN' => $this->input->post('HEPARIN',TRUE),
		'GAYA_BERJALAN' => $this->input->post('GAYA_BERJALAN',TRUE),
		'KESADARAN1' => $this->input->post('KESADARAN1',TRUE),
		'NOMR_LAMA' => $this->input->post('NOMR_LAMA',TRUE),
		'NO_KARTU' => $this->input->post('NO_KARTU',TRUE),
		'JNS_PASIEN' => $this->input->post('JNS_PASIEN',TRUE),
		'KDPROVIDER' => $this->input->post('KDPROVIDER',TRUE),
		'NMPROVIDER' => $this->input->post('NMPROVIDER',TRUE),
		'Kelas' => $this->input->post('Kelas',TRUE),
		'catatan_pembayaran' => $this->input->post('catatan_pembayaran',TRUE),
		'NAMAREF' => $this->input->post('NAMAREF',TRUE),
		'NOMRREF' => $this->input->post('NOMRREF',TRUE),
		'KETERANGAN' => $this->input->post('KETERANGAN',TRUE),
		'SUKU' => $this->input->post('SUKU',TRUE),
	    );

            $this->M_pasien_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('m_pasien'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_pasien_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('m_pasien/update_action'),
		'id' => set_value('id', $row->id),
		'NOMR' => set_value('NOMR', $row->NOMR),
		'TITLE' => set_value('TITLE', $row->TITLE),
		'NAMA' => set_value('NAMA', $row->NAMA),
		'TEMPAT' => set_value('TEMPAT', $row->TEMPAT),
		'TGLLAHIR' => set_value('TGLLAHIR', $row->TGLLAHIR),
		'JENISKELAMIN' => set_value('JENISKELAMIN', $row->JENISKELAMIN),
		'ALAMAT' => set_value('ALAMAT', $row->ALAMAT),
		'KELURAHAN' => set_value('KELURAHAN', $row->KELURAHAN),
		'KDKECAMATAN' => set_value('KDKECAMATAN', $row->KDKECAMATAN),
		'KOTA' => set_value('KOTA', $row->KOTA),
		'KDPROVINSI' => set_value('KDPROVINSI', $row->KDPROVINSI),
		'NOTELP' => set_value('NOTELP', $row->NOTELP),
		'NOKTP' => set_value('NOKTP', $row->NOKTP),
		'SUAMI_ORTU' => set_value('SUAMI_ORTU', $row->SUAMI_ORTU),
		'PEKERJAAN' => set_value('PEKERJAAN', $row->PEKERJAAN),
		'STATUS' => set_value('STATUS', $row->STATUS),
		'AGAMA' => set_value('AGAMA', $row->AGAMA),
		'PENDIDIKAN' => set_value('PENDIDIKAN', $row->PENDIDIKAN),
		'KDCARABAYAR' => set_value('KDCARABAYAR', $row->KDCARABAYAR),
		'NIP' => set_value('NIP', $row->NIP),
		'TGLDAFTAR' => set_value('TGLDAFTAR', $row->TGLDAFTAR),
		'ALAMAT_KTP' => set_value('ALAMAT_KTP', $row->ALAMAT_KTP),
		'PARENT_NOMR' => set_value('PARENT_NOMR', $row->PARENT_NOMR),
		'NAMA_OBAT' => set_value('NAMA_OBAT', $row->NAMA_OBAT),
		'DOSIS' => set_value('DOSIS', $row->DOSIS),
		'CARA_PEMBERIAN' => set_value('CARA_PEMBERIAN', $row->CARA_PEMBERIAN),
		'FREKUENSI' => set_value('FREKUENSI', $row->FREKUENSI),
		'WAKTU_TGL' => set_value('WAKTU_TGL', $row->WAKTU_TGL),
		'LAMA_WAKTU' => set_value('LAMA_WAKTU', $row->LAMA_WAKTU),
		'ALERGI_OBAT' => set_value('ALERGI_OBAT', $row->ALERGI_OBAT),
		'REAKSI_ALERGI' => set_value('REAKSI_ALERGI', $row->REAKSI_ALERGI),
		'RIWAYAT_KES' => set_value('RIWAYAT_KES', $row->RIWAYAT_KES),
		'BB_LAHIR' => set_value('BB_LAHIR', $row->BB_LAHIR),
		'BB_SEKARANG' => set_value('BB_SEKARANG', $row->BB_SEKARANG),
		'FISIK_FONTANEL' => set_value('FISIK_FONTANEL', $row->FISIK_FONTANEL),
		'FISIK_REFLEKS' => set_value('FISIK_REFLEKS', $row->FISIK_REFLEKS),
		'FISIK_SENSASI' => set_value('FISIK_SENSASI', $row->FISIK_SENSASI),
		'MOTORIK_KASAR' => set_value('MOTORIK_KASAR', $row->MOTORIK_KASAR),
		'MOTORIK_HALUS' => set_value('MOTORIK_HALUS', $row->MOTORIK_HALUS),
		'MAMPU_BICARA' => set_value('MAMPU_BICARA', $row->MAMPU_BICARA),
		'MAMPU_SOSIALISASI' => set_value('MAMPU_SOSIALISASI', $row->MAMPU_SOSIALISASI),
		'BCG' => set_value('BCG', $row->BCG),
		'POLIO' => set_value('POLIO', $row->POLIO),
		'DPT' => set_value('DPT', $row->DPT),
		'CAMPAK' => set_value('CAMPAK', $row->CAMPAK),
		'HEPATITIS_B' => set_value('HEPATITIS_B', $row->HEPATITIS_B),
		'TD' => set_value('TD', $row->TD),
		'SUHU' => set_value('SUHU', $row->SUHU),
		'RR' => set_value('RR', $row->RR),
		'NADI' => set_value('NADI', $row->NADI),
		'BB' => set_value('BB', $row->BB),
		'TB' => set_value('TB', $row->TB),
		'EYE' => set_value('EYE', $row->EYE),
		'MOTORIK' => set_value('MOTORIK', $row->MOTORIK),
		'VERBAL' => set_value('VERBAL', $row->VERBAL),
		'TOTAL_GCS' => set_value('TOTAL_GCS', $row->TOTAL_GCS),
		'REAKSI_PUPIL' => set_value('REAKSI_PUPIL', $row->REAKSI_PUPIL),
		'KESADARAN' => set_value('KESADARAN', $row->KESADARAN),
		'KEPALA' => set_value('KEPALA', $row->KEPALA),
		'RAMBUT' => set_value('RAMBUT', $row->RAMBUT),
		'MUKA' => set_value('MUKA', $row->MUKA),
		'MATA' => set_value('MATA', $row->MATA),
		'GANG_LIHAT' => set_value('GANG_LIHAT', $row->GANG_LIHAT),
		'ALATBANTU_LIHAT' => set_value('ALATBANTU_LIHAT', $row->ALATBANTU_LIHAT),
		'BENTUK' => set_value('BENTUK', $row->BENTUK),
		'PENDENGARAN' => set_value('PENDENGARAN', $row->PENDENGARAN),
		'LUB_TELINGA' => set_value('LUB_TELINGA', $row->LUB_TELINGA),
		'BENTUK_HIDUNG' => set_value('BENTUK_HIDUNG', $row->BENTUK_HIDUNG),
		'MEMBRAN_MUK' => set_value('MEMBRAN_MUK', $row->MEMBRAN_MUK),
		'MAMPU_HIDU' => set_value('MAMPU_HIDU', $row->MAMPU_HIDU),
		'ALAT_HIDUNG' => set_value('ALAT_HIDUNG', $row->ALAT_HIDUNG),
		'RONGGA_MULUT' => set_value('RONGGA_MULUT', $row->RONGGA_MULUT),
		'WARNA_MEMBRAN' => set_value('WARNA_MEMBRAN', $row->WARNA_MEMBRAN),
		'LEMBAB' => set_value('LEMBAB', $row->LEMBAB),
		'STOMATITIS' => set_value('STOMATITIS', $row->STOMATITIS),
		'LIDAH' => set_value('LIDAH', $row->LIDAH),
		'GIGI' => set_value('GIGI', $row->GIGI),
		'TONSIL' => set_value('TONSIL', $row->TONSIL),
		'KELAINAN' => set_value('KELAINAN', $row->KELAINAN),
		'PERGERAKAN' => set_value('PERGERAKAN', $row->PERGERAKAN),
		'KEL_TIROID' => set_value('KEL_TIROID', $row->KEL_TIROID),
		'KEL_GETAH' => set_value('KEL_GETAH', $row->KEL_GETAH),
		'TEKANAN_VENA' => set_value('TEKANAN_VENA', $row->TEKANAN_VENA),
		'REF_MENELAN' => set_value('REF_MENELAN', $row->REF_MENELAN),
		'NYERI' => set_value('NYERI', $row->NYERI),
		'KREPITASI' => set_value('KREPITASI', $row->KREPITASI),
		'KEL_LAIN' => set_value('KEL_LAIN', $row->KEL_LAIN),
		'BENTUK_DADA' => set_value('BENTUK_DADA', $row->BENTUK_DADA),
		'POLA_NAPAS' => set_value('POLA_NAPAS', $row->POLA_NAPAS),
		'BENTUK_THORAKS' => set_value('BENTUK_THORAKS', $row->BENTUK_THORAKS),
		'PAL_KREP' => set_value('PAL_KREP', $row->PAL_KREP),
		'BENJOLAN' => set_value('BENJOLAN', $row->BENJOLAN),
		'PAL_NYERI' => set_value('PAL_NYERI', $row->PAL_NYERI),
		'PERKUSI' => set_value('PERKUSI', $row->PERKUSI),
		'PARU' => set_value('PARU', $row->PARU),
		'JANTUNG' => set_value('JANTUNG', $row->JANTUNG),
		'SUARA_JANTUNG' => set_value('SUARA_JANTUNG', $row->SUARA_JANTUNG),
		'ALATBANTU_JAN' => set_value('ALATBANTU_JAN', $row->ALATBANTU_JAN),
		'BENTUK_ABDOMEN' => set_value('BENTUK_ABDOMEN', $row->BENTUK_ABDOMEN),
		'AUSKULTASI' => set_value('AUSKULTASI', $row->AUSKULTASI),
		'NYERI_PASI' => set_value('NYERI_PASI', $row->NYERI_PASI),
		'PEM_KELENJAR' => set_value('PEM_KELENJAR', $row->PEM_KELENJAR),
		'PERKUSI_AUS' => set_value('PERKUSI_AUS', $row->PERKUSI_AUS),
		'VAGINA' => set_value('VAGINA', $row->VAGINA),
		'MENSTRUASI' => set_value('MENSTRUASI', $row->MENSTRUASI),
		'KATETER' => set_value('KATETER', $row->KATETER),
		'LABIA_PROM' => set_value('LABIA_PROM', $row->LABIA_PROM),
		'HAMIL' => set_value('HAMIL', $row->HAMIL),
		'TGL_HAID' => set_value('TGL_HAID', $row->TGL_HAID),
		'PERIKSA_CERVIX' => set_value('PERIKSA_CERVIX', $row->PERIKSA_CERVIX),
		'BENTUK_PAYUDARA' => set_value('BENTUK_PAYUDARA', $row->BENTUK_PAYUDARA),
		'KENYAL' => set_value('KENYAL', $row->KENYAL),
		'MASSA' => set_value('MASSA', $row->MASSA),
		'NYERI_RABA' => set_value('NYERI_RABA', $row->NYERI_RABA),
		'BENTUK_PUTING' => set_value('BENTUK_PUTING', $row->BENTUK_PUTING),
		'MAMMO' => set_value('MAMMO', $row->MAMMO),
		'ALAT_KONTRASEPSI' => set_value('ALAT_KONTRASEPSI', $row->ALAT_KONTRASEPSI),
		'MASALAH_SEKS' => set_value('MASALAH_SEKS', $row->MASALAH_SEKS),
		'PREPUTIUM' => set_value('PREPUTIUM', $row->PREPUTIUM),
		'MASALAH_PROSTAT' => set_value('MASALAH_PROSTAT', $row->MASALAH_PROSTAT),
		'BENTUK_SKROTUM' => set_value('BENTUK_SKROTUM', $row->BENTUK_SKROTUM),
		'TESTIS' => set_value('TESTIS', $row->TESTIS),
		'MASSA_BEN' => set_value('MASSA_BEN', $row->MASSA_BEN),
		'HERNIASI' => set_value('HERNIASI', $row->HERNIASI),
		'LAIN2' => set_value('LAIN2', $row->LAIN2),
		'ALAT_KONTRA' => set_value('ALAT_KONTRA', $row->ALAT_KONTRA),
		'MASALAH_REPRO' => set_value('MASALAH_REPRO', $row->MASALAH_REPRO),
		'EKSTREMITAS_ATAS' => set_value('EKSTREMITAS_ATAS', $row->EKSTREMITAS_ATAS),
		'EKSTREMITAS_BAWAH' => set_value('EKSTREMITAS_BAWAH', $row->EKSTREMITAS_BAWAH),
		'AKTIVITAS' => set_value('AKTIVITAS', $row->AKTIVITAS),
		'BERJALAN' => set_value('BERJALAN', $row->BERJALAN),
		'SISTEM_INTE' => set_value('SISTEM_INTE', $row->SISTEM_INTE),
		'KENYAMANAN' => set_value('KENYAMANAN', $row->KENYAMANAN),
		'KES_DIRI' => set_value('KES_DIRI', $row->KES_DIRI),
		'SOS_SUPORT' => set_value('SOS_SUPORT', $row->SOS_SUPORT),
		'ANSIETAS' => set_value('ANSIETAS', $row->ANSIETAS),
		'KEHILANGAN' => set_value('KEHILANGAN', $row->KEHILANGAN),
		'STATUS_EMOSI' => set_value('STATUS_EMOSI', $row->STATUS_EMOSI),
		'KONSEP_DIRI' => set_value('KONSEP_DIRI', $row->KONSEP_DIRI),
		'RESPON_HILANG' => set_value('RESPON_HILANG', $row->RESPON_HILANG),
		'SUMBER_STRESS' => set_value('SUMBER_STRESS', $row->SUMBER_STRESS),
		'BERARTI' => set_value('BERARTI', $row->BERARTI),
		'TERLIBAT' => set_value('TERLIBAT', $row->TERLIBAT),
		'HUBUNGAN' => set_value('HUBUNGAN', $row->HUBUNGAN),
		'KOMUNIKASI' => set_value('KOMUNIKASI', $row->KOMUNIKASI),
		'KEPUTUSAN' => set_value('KEPUTUSAN', $row->KEPUTUSAN),
		'MENGASUH' => set_value('MENGASUH', $row->MENGASUH),
		'DUKUNGAN' => set_value('DUKUNGAN', $row->DUKUNGAN),
		'REAKSI' => set_value('REAKSI', $row->REAKSI),
		'BUDAYA' => set_value('BUDAYA', $row->BUDAYA),
		'POLA_AKTIVITAS' => set_value('POLA_AKTIVITAS', $row->POLA_AKTIVITAS),
		'POLA_ISTIRAHAT' => set_value('POLA_ISTIRAHAT', $row->POLA_ISTIRAHAT),
		'POLA_MAKAN' => set_value('POLA_MAKAN', $row->POLA_MAKAN),
		'PANTANGAN' => set_value('PANTANGAN', $row->PANTANGAN),
		'KEPERCAYAAN' => set_value('KEPERCAYAAN', $row->KEPERCAYAAN),
		'PANTANGAN_HARI' => set_value('PANTANGAN_HARI', $row->PANTANGAN_HARI),
		'PANTANGAN_LAIN' => set_value('PANTANGAN_LAIN', $row->PANTANGAN_LAIN),
		'ANJURAN' => set_value('ANJURAN', $row->ANJURAN),
		'NILAI_KEYAKINAN' => set_value('NILAI_KEYAKINAN', $row->NILAI_KEYAKINAN),
		'KEGIATAN_IBADAH' => set_value('KEGIATAN_IBADAH', $row->KEGIATAN_IBADAH),
		'PENG_AGAMA' => set_value('PENG_AGAMA', $row->PENG_AGAMA),
		'SPIRIT' => set_value('SPIRIT', $row->SPIRIT),
		'BANTUAN' => set_value('BANTUAN', $row->BANTUAN),
		'PAHAM_PENYAKIT' => set_value('PAHAM_PENYAKIT', $row->PAHAM_PENYAKIT),
		'PAHAM_OBAT' => set_value('PAHAM_OBAT', $row->PAHAM_OBAT),
		'PAHAM_NUTRISI' => set_value('PAHAM_NUTRISI', $row->PAHAM_NUTRISI),
		'PAHAM_RAWAT' => set_value('PAHAM_RAWAT', $row->PAHAM_RAWAT),
		'HAMBATAN_EDUKASI' => set_value('HAMBATAN_EDUKASI', $row->HAMBATAN_EDUKASI),
		'FREK_MAKAN' => set_value('FREK_MAKAN', $row->FREK_MAKAN),
		'JUM_MAKAN' => set_value('JUM_MAKAN', $row->JUM_MAKAN),
		'JEN_MAKAN' => set_value('JEN_MAKAN', $row->JEN_MAKAN),
		'KOM_MAKAN' => set_value('KOM_MAKAN', $row->KOM_MAKAN),
		'DIET' => set_value('DIET', $row->DIET),
		'CARA_MAKAN' => set_value('CARA_MAKAN', $row->CARA_MAKAN),
		'GANGGUAN' => set_value('GANGGUAN', $row->GANGGUAN),
		'FREK_MINUM' => set_value('FREK_MINUM', $row->FREK_MINUM),
		'JUM_MINUM' => set_value('JUM_MINUM', $row->JUM_MINUM),
		'JEN_MINUM' => set_value('JEN_MINUM', $row->JEN_MINUM),
		'GANG_MINUM' => set_value('GANG_MINUM', $row->GANG_MINUM),
		'FREK_BAK' => set_value('FREK_BAK', $row->FREK_BAK),
		'WARNA_BAK' => set_value('WARNA_BAK', $row->WARNA_BAK),
		'JMLH_BAK' => set_value('JMLH_BAK', $row->JMLH_BAK),
		'PENG_KAT_BAK' => set_value('PENG_KAT_BAK', $row->PENG_KAT_BAK),
		'KEM_HAN_BAK' => set_value('KEM_HAN_BAK', $row->KEM_HAN_BAK),
		'INKONT_BAK' => set_value('INKONT_BAK', $row->INKONT_BAK),
		'DIURESIS_BAK' => set_value('DIURESIS_BAK', $row->DIURESIS_BAK),
		'FREK_BAB' => set_value('FREK_BAB', $row->FREK_BAB),
		'WARNA_BAB' => set_value('WARNA_BAB', $row->WARNA_BAB),
		'KONSIST_BAB' => set_value('KONSIST_BAB', $row->KONSIST_BAB),
		'GANG_BAB' => set_value('GANG_BAB', $row->GANG_BAB),
		'STOMA_BAB' => set_value('STOMA_BAB', $row->STOMA_BAB),
		'PENG_OBAT_BAB' => set_value('PENG_OBAT_BAB', $row->PENG_OBAT_BAB),
		'IST_SIANG' => set_value('IST_SIANG', $row->IST_SIANG),
		'IST_MALAM' => set_value('IST_MALAM', $row->IST_MALAM),
		'IST_CAHAYA' => set_value('IST_CAHAYA', $row->IST_CAHAYA),
		'IST_POSISI' => set_value('IST_POSISI', $row->IST_POSISI),
		'IST_LING' => set_value('IST_LING', $row->IST_LING),
		'IST_GANG_TIDUR' => set_value('IST_GANG_TIDUR', $row->IST_GANG_TIDUR),
		'PENG_OBAT_IST' => set_value('PENG_OBAT_IST', $row->PENG_OBAT_IST),
		'FREK_MAND' => set_value('FREK_MAND', $row->FREK_MAND),
		'CUC_RAMB_MAND' => set_value('CUC_RAMB_MAND', $row->CUC_RAMB_MAND),
		'SIH_GIGI_MAND' => set_value('SIH_GIGI_MAND', $row->SIH_GIGI_MAND),
		'BANT_MAND' => set_value('BANT_MAND', $row->BANT_MAND),
		'GANT_PAKAI' => set_value('GANT_PAKAI', $row->GANT_PAKAI),
		'PAK_CUCI' => set_value('PAK_CUCI', $row->PAK_CUCI),
		'PAK_BANT' => set_value('PAK_BANT', $row->PAK_BANT),
		'ALT_BANT' => set_value('ALT_BANT', $row->ALT_BANT),
		'KEMP_MUND' => set_value('KEMP_MUND', $row->KEMP_MUND),
		'BIL_PUT' => set_value('BIL_PUT', $row->BIL_PUT),
		'ADAPTIF' => set_value('ADAPTIF', $row->ADAPTIF),
		'MALADAPTIF' => set_value('MALADAPTIF', $row->MALADAPTIF),
		'PENANGGUNGJAWAB_NAMA' => set_value('PENANGGUNGJAWAB_NAMA', $row->PENANGGUNGJAWAB_NAMA),
		'PENANGGUNGJAWAB_HUBUNGAN' => set_value('PENANGGUNGJAWAB_HUBUNGAN', $row->PENANGGUNGJAWAB_HUBUNGAN),
		'PENANGGUNGJAWAB_ALAMAT' => set_value('PENANGGUNGJAWAB_ALAMAT', $row->PENANGGUNGJAWAB_ALAMAT),
		'PENANGGUNGJAWAB_PHONE' => set_value('PENANGGUNGJAWAB_PHONE', $row->PENANGGUNGJAWAB_PHONE),
		'obat2' => set_value('obat2', $row->obat2),
		'PERBANDINGAN_BB' => set_value('PERBANDINGAN_BB', $row->PERBANDINGAN_BB),
		'KONTINENSIA' => set_value('KONTINENSIA', $row->KONTINENSIA),
		'JENIS_KULIT1' => set_value('JENIS_KULIT1', $row->JENIS_KULIT1),
		'MOBILITAS' => set_value('MOBILITAS', $row->MOBILITAS),
		'JK' => set_value('JK', $row->JK),
		'UMUR' => set_value('UMUR', $row->UMUR),
		'NAFSU_MAKAN' => set_value('NAFSU_MAKAN', $row->NAFSU_MAKAN),
		'OBAT1' => set_value('OBAT1', $row->OBAT1),
		'MALNUTRISI' => set_value('MALNUTRISI', $row->MALNUTRISI),
		'MOTORIK1' => set_value('MOTORIK1', $row->MOTORIK1),
		'SPINAL' => set_value('SPINAL', $row->SPINAL),
		'MEJA_OPERASI' => set_value('MEJA_OPERASI', $row->MEJA_OPERASI),
		'RIWAYAT_JATUH' => set_value('RIWAYAT_JATUH', $row->RIWAYAT_JATUH),
		'DIAGNOSIS_SEKUNDER' => set_value('DIAGNOSIS_SEKUNDER', $row->DIAGNOSIS_SEKUNDER),
		'ALAT_BANTU' => set_value('ALAT_BANTU', $row->ALAT_BANTU),
		'HEPARIN' => set_value('HEPARIN', $row->HEPARIN),
		'GAYA_BERJALAN' => set_value('GAYA_BERJALAN', $row->GAYA_BERJALAN),
		'KESADARAN1' => set_value('KESADARAN1', $row->KESADARAN1),
		'NOMR_LAMA' => set_value('NOMR_LAMA', $row->NOMR_LAMA),
		'NO_KARTU' => set_value('NO_KARTU', $row->NO_KARTU),
		'JNS_PASIEN' => set_value('JNS_PASIEN', $row->JNS_PASIEN),
		'KDPROVIDER' => set_value('KDPROVIDER', $row->KDPROVIDER),
		'NMPROVIDER' => set_value('NMPROVIDER', $row->NMPROVIDER),
		'Kelas' => set_value('Kelas', $row->Kelas),
		'catatan_pembayaran' => set_value('catatan_pembayaran', $row->catatan_pembayaran),
		'NAMAREF' => set_value('NAMAREF', $row->NAMAREF),
		'NOMRREF' => set_value('NOMRREF', $row->NOMRREF),
		'KETERANGAN' => set_value('KETERANGAN', $row->KETERANGAN),
		'SUKU' => set_value('SUKU', $row->SUKU),
	    );
            $this->load->view('m_pasien/m_pasien_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('m_pasien'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'NOMR' => $this->input->post('NOMR',TRUE),
		'TITLE' => $this->input->post('TITLE',TRUE),
		'NAMA' => $this->input->post('NAMA',TRUE),
		'TEMPAT' => $this->input->post('TEMPAT',TRUE),
		'TGLLAHIR' => $this->input->post('TGLLAHIR',TRUE),
		'JENISKELAMIN' => $this->input->post('JENISKELAMIN',TRUE),
		'ALAMAT' => $this->input->post('ALAMAT',TRUE),
		'KELURAHAN' => $this->input->post('KELURAHAN',TRUE),
		'KDKECAMATAN' => $this->input->post('KDKECAMATAN',TRUE),
		'KOTA' => $this->input->post('KOTA',TRUE),
		'KDPROVINSI' => $this->input->post('KDPROVINSI',TRUE),
		'NOTELP' => $this->input->post('NOTELP',TRUE),
		'NOKTP' => $this->input->post('NOKTP',TRUE),
		'SUAMI_ORTU' => $this->input->post('SUAMI_ORTU',TRUE),
		'PEKERJAAN' => $this->input->post('PEKERJAAN',TRUE),
		'STATUS' => $this->input->post('STATUS',TRUE),
		'AGAMA' => $this->input->post('AGAMA',TRUE),
		'PENDIDIKAN' => $this->input->post('PENDIDIKAN',TRUE),
		'KDCARABAYAR' => $this->input->post('KDCARABAYAR',TRUE),
		'NIP' => $this->input->post('NIP',TRUE),
		'TGLDAFTAR' => $this->input->post('TGLDAFTAR',TRUE),
		'ALAMAT_KTP' => $this->input->post('ALAMAT_KTP',TRUE),
		'PARENT_NOMR' => $this->input->post('PARENT_NOMR',TRUE),
		'NAMA_OBAT' => $this->input->post('NAMA_OBAT',TRUE),
		'DOSIS' => $this->input->post('DOSIS',TRUE),
		'CARA_PEMBERIAN' => $this->input->post('CARA_PEMBERIAN',TRUE),
		'FREKUENSI' => $this->input->post('FREKUENSI',TRUE),
		'WAKTU_TGL' => $this->input->post('WAKTU_TGL',TRUE),
		'LAMA_WAKTU' => $this->input->post('LAMA_WAKTU',TRUE),
		'ALERGI_OBAT' => $this->input->post('ALERGI_OBAT',TRUE),
		'REAKSI_ALERGI' => $this->input->post('REAKSI_ALERGI',TRUE),
		'RIWAYAT_KES' => $this->input->post('RIWAYAT_KES',TRUE),
		'BB_LAHIR' => $this->input->post('BB_LAHIR',TRUE),
		'BB_SEKARANG' => $this->input->post('BB_SEKARANG',TRUE),
		'FISIK_FONTANEL' => $this->input->post('FISIK_FONTANEL',TRUE),
		'FISIK_REFLEKS' => $this->input->post('FISIK_REFLEKS',TRUE),
		'FISIK_SENSASI' => $this->input->post('FISIK_SENSASI',TRUE),
		'MOTORIK_KASAR' => $this->input->post('MOTORIK_KASAR',TRUE),
		'MOTORIK_HALUS' => $this->input->post('MOTORIK_HALUS',TRUE),
		'MAMPU_BICARA' => $this->input->post('MAMPU_BICARA',TRUE),
		'MAMPU_SOSIALISASI' => $this->input->post('MAMPU_SOSIALISASI',TRUE),
		'BCG' => $this->input->post('BCG',TRUE),
		'POLIO' => $this->input->post('POLIO',TRUE),
		'DPT' => $this->input->post('DPT',TRUE),
		'CAMPAK' => $this->input->post('CAMPAK',TRUE),
		'HEPATITIS_B' => $this->input->post('HEPATITIS_B',TRUE),
		'TD' => $this->input->post('TD',TRUE),
		'SUHU' => $this->input->post('SUHU',TRUE),
		'RR' => $this->input->post('RR',TRUE),
		'NADI' => $this->input->post('NADI',TRUE),
		'BB' => $this->input->post('BB',TRUE),
		'TB' => $this->input->post('TB',TRUE),
		'EYE' => $this->input->post('EYE',TRUE),
		'MOTORIK' => $this->input->post('MOTORIK',TRUE),
		'VERBAL' => $this->input->post('VERBAL',TRUE),
		'TOTAL_GCS' => $this->input->post('TOTAL_GCS',TRUE),
		'REAKSI_PUPIL' => $this->input->post('REAKSI_PUPIL',TRUE),
		'KESADARAN' => $this->input->post('KESADARAN',TRUE),
		'KEPALA' => $this->input->post('KEPALA',TRUE),
		'RAMBUT' => $this->input->post('RAMBUT',TRUE),
		'MUKA' => $this->input->post('MUKA',TRUE),
		'MATA' => $this->input->post('MATA',TRUE),
		'GANG_LIHAT' => $this->input->post('GANG_LIHAT',TRUE),
		'ALATBANTU_LIHAT' => $this->input->post('ALATBANTU_LIHAT',TRUE),
		'BENTUK' => $this->input->post('BENTUK',TRUE),
		'PENDENGARAN' => $this->input->post('PENDENGARAN',TRUE),
		'LUB_TELINGA' => $this->input->post('LUB_TELINGA',TRUE),
		'BENTUK_HIDUNG' => $this->input->post('BENTUK_HIDUNG',TRUE),
		'MEMBRAN_MUK' => $this->input->post('MEMBRAN_MUK',TRUE),
		'MAMPU_HIDU' => $this->input->post('MAMPU_HIDU',TRUE),
		'ALAT_HIDUNG' => $this->input->post('ALAT_HIDUNG',TRUE),
		'RONGGA_MULUT' => $this->input->post('RONGGA_MULUT',TRUE),
		'WARNA_MEMBRAN' => $this->input->post('WARNA_MEMBRAN',TRUE),
		'LEMBAB' => $this->input->post('LEMBAB',TRUE),
		'STOMATITIS' => $this->input->post('STOMATITIS',TRUE),
		'LIDAH' => $this->input->post('LIDAH',TRUE),
		'GIGI' => $this->input->post('GIGI',TRUE),
		'TONSIL' => $this->input->post('TONSIL',TRUE),
		'KELAINAN' => $this->input->post('KELAINAN',TRUE),
		'PERGERAKAN' => $this->input->post('PERGERAKAN',TRUE),
		'KEL_TIROID' => $this->input->post('KEL_TIROID',TRUE),
		'KEL_GETAH' => $this->input->post('KEL_GETAH',TRUE),
		'TEKANAN_VENA' => $this->input->post('TEKANAN_VENA',TRUE),
		'REF_MENELAN' => $this->input->post('REF_MENELAN',TRUE),
		'NYERI' => $this->input->post('NYERI',TRUE),
		'KREPITASI' => $this->input->post('KREPITASI',TRUE),
		'KEL_LAIN' => $this->input->post('KEL_LAIN',TRUE),
		'BENTUK_DADA' => $this->input->post('BENTUK_DADA',TRUE),
		'POLA_NAPAS' => $this->input->post('POLA_NAPAS',TRUE),
		'BENTUK_THORAKS' => $this->input->post('BENTUK_THORAKS',TRUE),
		'PAL_KREP' => $this->input->post('PAL_KREP',TRUE),
		'BENJOLAN' => $this->input->post('BENJOLAN',TRUE),
		'PAL_NYERI' => $this->input->post('PAL_NYERI',TRUE),
		'PERKUSI' => $this->input->post('PERKUSI',TRUE),
		'PARU' => $this->input->post('PARU',TRUE),
		'JANTUNG' => $this->input->post('JANTUNG',TRUE),
		'SUARA_JANTUNG' => $this->input->post('SUARA_JANTUNG',TRUE),
		'ALATBANTU_JAN' => $this->input->post('ALATBANTU_JAN',TRUE),
		'BENTUK_ABDOMEN' => $this->input->post('BENTUK_ABDOMEN',TRUE),
		'AUSKULTASI' => $this->input->post('AUSKULTASI',TRUE),
		'NYERI_PASI' => $this->input->post('NYERI_PASI',TRUE),
		'PEM_KELENJAR' => $this->input->post('PEM_KELENJAR',TRUE),
		'PERKUSI_AUS' => $this->input->post('PERKUSI_AUS',TRUE),
		'VAGINA' => $this->input->post('VAGINA',TRUE),
		'MENSTRUASI' => $this->input->post('MENSTRUASI',TRUE),
		'KATETER' => $this->input->post('KATETER',TRUE),
		'LABIA_PROM' => $this->input->post('LABIA_PROM',TRUE),
		'HAMIL' => $this->input->post('HAMIL',TRUE),
		'TGL_HAID' => $this->input->post('TGL_HAID',TRUE),
		'PERIKSA_CERVIX' => $this->input->post('PERIKSA_CERVIX',TRUE),
		'BENTUK_PAYUDARA' => $this->input->post('BENTUK_PAYUDARA',TRUE),
		'KENYAL' => $this->input->post('KENYAL',TRUE),
		'MASSA' => $this->input->post('MASSA',TRUE),
		'NYERI_RABA' => $this->input->post('NYERI_RABA',TRUE),
		'BENTUK_PUTING' => $this->input->post('BENTUK_PUTING',TRUE),
		'MAMMO' => $this->input->post('MAMMO',TRUE),
		'ALAT_KONTRASEPSI' => $this->input->post('ALAT_KONTRASEPSI',TRUE),
		'MASALAH_SEKS' => $this->input->post('MASALAH_SEKS',TRUE),
		'PREPUTIUM' => $this->input->post('PREPUTIUM',TRUE),
		'MASALAH_PROSTAT' => $this->input->post('MASALAH_PROSTAT',TRUE),
		'BENTUK_SKROTUM' => $this->input->post('BENTUK_SKROTUM',TRUE),
		'TESTIS' => $this->input->post('TESTIS',TRUE),
		'MASSA_BEN' => $this->input->post('MASSA_BEN',TRUE),
		'HERNIASI' => $this->input->post('HERNIASI',TRUE),
		'LAIN2' => $this->input->post('LAIN2',TRUE),
		'ALAT_KONTRA' => $this->input->post('ALAT_KONTRA',TRUE),
		'MASALAH_REPRO' => $this->input->post('MASALAH_REPRO',TRUE),
		'EKSTREMITAS_ATAS' => $this->input->post('EKSTREMITAS_ATAS',TRUE),
		'EKSTREMITAS_BAWAH' => $this->input->post('EKSTREMITAS_BAWAH',TRUE),
		'AKTIVITAS' => $this->input->post('AKTIVITAS',TRUE),
		'BERJALAN' => $this->input->post('BERJALAN',TRUE),
		'SISTEM_INTE' => $this->input->post('SISTEM_INTE',TRUE),
		'KENYAMANAN' => $this->input->post('KENYAMANAN',TRUE),
		'KES_DIRI' => $this->input->post('KES_DIRI',TRUE),
		'SOS_SUPORT' => $this->input->post('SOS_SUPORT',TRUE),
		'ANSIETAS' => $this->input->post('ANSIETAS',TRUE),
		'KEHILANGAN' => $this->input->post('KEHILANGAN',TRUE),
		'STATUS_EMOSI' => $this->input->post('STATUS_EMOSI',TRUE),
		'KONSEP_DIRI' => $this->input->post('KONSEP_DIRI',TRUE),
		'RESPON_HILANG' => $this->input->post('RESPON_HILANG',TRUE),
		'SUMBER_STRESS' => $this->input->post('SUMBER_STRESS',TRUE),
		'BERARTI' => $this->input->post('BERARTI',TRUE),
		'TERLIBAT' => $this->input->post('TERLIBAT',TRUE),
		'HUBUNGAN' => $this->input->post('HUBUNGAN',TRUE),
		'KOMUNIKASI' => $this->input->post('KOMUNIKASI',TRUE),
		'KEPUTUSAN' => $this->input->post('KEPUTUSAN',TRUE),
		'MENGASUH' => $this->input->post('MENGASUH',TRUE),
		'DUKUNGAN' => $this->input->post('DUKUNGAN',TRUE),
		'REAKSI' => $this->input->post('REAKSI',TRUE),
		'BUDAYA' => $this->input->post('BUDAYA',TRUE),
		'POLA_AKTIVITAS' => $this->input->post('POLA_AKTIVITAS',TRUE),
		'POLA_ISTIRAHAT' => $this->input->post('POLA_ISTIRAHAT',TRUE),
		'POLA_MAKAN' => $this->input->post('POLA_MAKAN',TRUE),
		'PANTANGAN' => $this->input->post('PANTANGAN',TRUE),
		'KEPERCAYAAN' => $this->input->post('KEPERCAYAAN',TRUE),
		'PANTANGAN_HARI' => $this->input->post('PANTANGAN_HARI',TRUE),
		'PANTANGAN_LAIN' => $this->input->post('PANTANGAN_LAIN',TRUE),
		'ANJURAN' => $this->input->post('ANJURAN',TRUE),
		'NILAI_KEYAKINAN' => $this->input->post('NILAI_KEYAKINAN',TRUE),
		'KEGIATAN_IBADAH' => $this->input->post('KEGIATAN_IBADAH',TRUE),
		'PENG_AGAMA' => $this->input->post('PENG_AGAMA',TRUE),
		'SPIRIT' => $this->input->post('SPIRIT',TRUE),
		'BANTUAN' => $this->input->post('BANTUAN',TRUE),
		'PAHAM_PENYAKIT' => $this->input->post('PAHAM_PENYAKIT',TRUE),
		'PAHAM_OBAT' => $this->input->post('PAHAM_OBAT',TRUE),
		'PAHAM_NUTRISI' => $this->input->post('PAHAM_NUTRISI',TRUE),
		'PAHAM_RAWAT' => $this->input->post('PAHAM_RAWAT',TRUE),
		'HAMBATAN_EDUKASI' => $this->input->post('HAMBATAN_EDUKASI',TRUE),
		'FREK_MAKAN' => $this->input->post('FREK_MAKAN',TRUE),
		'JUM_MAKAN' => $this->input->post('JUM_MAKAN',TRUE),
		'JEN_MAKAN' => $this->input->post('JEN_MAKAN',TRUE),
		'KOM_MAKAN' => $this->input->post('KOM_MAKAN',TRUE),
		'DIET' => $this->input->post('DIET',TRUE),
		'CARA_MAKAN' => $this->input->post('CARA_MAKAN',TRUE),
		'GANGGUAN' => $this->input->post('GANGGUAN',TRUE),
		'FREK_MINUM' => $this->input->post('FREK_MINUM',TRUE),
		'JUM_MINUM' => $this->input->post('JUM_MINUM',TRUE),
		'JEN_MINUM' => $this->input->post('JEN_MINUM',TRUE),
		'GANG_MINUM' => $this->input->post('GANG_MINUM',TRUE),
		'FREK_BAK' => $this->input->post('FREK_BAK',TRUE),
		'WARNA_BAK' => $this->input->post('WARNA_BAK',TRUE),
		'JMLH_BAK' => $this->input->post('JMLH_BAK',TRUE),
		'PENG_KAT_BAK' => $this->input->post('PENG_KAT_BAK',TRUE),
		'KEM_HAN_BAK' => $this->input->post('KEM_HAN_BAK',TRUE),
		'INKONT_BAK' => $this->input->post('INKONT_BAK',TRUE),
		'DIURESIS_BAK' => $this->input->post('DIURESIS_BAK',TRUE),
		'FREK_BAB' => $this->input->post('FREK_BAB',TRUE),
		'WARNA_BAB' => $this->input->post('WARNA_BAB',TRUE),
		'KONSIST_BAB' => $this->input->post('KONSIST_BAB',TRUE),
		'GANG_BAB' => $this->input->post('GANG_BAB',TRUE),
		'STOMA_BAB' => $this->input->post('STOMA_BAB',TRUE),
		'PENG_OBAT_BAB' => $this->input->post('PENG_OBAT_BAB',TRUE),
		'IST_SIANG' => $this->input->post('IST_SIANG',TRUE),
		'IST_MALAM' => $this->input->post('IST_MALAM',TRUE),
		'IST_CAHAYA' => $this->input->post('IST_CAHAYA',TRUE),
		'IST_POSISI' => $this->input->post('IST_POSISI',TRUE),
		'IST_LING' => $this->input->post('IST_LING',TRUE),
		'IST_GANG_TIDUR' => $this->input->post('IST_GANG_TIDUR',TRUE),
		'PENG_OBAT_IST' => $this->input->post('PENG_OBAT_IST',TRUE),
		'FREK_MAND' => $this->input->post('FREK_MAND',TRUE),
		'CUC_RAMB_MAND' => $this->input->post('CUC_RAMB_MAND',TRUE),
		'SIH_GIGI_MAND' => $this->input->post('SIH_GIGI_MAND',TRUE),
		'BANT_MAND' => $this->input->post('BANT_MAND',TRUE),
		'GANT_PAKAI' => $this->input->post('GANT_PAKAI',TRUE),
		'PAK_CUCI' => $this->input->post('PAK_CUCI',TRUE),
		'PAK_BANT' => $this->input->post('PAK_BANT',TRUE),
		'ALT_BANT' => $this->input->post('ALT_BANT',TRUE),
		'KEMP_MUND' => $this->input->post('KEMP_MUND',TRUE),
		'BIL_PUT' => $this->input->post('BIL_PUT',TRUE),
		'ADAPTIF' => $this->input->post('ADAPTIF',TRUE),
		'MALADAPTIF' => $this->input->post('MALADAPTIF',TRUE),
		'PENANGGUNGJAWAB_NAMA' => $this->input->post('PENANGGUNGJAWAB_NAMA',TRUE),
		'PENANGGUNGJAWAB_HUBUNGAN' => $this->input->post('PENANGGUNGJAWAB_HUBUNGAN',TRUE),
		'PENANGGUNGJAWAB_ALAMAT' => $this->input->post('PENANGGUNGJAWAB_ALAMAT',TRUE),
		'PENANGGUNGJAWAB_PHONE' => $this->input->post('PENANGGUNGJAWAB_PHONE',TRUE),
		'obat2' => $this->input->post('obat2',TRUE),
		'PERBANDINGAN_BB' => $this->input->post('PERBANDINGAN_BB',TRUE),
		'KONTINENSIA' => $this->input->post('KONTINENSIA',TRUE),
		'JENIS_KULIT1' => $this->input->post('JENIS_KULIT1',TRUE),
		'MOBILITAS' => $this->input->post('MOBILITAS',TRUE),
		'JK' => $this->input->post('JK',TRUE),
		'UMUR' => $this->input->post('UMUR',TRUE),
		'NAFSU_MAKAN' => $this->input->post('NAFSU_MAKAN',TRUE),
		'OBAT1' => $this->input->post('OBAT1',TRUE),
		'MALNUTRISI' => $this->input->post('MALNUTRISI',TRUE),
		'MOTORIK1' => $this->input->post('MOTORIK1',TRUE),
		'SPINAL' => $this->input->post('SPINAL',TRUE),
		'MEJA_OPERASI' => $this->input->post('MEJA_OPERASI',TRUE),
		'RIWAYAT_JATUH' => $this->input->post('RIWAYAT_JATUH',TRUE),
		'DIAGNOSIS_SEKUNDER' => $this->input->post('DIAGNOSIS_SEKUNDER',TRUE),
		'ALAT_BANTU' => $this->input->post('ALAT_BANTU',TRUE),
		'HEPARIN' => $this->input->post('HEPARIN',TRUE),
		'GAYA_BERJALAN' => $this->input->post('GAYA_BERJALAN',TRUE),
		'KESADARAN1' => $this->input->post('KESADARAN1',TRUE),
		'NOMR_LAMA' => $this->input->post('NOMR_LAMA',TRUE),
		'NO_KARTU' => $this->input->post('NO_KARTU',TRUE),
		'JNS_PASIEN' => $this->input->post('JNS_PASIEN',TRUE),
		'KDPROVIDER' => $this->input->post('KDPROVIDER',TRUE),
		'NMPROVIDER' => $this->input->post('NMPROVIDER',TRUE),
		'Kelas' => $this->input->post('Kelas',TRUE),
		'catatan_pembayaran' => $this->input->post('catatan_pembayaran',TRUE),
		'NAMAREF' => $this->input->post('NAMAREF',TRUE),
		'NOMRREF' => $this->input->post('NOMRREF',TRUE),
		'KETERANGAN' => $this->input->post('KETERANGAN',TRUE),
		'SUKU' => $this->input->post('SUKU',TRUE),
	    );

            $this->M_pasien_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('m_pasien'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_pasien_model->get_by_id($id);

        if ($row) {
            $this->M_pasien_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('m_pasien'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('m_pasien'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('NOMR', 'nomr', 'trim|required');
	$this->form_validation->set_rules('TITLE', 'title', 'trim|required');
	$this->form_validation->set_rules('NAMA', 'nama', 'trim|required');
	$this->form_validation->set_rules('TEMPAT', 'tempat', 'trim|required');
	$this->form_validation->set_rules('TGLLAHIR', 'tgllahir', 'trim|required');
	$this->form_validation->set_rules('JENISKELAMIN', 'jeniskelamin', 'trim|required');
	$this->form_validation->set_rules('ALAMAT', 'alamat', 'trim|required');
	$this->form_validation->set_rules('KELURAHAN', 'kelurahan', 'trim|required');
	$this->form_validation->set_rules('KDKECAMATAN', 'kdkecamatan', 'trim|required');
	$this->form_validation->set_rules('KOTA', 'kota', 'trim|required');
	$this->form_validation->set_rules('KDPROVINSI', 'kdprovinsi', 'trim|required');
	$this->form_validation->set_rules('NOTELP', 'notelp', 'trim|required');
	$this->form_validation->set_rules('NOKTP', 'noktp', 'trim|required');
	$this->form_validation->set_rules('SUAMI_ORTU', 'suami ortu', 'trim|required');
	$this->form_validation->set_rules('PEKERJAAN', 'pekerjaan', 'trim|required');
	$this->form_validation->set_rules('STATUS', 'status', 'trim|required');
	$this->form_validation->set_rules('AGAMA', 'agama', 'trim|required');
	$this->form_validation->set_rules('PENDIDIKAN', 'pendidikan', 'trim|required');
	$this->form_validation->set_rules('KDCARABAYAR', 'kdcarabayar', 'trim|required');
	$this->form_validation->set_rules('NIP', 'nip', 'trim|required');
	$this->form_validation->set_rules('TGLDAFTAR', 'tgldaftar', 'trim|required');
	$this->form_validation->set_rules('ALAMAT_KTP', 'alamat ktp', 'trim|required');
	$this->form_validation->set_rules('PARENT_NOMR', 'parent nomr', 'trim|required');
	$this->form_validation->set_rules('NAMA_OBAT', 'nama obat', 'trim|required');
	$this->form_validation->set_rules('DOSIS', 'dosis', 'trim|required');
	$this->form_validation->set_rules('CARA_PEMBERIAN', 'cara pemberian', 'trim|required');
	$this->form_validation->set_rules('FREKUENSI', 'frekuensi', 'trim|required');
	$this->form_validation->set_rules('WAKTU_TGL', 'waktu tgl', 'trim|required');
	$this->form_validation->set_rules('LAMA_WAKTU', 'lama waktu', 'trim|required');
	$this->form_validation->set_rules('ALERGI_OBAT', 'alergi obat', 'trim|required');
	$this->form_validation->set_rules('REAKSI_ALERGI', 'reaksi alergi', 'trim|required');
	$this->form_validation->set_rules('RIWAYAT_KES', 'riwayat kes', 'trim|required');
	$this->form_validation->set_rules('BB_LAHIR', 'bb lahir', 'trim|required');
	$this->form_validation->set_rules('BB_SEKARANG', 'bb sekarang', 'trim|required');
	$this->form_validation->set_rules('FISIK_FONTANEL', 'fisik fontanel', 'trim|required');
	$this->form_validation->set_rules('FISIK_REFLEKS', 'fisik refleks', 'trim|required');
	$this->form_validation->set_rules('FISIK_SENSASI', 'fisik sensasi', 'trim|required');
	$this->form_validation->set_rules('MOTORIK_KASAR', 'motorik kasar', 'trim|required');
	$this->form_validation->set_rules('MOTORIK_HALUS', 'motorik halus', 'trim|required');
	$this->form_validation->set_rules('MAMPU_BICARA', 'mampu bicara', 'trim|required');
	$this->form_validation->set_rules('MAMPU_SOSIALISASI', 'mampu sosialisasi', 'trim|required');
	$this->form_validation->set_rules('BCG', 'bcg', 'trim|required');
	$this->form_validation->set_rules('POLIO', 'polio', 'trim|required');
	$this->form_validation->set_rules('DPT', 'dpt', 'trim|required');
	$this->form_validation->set_rules('CAMPAK', 'campak', 'trim|required');
	$this->form_validation->set_rules('HEPATITIS_B', 'hepatitis b', 'trim|required');
	$this->form_validation->set_rules('TD', 'td', 'trim|required');
	$this->form_validation->set_rules('SUHU', 'suhu', 'trim|required');
	$this->form_validation->set_rules('RR', 'rr', 'trim|required');
	$this->form_validation->set_rules('NADI', 'nadi', 'trim|required');
	$this->form_validation->set_rules('BB', 'bb', 'trim|required');
	$this->form_validation->set_rules('TB', 'tb', 'trim|required');
	$this->form_validation->set_rules('EYE', 'eye', 'trim|required');
	$this->form_validation->set_rules('MOTORIK', 'motorik', 'trim|required');
	$this->form_validation->set_rules('VERBAL', 'verbal', 'trim|required');
	$this->form_validation->set_rules('TOTAL_GCS', 'total gcs', 'trim|required');
	$this->form_validation->set_rules('REAKSI_PUPIL', 'reaksi pupil', 'trim|required');
	$this->form_validation->set_rules('KESADARAN', 'kesadaran', 'trim|required');
	$this->form_validation->set_rules('KEPALA', 'kepala', 'trim|required');
	$this->form_validation->set_rules('RAMBUT', 'rambut', 'trim|required');
	$this->form_validation->set_rules('MUKA', 'muka', 'trim|required');
	$this->form_validation->set_rules('MATA', 'mata', 'trim|required');
	$this->form_validation->set_rules('GANG_LIHAT', 'gang lihat', 'trim|required');
	$this->form_validation->set_rules('ALATBANTU_LIHAT', 'alatbantu lihat', 'trim|required');
	$this->form_validation->set_rules('BENTUK', 'bentuk', 'trim|required');
	$this->form_validation->set_rules('PENDENGARAN', 'pendengaran', 'trim|required');
	$this->form_validation->set_rules('LUB_TELINGA', 'lub telinga', 'trim|required');
	$this->form_validation->set_rules('BENTUK_HIDUNG', 'bentuk hidung', 'trim|required');
	$this->form_validation->set_rules('MEMBRAN_MUK', 'membran muk', 'trim|required');
	$this->form_validation->set_rules('MAMPU_HIDU', 'mampu hidu', 'trim|required');
	$this->form_validation->set_rules('ALAT_HIDUNG', 'alat hidung', 'trim|required');
	$this->form_validation->set_rules('RONGGA_MULUT', 'rongga mulut', 'trim|required');
	$this->form_validation->set_rules('WARNA_MEMBRAN', 'warna membran', 'trim|required');
	$this->form_validation->set_rules('LEMBAB', 'lembab', 'trim|required');
	$this->form_validation->set_rules('STOMATITIS', 'stomatitis', 'trim|required');
	$this->form_validation->set_rules('LIDAH', 'lidah', 'trim|required');
	$this->form_validation->set_rules('GIGI', 'gigi', 'trim|required');
	$this->form_validation->set_rules('TONSIL', 'tonsil', 'trim|required');
	$this->form_validation->set_rules('KELAINAN', 'kelainan', 'trim|required');
	$this->form_validation->set_rules('PERGERAKAN', 'pergerakan', 'trim|required');
	$this->form_validation->set_rules('KEL_TIROID', 'kel tiroid', 'trim|required');
	$this->form_validation->set_rules('KEL_GETAH', 'kel getah', 'trim|required');
	$this->form_validation->set_rules('TEKANAN_VENA', 'tekanan vena', 'trim|required');
	$this->form_validation->set_rules('REF_MENELAN', 'ref menelan', 'trim|required');
	$this->form_validation->set_rules('NYERI', 'nyeri', 'trim|required');
	$this->form_validation->set_rules('KREPITASI', 'krepitasi', 'trim|required');
	$this->form_validation->set_rules('KEL_LAIN', 'kel lain', 'trim|required');
	$this->form_validation->set_rules('BENTUK_DADA', 'bentuk dada', 'trim|required');
	$this->form_validation->set_rules('POLA_NAPAS', 'pola napas', 'trim|required');
	$this->form_validation->set_rules('BENTUK_THORAKS', 'bentuk thoraks', 'trim|required');
	$this->form_validation->set_rules('PAL_KREP', 'pal krep', 'trim|required');
	$this->form_validation->set_rules('BENJOLAN', 'benjolan', 'trim|required');
	$this->form_validation->set_rules('PAL_NYERI', 'pal nyeri', 'trim|required');
	$this->form_validation->set_rules('PERKUSI', 'perkusi', 'trim|required');
	$this->form_validation->set_rules('PARU', 'paru', 'trim|required');
	$this->form_validation->set_rules('JANTUNG', 'jantung', 'trim|required');
	$this->form_validation->set_rules('SUARA_JANTUNG', 'suara jantung', 'trim|required');
	$this->form_validation->set_rules('ALATBANTU_JAN', 'alatbantu jan', 'trim|required');
	$this->form_validation->set_rules('BENTUK_ABDOMEN', 'bentuk abdomen', 'trim|required');
	$this->form_validation->set_rules('AUSKULTASI', 'auskultasi', 'trim|required');
	$this->form_validation->set_rules('NYERI_PASI', 'nyeri pasi', 'trim|required');
	$this->form_validation->set_rules('PEM_KELENJAR', 'pem kelenjar', 'trim|required');
	$this->form_validation->set_rules('PERKUSI_AUS', 'perkusi aus', 'trim|required');
	$this->form_validation->set_rules('VAGINA', 'vagina', 'trim|required');
	$this->form_validation->set_rules('MENSTRUASI', 'menstruasi', 'trim|required');
	$this->form_validation->set_rules('KATETER', 'kateter', 'trim|required');
	$this->form_validation->set_rules('LABIA_PROM', 'labia prom', 'trim|required');
	$this->form_validation->set_rules('HAMIL', 'hamil', 'trim|required');
	$this->form_validation->set_rules('TGL_HAID', 'tgl haid', 'trim|required');
	$this->form_validation->set_rules('PERIKSA_CERVIX', 'periksa cervix', 'trim|required');
	$this->form_validation->set_rules('BENTUK_PAYUDARA', 'bentuk payudara', 'trim|required');
	$this->form_validation->set_rules('KENYAL', 'kenyal', 'trim|required');
	$this->form_validation->set_rules('MASSA', 'massa', 'trim|required');
	$this->form_validation->set_rules('NYERI_RABA', 'nyeri raba', 'trim|required');
	$this->form_validation->set_rules('BENTUK_PUTING', 'bentuk puting', 'trim|required');
	$this->form_validation->set_rules('MAMMO', 'mammo', 'trim|required');
	$this->form_validation->set_rules('ALAT_KONTRASEPSI', 'alat kontrasepsi', 'trim|required');
	$this->form_validation->set_rules('MASALAH_SEKS', 'masalah seks', 'trim|required');
	$this->form_validation->set_rules('PREPUTIUM', 'preputium', 'trim|required');
	$this->form_validation->set_rules('MASALAH_PROSTAT', 'masalah prostat', 'trim|required');
	$this->form_validation->set_rules('BENTUK_SKROTUM', 'bentuk skrotum', 'trim|required');
	$this->form_validation->set_rules('TESTIS', 'testis', 'trim|required');
	$this->form_validation->set_rules('MASSA_BEN', 'massa ben', 'trim|required');
	$this->form_validation->set_rules('HERNIASI', 'herniasi', 'trim|required');
	$this->form_validation->set_rules('LAIN2', 'lain2', 'trim|required');
	$this->form_validation->set_rules('ALAT_KONTRA', 'alat kontra', 'trim|required');
	$this->form_validation->set_rules('MASALAH_REPRO', 'masalah repro', 'trim|required');
	$this->form_validation->set_rules('EKSTREMITAS_ATAS', 'ekstremitas atas', 'trim|required');
	$this->form_validation->set_rules('EKSTREMITAS_BAWAH', 'ekstremitas bawah', 'trim|required');
	$this->form_validation->set_rules('AKTIVITAS', 'aktivitas', 'trim|required');
	$this->form_validation->set_rules('BERJALAN', 'berjalan', 'trim|required');
	$this->form_validation->set_rules('SISTEM_INTE', 'sistem inte', 'trim|required');
	$this->form_validation->set_rules('KENYAMANAN', 'kenyamanan', 'trim|required');
	$this->form_validation->set_rules('KES_DIRI', 'kes diri', 'trim|required');
	$this->form_validation->set_rules('SOS_SUPORT', 'sos suport', 'trim|required');
	$this->form_validation->set_rules('ANSIETAS', 'ansietas', 'trim|required');
	$this->form_validation->set_rules('KEHILANGAN', 'kehilangan', 'trim|required');
	$this->form_validation->set_rules('STATUS_EMOSI', 'status emosi', 'trim|required');
	$this->form_validation->set_rules('KONSEP_DIRI', 'konsep diri', 'trim|required');
	$this->form_validation->set_rules('RESPON_HILANG', 'respon hilang', 'trim|required');
	$this->form_validation->set_rules('SUMBER_STRESS', 'sumber stress', 'trim|required');
	$this->form_validation->set_rules('BERARTI', 'berarti', 'trim|required');
	$this->form_validation->set_rules('TERLIBAT', 'terlibat', 'trim|required');
	$this->form_validation->set_rules('HUBUNGAN', 'hubungan', 'trim|required');
	$this->form_validation->set_rules('KOMUNIKASI', 'komunikasi', 'trim|required');
	$this->form_validation->set_rules('KEPUTUSAN', 'keputusan', 'trim|required');
	$this->form_validation->set_rules('MENGASUH', 'mengasuh', 'trim|required');
	$this->form_validation->set_rules('DUKUNGAN', 'dukungan', 'trim|required');
	$this->form_validation->set_rules('REAKSI', 'reaksi', 'trim|required');
	$this->form_validation->set_rules('BUDAYA', 'budaya', 'trim|required');
	$this->form_validation->set_rules('POLA_AKTIVITAS', 'pola aktivitas', 'trim|required');
	$this->form_validation->set_rules('POLA_ISTIRAHAT', 'pola istirahat', 'trim|required');
	$this->form_validation->set_rules('POLA_MAKAN', 'pola makan', 'trim|required');
	$this->form_validation->set_rules('PANTANGAN', 'pantangan', 'trim|required');
	$this->form_validation->set_rules('KEPERCAYAAN', 'kepercayaan', 'trim|required');
	$this->form_validation->set_rules('PANTANGAN_HARI', 'pantangan hari', 'trim|required');
	$this->form_validation->set_rules('PANTANGAN_LAIN', 'pantangan lain', 'trim|required');
	$this->form_validation->set_rules('ANJURAN', 'anjuran', 'trim|required');
	$this->form_validation->set_rules('NILAI_KEYAKINAN', 'nilai keyakinan', 'trim|required');
	$this->form_validation->set_rules('KEGIATAN_IBADAH', 'kegiatan ibadah', 'trim|required');
	$this->form_validation->set_rules('PENG_AGAMA', 'peng agama', 'trim|required');
	$this->form_validation->set_rules('SPIRIT', 'spirit', 'trim|required');
	$this->form_validation->set_rules('BANTUAN', 'bantuan', 'trim|required');
	$this->form_validation->set_rules('PAHAM_PENYAKIT', 'paham penyakit', 'trim|required');
	$this->form_validation->set_rules('PAHAM_OBAT', 'paham obat', 'trim|required');
	$this->form_validation->set_rules('PAHAM_NUTRISI', 'paham nutrisi', 'trim|required');
	$this->form_validation->set_rules('PAHAM_RAWAT', 'paham rawat', 'trim|required');
	$this->form_validation->set_rules('HAMBATAN_EDUKASI', 'hambatan edukasi', 'trim|required');
	$this->form_validation->set_rules('FREK_MAKAN', 'frek makan', 'trim|required');
	$this->form_validation->set_rules('JUM_MAKAN', 'jum makan', 'trim|required');
	$this->form_validation->set_rules('JEN_MAKAN', 'jen makan', 'trim|required');
	$this->form_validation->set_rules('KOM_MAKAN', 'kom makan', 'trim|required');
	$this->form_validation->set_rules('DIET', 'diet', 'trim|required');
	$this->form_validation->set_rules('CARA_MAKAN', 'cara makan', 'trim|required');
	$this->form_validation->set_rules('GANGGUAN', 'gangguan', 'trim|required');
	$this->form_validation->set_rules('FREK_MINUM', 'frek minum', 'trim|required');
	$this->form_validation->set_rules('JUM_MINUM', 'jum minum', 'trim|required');
	$this->form_validation->set_rules('JEN_MINUM', 'jen minum', 'trim|required');
	$this->form_validation->set_rules('GANG_MINUM', 'gang minum', 'trim|required');
	$this->form_validation->set_rules('FREK_BAK', 'frek bak', 'trim|required');
	$this->form_validation->set_rules('WARNA_BAK', 'warna bak', 'trim|required');
	$this->form_validation->set_rules('JMLH_BAK', 'jmlh bak', 'trim|required');
	$this->form_validation->set_rules('PENG_KAT_BAK', 'peng kat bak', 'trim|required');
	$this->form_validation->set_rules('KEM_HAN_BAK', 'kem han bak', 'trim|required');
	$this->form_validation->set_rules('INKONT_BAK', 'inkont bak', 'trim|required');
	$this->form_validation->set_rules('DIURESIS_BAK', 'diuresis bak', 'trim|required');
	$this->form_validation->set_rules('FREK_BAB', 'frek bab', 'trim|required');
	$this->form_validation->set_rules('WARNA_BAB', 'warna bab', 'trim|required');
	$this->form_validation->set_rules('KONSIST_BAB', 'konsist bab', 'trim|required');
	$this->form_validation->set_rules('GANG_BAB', 'gang bab', 'trim|required');
	$this->form_validation->set_rules('STOMA_BAB', 'stoma bab', 'trim|required');
	$this->form_validation->set_rules('PENG_OBAT_BAB', 'peng obat bab', 'trim|required');
	$this->form_validation->set_rules('IST_SIANG', 'ist siang', 'trim|required');
	$this->form_validation->set_rules('IST_MALAM', 'ist malam', 'trim|required');
	$this->form_validation->set_rules('IST_CAHAYA', 'ist cahaya', 'trim|required');
	$this->form_validation->set_rules('IST_POSISI', 'ist posisi', 'trim|required');
	$this->form_validation->set_rules('IST_LING', 'ist ling', 'trim|required');
	$this->form_validation->set_rules('IST_GANG_TIDUR', 'ist gang tidur', 'trim|required');
	$this->form_validation->set_rules('PENG_OBAT_IST', 'peng obat ist', 'trim|required');
	$this->form_validation->set_rules('FREK_MAND', 'frek mand', 'trim|required');
	$this->form_validation->set_rules('CUC_RAMB_MAND', 'cuc ramb mand', 'trim|required');
	$this->form_validation->set_rules('SIH_GIGI_MAND', 'sih gigi mand', 'trim|required');
	$this->form_validation->set_rules('BANT_MAND', 'bant mand', 'trim|required');
	$this->form_validation->set_rules('GANT_PAKAI', 'gant pakai', 'trim|required');
	$this->form_validation->set_rules('PAK_CUCI', 'pak cuci', 'trim|required');
	$this->form_validation->set_rules('PAK_BANT', 'pak bant', 'trim|required');
	$this->form_validation->set_rules('ALT_BANT', 'alt bant', 'trim|required');
	$this->form_validation->set_rules('KEMP_MUND', 'kemp mund', 'trim|required');
	$this->form_validation->set_rules('BIL_PUT', 'bil put', 'trim|required');
	$this->form_validation->set_rules('ADAPTIF', 'adaptif', 'trim|required');
	$this->form_validation->set_rules('MALADAPTIF', 'maladaptif', 'trim|required');
	$this->form_validation->set_rules('PENANGGUNGJAWAB_NAMA', 'penanggungjawab nama', 'trim|required');
	$this->form_validation->set_rules('PENANGGUNGJAWAB_HUBUNGAN', 'penanggungjawab hubungan', 'trim|required');
	$this->form_validation->set_rules('PENANGGUNGJAWAB_ALAMAT', 'penanggungjawab alamat', 'trim|required');
	$this->form_validation->set_rules('PENANGGUNGJAWAB_PHONE', 'penanggungjawab phone', 'trim|required');
	$this->form_validation->set_rules('obat2', 'obat2', 'trim|required');
	$this->form_validation->set_rules('PERBANDINGAN_BB', 'perbandingan bb', 'trim|required');
	$this->form_validation->set_rules('KONTINENSIA', 'kontinensia', 'trim|required');
	$this->form_validation->set_rules('JENIS_KULIT1', 'jenis kulit1', 'trim|required');
	$this->form_validation->set_rules('MOBILITAS', 'mobilitas', 'trim|required');
	$this->form_validation->set_rules('JK', 'jk', 'trim|required');
	$this->form_validation->set_rules('UMUR', 'umur', 'trim|required');
	$this->form_validation->set_rules('NAFSU_MAKAN', 'nafsu makan', 'trim|required');
	$this->form_validation->set_rules('OBAT1', 'obat1', 'trim|required');
	$this->form_validation->set_rules('MALNUTRISI', 'malnutrisi', 'trim|required');
	$this->form_validation->set_rules('MOTORIK1', 'motorik1', 'trim|required');
	$this->form_validation->set_rules('SPINAL', 'spinal', 'trim|required');
	$this->form_validation->set_rules('MEJA_OPERASI', 'meja operasi', 'trim|required');
	$this->form_validation->set_rules('RIWAYAT_JATUH', 'riwayat jatuh', 'trim|required');
	$this->form_validation->set_rules('DIAGNOSIS_SEKUNDER', 'diagnosis sekunder', 'trim|required');
	$this->form_validation->set_rules('ALAT_BANTU', 'alat bantu', 'trim|required');
	$this->form_validation->set_rules('HEPARIN', 'heparin', 'trim|required');
	$this->form_validation->set_rules('GAYA_BERJALAN', 'gaya berjalan', 'trim|required');
	$this->form_validation->set_rules('KESADARAN1', 'kesadaran1', 'trim|required');
	$this->form_validation->set_rules('NOMR_LAMA', 'nomr lama', 'trim|required');
	$this->form_validation->set_rules('NO_KARTU', 'no kartu', 'trim|required');
	$this->form_validation->set_rules('JNS_PASIEN', 'jns pasien', 'trim|required');
	$this->form_validation->set_rules('KDPROVIDER', 'kdprovider', 'trim|required');
	$this->form_validation->set_rules('NMPROVIDER', 'nmprovider', 'trim|required');
	$this->form_validation->set_rules('Kelas', 'kelas', 'trim|required');
	$this->form_validation->set_rules('catatan_pembayaran', 'catatan pembayaran', 'trim|required');
	$this->form_validation->set_rules('NAMAREF', 'namaref', 'trim|required');
	$this->form_validation->set_rules('NOMRREF', 'nomrref', 'trim|required');
	$this->form_validation->set_rules('KETERANGAN', 'keterangan', 'trim|required');
	$this->form_validation->set_rules('SUKU', 'suku', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file M_pasien.php */
/* Location: ./application/controllers/M_pasien.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-06-27 06:13:31 */
/* http://harviacode.com */