
<?php
class Home extends CI_Controller{
    function __construct(){
        parent:: __construct();
        // $this->load->model('m_pelaku_usaha');         
        // $this->load->model('m_kios_saprodi');
        // $this->load->model('m_agrowisata');
        // $this->load->model('m_testimoni');
        // $this->load->model('m_produk');
        // $this->load->model('m_rekomendasi_bbm');
        $this->load->model('m_dokumentasi');
        $this->load->model('m_statistik');
        $this->load->model('m_ikm');
    }

     function index(){
    	 
        $data['statistik']= $this->m_statistik->tampil6()->result();
        $data['jml_ikm'] = $this->m_ikm->jml_ikm();
        // $data['dokumentasi']= $this->m_dokumentasi->tampil3()->result();
        // $data['dokumentasi_produksi']= $this->m_dokumentasi->tampil4()->result();
        // $data['dokumentasi_seminar']= $this->m_dokumentasi->tampil5()->result();
        // $data['dokumentasi_lainnya']= $this->m_dokumentasi->tampil6()->result();
        $this->load->view('depan/v_header');
        $this->load->view('depan/v_home', $data);
        $this->load->view('depan/v_footer');

        // echo $this->db->last_query();
    }

       function dokumentasi(){
         
        // $data['statistik']= $this->m_statistik->tampil6()->result();
        $data['dokumentasi']= $this->m_dokumentasi->tampil3()->result();
        $data['dokumentasi_produksi']= $this->m_dokumentasi->tampil4()->result();
        $data['dokumentasi_seminar']= $this->m_dokumentasi->tampil5()->result();
        $data['dokumentasi_lainnya']= $this->m_dokumentasi->tampil6()->result();
        $this->load->view('depan/v_header');
        $this->load->view('depan/v_dokumentasi', $data);
        $this->load->view('depan/v_footer');

        // echo $this->db->last_query();
    }

    function login_admin(){
    	 
        // $data['kios_saprodi']= $this->m_kios_saprodi->tampil6()->result();
        // $this->load->view('admin/v_header');
        $this->load->view('admin/v_login');
        // $this->load->view('admin/v_footer');

        // echo $this->db->last_query();
    }
    
 }
 ?>
     

 