<?php
class Produk extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('m_produk');
        $this->load->model('m_ikm');
        $this->load->model('m_kategoriproduk');
    }

    function index(){
        $data['produk'] = $this->m_produk->tampil()->result();
        $this->load->view('admin/v_header');
        $this->load->view('admin/ikm_cilacap/v_produk',$data);
        $this->load->view('admin/v_footer');
    
    }

           function tambah(){
        $data['produk'] = $this->m_produk->tampil()->result();
        $data['ikm'] = $this->m_ikm->daftarikm(); 
        $data['kategoriproduk'] = $this->m_kategoriproduk->daftarkategoriproduk(); 
        // $data['ikm'] = $this->m_ikm->daftarikm()->result();
        $this->load->view('admin/v_header');
        $this->load->view('admin/ikm_cilacap/v_produk_tambah',$data);
        $this->load->view('admin/v_footer');
    
    }

    // function tambah(){
    //      $this->load->view('admin/v_header');
    //      $this->load->view('admin/ikm_cilacap/v_tambah_produk');
    //      $this->load->view('admin/v_footer');
    // }

  function tambah_produk(){

            $config['upload_path']         = 'assets_frontend/img/ikm';  // folder upload 
            $config['allowed_types']       = 'gif|jpg|png|jpeg|doc|xlsx'; // jenis file
            $config['max_size']            = 30000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
            // $this->load->library('upload' );

 
            if ( ! $this->upload->do_upload('gambar_produk')) //sesuai dengan name pada form 
            {
                   echo 'Anda gagal upload';
                   echo $this->db->last_query();
                   // echo var_dump($this->upload->display_errors());
            }
            else
            {

           
           //tampung data dari form
            $nama = $this->input->post('nama');
            $kategori_produk = $this->input->post('kategori_produk');
            $kode_ikm = $this->input->post('kode_ikm');
            $gambar_produk = $this->input->post('gambar_produk');
            $file = $this->upload->data();
            $gambar_produk = $file['file_name'];

       
            $this->m_produk->insert(array(
            'nama' => $nama,
            'kategori_produk' => $kategori_produk,
            'kode_ikm' => $kode_ikm,
            'gambar_produk' => $gambar_produk

           
        ));
        $this->session->set_flashdata('msg','Data berhasil di upload');

        redirect('admin/ikm_cilacap/produk');
        // echo $this->db->last_query();
 
        
    }


     
    function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_dataproduk->delete($id)) {
            redirect(site_url('admin/ikm_cilacap/produk'));
            // echo $this->db->last_query();
        }
    }
 
 function edit($id = null)
    {
        if (!isset($id)) redirect('admin/ikm_cilacap/produk');
       
        $produk = $this->m_produk;
        $kategori = $this->m_kategoriproduk;
        
        $validation = $this->form_validation;
         $getkategori = $kategori->daftarkategoriproduk();
        // $validation->set_rules($statistik->rules());

        if ($validation->run()) {
            $produk->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

         

       
       $data["kategoriproduk"] = $getkategori;
       $data["varproduk"] = $produk->getById($id);
        if (!$data["varproduk"]) show_404();

        $this->load->view("admin/v_header" );
        $this->load->view("admin/ikm_cilacap/v_edit_produk", $data);
        $this->load->view("admin/v_footer" );
    }

function update()
{
    
           //tampung data dari form
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $kategori = $this->input->post('kategori');
            $gambar = $this->input->post('gambar');
             

            $id = array('id'=>$id);
            $data = array('nama' => $nama,
            'kategori' => $kategori,
            'gambar' => $gambar 

           
        );
         $this->m_produk->update_produk($data,$id);

        redirect('admin/ikm_cilacap/produk');
        // echo $this->db->last_query();
 
    


 }
}}