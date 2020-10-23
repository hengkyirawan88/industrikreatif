<?php
class Statistik extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('m_statistik');
    }

    function index(){
        $data['statistik'] = $this->m_statistik->tampil()->result();
        $this->load->view('admin/v_header');
        $this->load->view('admin/ikm_cilacap/v_statistik',$data);
        $this->load->view('admin/v_footer');
    
    }

    function tambah(){
         $this->load->view('admin/v_header');
         $this->load->view('admin/ikm_cilacap/v_tambah_statistik');
         $this->load->view('admin/v_footer');
    }

  function tambah_statistik(){

           
           //tampung data dari form
            $jumlah_dana_masuk = $this->input->post('jumlah_dana_masuk');
            $jumlah_dana_keluar = $this->input->post('jumlah_dana_keluar');
            $jumlah_dana_cadangan = $this->input->post('jumlah_dana_cadangan');
            $jumlah_hutang_pembangunan = $this->input->post('jumlah_hutang_pembangunan');

       
            $this->m_statistik->insert(array(
            'jumlah_dana_masuk' => $jumlah_dana_masuk,
            'jumlah_dana_keluar' => $jumlah_dana_keluar,
            'jumlah_dana_cadangan' => $jumlah_dana_cadangan,
            'jumlah_hutang_pembangunan' => $jumlah_hutang_pembangunan,

           
        ));
        $this->session->set_flashdata('msg','Data berhasil di upload');

        redirect('admin/ibnu_abbas/statistik');
        // echo $this->db->last_query();
 
        
    }


     
    function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_statistik->delete($id)) {
            redirect(site_url('admin/ikm_cilacap/statistik'));
            // echo $this->db->last_query();
        }
    }
 
 function edit($id = null)
    {
        if (!isset($id)) redirect('admin/ikm_cilacap/statistik');
       
        $statistik = $this->m_statistik;
        
        $validation = $this->form_validation;
        // $validation->set_rules($statistik->rules());

        if ($validation->run()) {
            $statistik->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

         
        $data["varstatistik"] = $statistik->getById($id);
        if (!$data["varstatistik"]) show_404();

        $this->load->view("admin/v_header" );
        $this->load->view("admin/ikm_cilacap/v_edit_statistik", $data);
        $this->load->view("admin/v_footer" );
    }

function update()
{

           //tampung data dari form
            $id_statistik = $this->input->post('id_statistik');
            $nama_bahanbaku = $this->input->post('nama_bahanbaku');
            // $kerajinan = $this->input->post('kerajinan');
            // $kuliner = $this->input->post('kuliner');
            // $fashion = $this->input->post('fashion');
            // $kebudayaan = $this->input->post('kebudayaan');
            //   $aksesoris = $this->input->post('aksesoris');
            // $lainnya = $this->input->post('lainnya');
            // $tanggal = $this->input->post('tanggal');

            $id = array('id_statistik'=>$id_statistik);
            $data = array('nama_bahanbaku' => $nama_bahanbaku
            // 'kuliner' => $kuliner,
            // 'fashion' => $fashion,
            // 'kebudayaan' => $kebudayaan,
            //  'aksesoris' => $aksesoris,
            // 'lainnya' => $lainnya,
            // 'tanggal' => $tanggal

           
        );
         $this->m_statistik->update_statistik($data,$id);

        redirect('admin/ikm_cilacap/statistik');
        // echo $this->db->last_query();
 
    


 }
}