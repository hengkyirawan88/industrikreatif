
<?php
class Dokumentasi extends CI_Controller{
    function __construct(){
        parent:: __construct();
        // $this->load->model('m_pelaku_usaha');         
        // $this->load->model('m_kios_saprodi');
        // $this->load->model('m_donatur');
        // $this->load->model('m_testimoni');
        // $this->load->model('m_produk');
        // $this->load->model('m_rekomendasi_bbm');
        // $this->load->model('m_harga_kebun');
         $this->load->library('pagination');
        $this->load->model('m_dokumentasi');
    }

     function index(){
    	 
      


        // untuk menampilkan link upload terupdate
        $data['dokumentasi']= $this->m_dokumentasi->tampil3()->result();
        // $data['rowPKO']= $this->m_donatur->countRows();
        // $data['rowAW']= $this->m_donatur->countRow();
        // untuk menampilkan isi halaman utama
        // $data['vdonatur']= $this->m_donatur->tampil2()->result();
        // $this->load->view('depan/v_header_agro');
        $this->load->view('depan/v_donatur', $data);

        // $this->load->view('depan/v_footer_agro');
      
    }

      function donatur_detail($id = null){
         
        $data['vardonatur'] = $this->m_donatur->getById($id);
        // $data['pp']=$this->m_komentar->db_edit($id)->row_array();
        $data['donatur']= $this->m_donatur->tampil3()->result();
        // $data['komentar']= $this->m_donatur->tampilkomentar($id)->result();
        
        if (!$data['vardonatur']) show_404();
        // $this->load->view('depan/v_header_agro');
        $this->load->view('depan/v_donatur_detail', $data);
        // $this->load->view('depan/v_footer' );
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
     

 