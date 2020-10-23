<?php
class Dashboard extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('m_dashboard');
    }

    function index(){
     
   
        // $this->load->view('depan/v_header_harga_pasar');
        $this->load->view('depan/v_welcome');
        // $this->load->view('depan/v_footer');
        // echo $this->db->last_query();
    
    }

  }

 