<?php
class lapangan extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('m_lapangan');
        
    }

    function index(){
        $data['lapangan'] = $this->m_lapangan->tampil()->result();
        $this->load->view('admin/v_header');
        $this->load->view('admin/ikm_cilacap/v_lapangan',$data);
        $this->load->view('admin/v_footer');
    
    }

    function tambah(){
         $this->load->view('admin/v_header');
         $this->load->view('admin/ikm_cilacap/v_tambah_lapangan');
         $this->load->view('admin/v_footer');
    }

  function tambah_lapangan(){

           
           //tampung data dari form
            $nama = $this->input->post('nama');
            

       
            $this->m_lapangan->insert(array(
            'nama' => $nama 

           
        ));
        $this->session->set_flashdata('msg','Data berhasil di upload');

        redirect('admin/ikm_cilacap/lapangan');
        //localhost/sig_ikm_cilacap/admin/ikm_cilacap/lapangan
        // echo $this->db->last_query();
 
        
    }


     
    function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_lapangan->delete($id)) {
            redirect(site_url('admin/ikm_cilacap/lapangan'));
            // echo $this->db->last_query();
        }
    }
 
 function edit($id = null)
    {
        if (!isset($id)) redirect('admin/ikm_cilacap/lapangan');
       
        $lapangan = $this->m_lapangan;
        
        $validation = $this->form_validation;
        // $validation->set_rules($lapangan->rules());

        if ($validation->run()) {
            $lapangan->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

         
        $data["varlapangan"] = $lapangan->getById($id);
        if (!$data["varlapangan"]) show_404();

        $this->load->view("admin/v_header" );
        $this->load->view("admin/ikm_cilacap/v_edit_lapangan", $data);
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
         $this->m_lapangan->update_lapangan($data,$id);

        redirect('admin/ikm_cilacap/lapangan');
        // echo $this->db->last_query();
 
    


 }
}