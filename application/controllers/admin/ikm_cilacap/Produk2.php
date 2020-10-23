<?php
class Produk2 extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        // $this->load->model('m_ikm');
         $this->load->model('m_produk2');
         $this->load->model('m_produk');
         $this->load->model('m_kategoriproduk');
    }

    function index(){
        $data['produk'] = $this->m_produk->tampil()->result();
        $this->load->view('admin/v_header');
        $this->load->view('admin/ikm_cilacap/v_produk',$data);
        $this->load->view('admin/v_footer');
    
    }

    function tambah(){
        $data['varikm'] = $this->m_ikm->tampil()->result();
         $this->load->view('admin/v_header');
         $this->load->view('admin/ikm_cilacap/v_tambah_produk', $data);
         $this->load->view('admin/v_footer');
    }

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
            $id_ikm = $this->input->post('id_ikm');
            $judul_produk = $this->input->post('judul_produk');
              
            $keterangan = $this->input->post('keterangan');
             $kategori_produk = $this->input->post('kategori_produk');
              $file = $this->upload->data();
              $gambar_produk = $file['file_name'];
        

       
            $this->m_produk->insert(array(
            'id_ikm' => $id_ikm,
            'judul_produk' => $judul_produk,
            'gambar_produk' => $gambar_produk,
            'keterangan' => $keterangan,
            'kategori_produk' => $kategori_produk


           
        ));
        $this->session->set_flashdata('msg','Data berhasil di upload');

        redirect('admin/ikm_cilacap/produk');
        // echo $this->db->last_query();
 
        
    }
}


    
    function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_produk2->delete($id)) {
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
    $id = $this->input->post('id');
    $nama = $this->input->post('nama');
    $kategori_produk = $this->input->post('kategori_produk');
    $new_file_name = $this->input->post('gambar_produk');

    // $pihak_terkait = $this->input->post('pihak_terkait');
    if(isset($_POST['ubah'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
        
        $config['upload_path']         = 'assets_frontend/img/ikm';  // folder upload 
        $config['allowed_types']       = 'gif|jpg|png|jpeg|doc|xlsx'; // jenis file
        $config['file_name']           = $new_file_name;
        $config['max_size']             = 30000;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('gambar_produk');
        $file =$this->upload->data();
        $gambar_produk= $file['file_name'];
        $id = array('id'=>$id);
        $data = array('nama'=>$nama, 'kategori_produk'=>$kategori_produk,'gambar_produk'=>$gambar_produk);
        $this->m_produk->update_produk($data, $id);
        echo $this->db->last_query();
        echo var_dump($this->upload->display_errors());
        redirect('admin/ikm_cilacap/produk');
        
    } 
    else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
        // Proses ubah data ke Database
        $id = array('id'=>$id);
        $data = array( 'nama'=>$nama,'kategori_produk'=>$kategori_produk);
        $this->m_produk->update_produk($data, $id);
        echo $this->db->last_query();
        redirect('admin/ikm_cilacap/produk');
        
    }

}

}