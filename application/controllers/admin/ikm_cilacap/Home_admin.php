<?php
class Home_admin extends CI_Controller{
    function __construct(){
        parent:: __construct();
        // $this->load->model('m_pelaku_usaha');         
        // $this->load->model('m_kios_saprodi');
        // $this->load->model('m_agrowisata');
        // $this->load->model('m_testimoni');
        // $this->load->model('m_produk');
        // $this->load->model('m_rekomendasi_bbm');
        // $this->load->model('m_harga_kebun');
        // $this->load->model('m_harga_horti');
    }

     function index(){
    	 
        // $data['kios_saprodi']= $this->m_kios_saprodi->tampil6()->result();
        $this->load->view('admin/v_header');
        $this->load->view('admin/v_home_admin');
        $this->load->view('admin/v_footer');

        // echo $this->db->last_query();
    }

    
 }
 ?>
     

 