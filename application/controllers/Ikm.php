
<?php
class Ikm extends CI_Controller{
    function __construct(){
        parent:: __construct();
        // $this->load->model('m_pelaku_usaha');         
        // $this->load->model('m_kios_saprodi');
        // $this->load->model('m_ikm');
        // $this->load->model('m_testimoni');
        // $this->load->model('m_produk');
        // $this->load->model('m_rekomendasi_bbm');
        // $this->load->model('m_harga_kebun');
         $this->load->library('pagination');
        $this->load->model('m_ikm');
    }

     function index(){
    	 
       $config['base_url'] = site_url('ikm/index'); //site url
        $config['total_rows'] = $this->db->count_all('ikm'); //total row
        $config['per_page'] = 2;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'Last';
        $config['last_link']        = 'First';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->m_ikm->get_ikm_list($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
 
        //load view mahasiswa view
        // $this->load->view('v_ikm',$data);
   



        // untuk menampilkan link upload terupdate
        $data['ikm']= $this->m_ikm->tampil3()->result();
        
        // $data['rowAW']= $this->m_ikm->countRow();
        // untuk menampilkan isi halaman utama
        // $data['vikm']= $this->m_ikm->tampil2()->result();
        // $this->load->view('depan/v_header_agro');
        $this->load->view('depan/v_ikm', $data);
        // $this->load->view('depan/v_footer_agro');
      
    }

      function detail($id = null){
         
        $data['varikm'] = $this->m_ikm->getById($id);
        // $data['pp']=$this->m_komentar->db_edit($id)->row_array();
        $data['ikm']= $this->m_ikm->tampil3()->result();
        // $data['komentar']= $this->m_ikm->tampilkomentar($id)->result();
        
        if (!$data['varikm']) show_404();
        // $this->load->view('depan/v_header_agro');
        $this->load->view('depan/v_ikm_detail', $data);
        // $this->load->view('depan/v_footer' );
    }

    function login_admin(){
    	 
        // $data['kios_saprodi']= $this->m_kios_saprodi->tampil6()->result();
        // $this->load->view('admin/v_header');
        $this->load->view('admin/v_login');
        // $this->load->view('admin/v_footer');

        // echo $this->db->last_query();
    }

      function verifikasi(){
         
       $config['base_url'] = site_url('ikm/index'); //site url
        $config['total_rows'] = $this->db->count_all('ikm'); //total row
        $config['per_page'] = 2;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'Last';
        $config['last_link']        = 'First';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->m_ikm->get_ikm_list($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
 
        //load view mahasiswa view
        // $this->load->view('v_ikm',$data);
   



        // untuk menampilkan link upload terupdate
        $data['ikm']= $this->m_ikm->tampil3()->result();
        // $data['rowAW']= $this->m_ikm->countRow();
        // untuk menampilkan isi halaman utama
        // $data['vikm']= $this->m_ikm->tampil2()->result();
        // $this->load->view('depan/v_header_agro');
        $this->load->view('depan/v_ikm', $data);
        // $this->load->view('depan/v_footer_agro');
      
    }
    
 }
 ?>
     

 