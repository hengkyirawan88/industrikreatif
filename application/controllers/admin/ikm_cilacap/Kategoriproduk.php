<?php
class Kategoriproduk extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('m_kategoriproduk');
    }

    function index(){
        $data['kategoriproduk'] = $this->m_kategoriproduk->tampil()->result();
        $this->load->view('admin/v_header');
        $this->load->view('admin/ikm_cilacap/v_kategoriproduk',$data);
        $this->load->view('admin/v_footer');
    
    }

    function tambah(){
         $this->load->view('admin/v_header');
         $this->load->view('admin/ikm_cilacap/v_tambah_kategoriproduk');
         $this->load->view('admin/v_footer');
    }

  function tambah_kategoriproduk(){

           
           //tampung data dari form
            $nama = $this->input->post('nama_kategoriproduk');
            

       
            $this->m_kategoriproduk->insert(array(
            'nama_kategoriproduk' => $nama 

           
        ));
        $this->session->set_flashdata('msg','Data berhasil di upload');

        redirect('admin/ikm_cilacap/kategoriproduk');
        //localhost/sig_ikm_cilacap/admin/ikm_cilacap/kategoriproduk
        // echo $this->db->last_query();
 
        
    }


     
    function delete($id_kategoriproduk=null)
    {
        if (!isset($id_kategoriproduk)) show_404();
        
        if ($this->m_kategoriproduk->delete($id_kategoriproduk)) {
            redirect(site_url('admin/ikm_cilacap/kategoriproduk'));
            // echo $this->db->last_query();
        }
    }
 
 function edit($id_kategoriproduk = null)
    {
        if (!isset($id_kategoriproduk)) redirect('admin/ikm_cilacap/kategoriproduk');
       
        $kategoriproduk = $this->m_kategoriproduk;
        
        $validation = $this->form_validation;
        // $validation->set_rules($kategoriproduk->rules());

        if ($validation->run()) {
            $kategoriproduk->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

         
        $data["varkategoriproduk"] = $kategoriproduk->getByid_kategoriproduk($id_kategoriproduk);
        if (!$data["varkategoriproduk"]) show_404();

        $this->load->view("admin/v_header" );
        $this->load->view("admin/ikm_cilacap/v_edit_kategoriproduk", $data);
        $this->load->view("admin/v_footer" );
    }

function update()
{

           //tampung data dari form
            $id_kategoriproduk = $this->input->post('id_kategoriproduk');
            $nama_kategoriproduk = $this->input->post('nama_kategoriproduk');
            // $kerajinan = $this->input->post('kerajinan');
            // $kuliner = $this->input->post('kuliner');
            // $fashion = $this->input->post('fashion');
            // $kebudayaan = $this->input->post('kebudayaan');
            //   $aksesoris = $this->input->post('aksesoris');
            // $lainnya = $this->input->post('lainnya');
            // $tanggal = $this->input->post('tanggal');

            $id_kategoriproduk = array('id_kategoriproduk'=>$id_kategoriproduk);
            $data = array('nama_kategoriproduk' => $nama_kategoriproduk
            // 'kuliner' => $kuliner,
            // 'fashion' => $fashion,
            // 'kebudayaan' => $kebudayaan,
            //  'aksesoris' => $aksesoris,
            // 'lainnya' => $lainnya,
            // 'tanggal' => $tanggal

           
        );
         $this->m_kategoriproduk->update_kategoriproduk($data,$id_kategoriproduk);

        redirect('admin/ikm_cilacap/kategoriproduk');
        // echo $this->db->last_query();
 
    


 }
}