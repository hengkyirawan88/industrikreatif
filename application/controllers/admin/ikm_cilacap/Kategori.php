<?php
class Kategori extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('m_kategori');
    }

    function index(){
        $data['kategori'] = $this->m_kategori->tampil()->result();
        $this->load->view('admin/v_header');
        $this->load->view('admin/ikm_cilacap/v_kategori',$data);
        $this->load->view('admin/v_footer');
    
    }

    function tambah(){
         $this->load->view('admin/v_header');
         $this->load->view('admin/ikm_cilacap/v_tambah_kategori');
         $this->load->view('admin/v_footer');
    }

  function tambah_kategori(){

           
           //tampung data dari form
            $nama = $this->input->post('nama');
            

       
            $this->m_kategori->insert(array(
            'nama' => $nama 

           
        ));
        $this->session->set_flashdata('msg','Data berhasil di upload');

        redirect('admin/ikm_cilacap/kategori');
        //localhost/sig_ikm_cilacap/admin/ikm_cilacap/kategori
        // echo $this->db->last_query();
 
        
    }


     
    function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_kategori->delete($id)) {
            redirect(site_url('admin/ikm_cilacap/kategori'));
            // echo $this->db->last_query();
        }
    }
 
 function edit($id = null)
    {
        if (!isset($id)) redirect('admin/ikm_cilacap/kategori');
       
        $kategori = $this->m_kategori;
        
        $validation = $this->form_validation;
        // $validation->set_rules($kategori->rules());

        if ($validation->run()) {
            $kategori->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

         
        $data["varkategori"] = $kategori->getById($id);
        if (!$data["varkategori"]) show_404();

        $this->load->view("admin/v_header" );
        $this->load->view("admin/ikm_cilacap/v_edit_kategori", $data);
        $this->load->view("admin/v_footer" );
    }

function update()
{

           //tampung data dari form
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            // $kerajinan = $this->input->post('kerajinan');
            // $kuliner = $this->input->post('kuliner');
            // $fashion = $this->input->post('fashion');
            // $kebudayaan = $this->input->post('kebudayaan');
            //   $aksesoris = $this->input->post('aksesoris');
            // $lainnya = $this->input->post('lainnya');
            // $tanggal = $this->input->post('tanggal');

            $id = array('id'=>$id);
            $data = array('nama' => $nama
            // 'kuliner' => $kuliner,
            // 'fashion' => $fashion,
            // 'kebudayaan' => $kebudayaan,
            //  'aksesoris' => $aksesoris,
            // 'lainnya' => $lainnya,
            // 'tanggal' => $tanggal

           
        );
         $this->m_kategori->update_kategori($data,$id);

        redirect('admin/ikm_cilacap/kategori');
        // echo $this->db->last_query();
 
    


 }
}