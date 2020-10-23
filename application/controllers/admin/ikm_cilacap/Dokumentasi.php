<?php
class Dokumentasi extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('m_ikm');
         $this->load->model('m_dokumentasi');
    }

    function index(){
        $data['donatur'] = $this->m_dokumentasi->tampil()->result();
        $this->load->view('admin/v_header');
        $this->load->view('admin/ikm_cilacap/v_donatur',$data);
        $this->load->view('admin/v_footer');
    
    }

    function tambah(){
        $data['varikm'] = $this->m_ikm->tampil()->result();
         $this->load->view('admin/v_header');
         $this->load->view('admin/ikm_cilacap/v_tambah_dokumentasi', $data);
         $this->load->view('admin/v_footer');
    }

  function tambah_dokumentasi(){
           

            $config['upload_path']         = 'assets_frontend/img/dokumentasi';  // folder upload 
            $config['allowed_types']       = 'gif|jpg|png|jpeg|doc|xlsx'; // jenis file
            $config['max_size']            = 30000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
            // $this->load->library('upload' );

 
            if ( ! $this->upload->do_upload('gambar_dokumentasi')) //sesuai dengan name pada form 
            {
                   echo 'Anda gagal upload';
                   echo $this->db->last_query();
                   // echo var_dump($this->upload->display_errors());
            }
            else
            {
           //tampung data dari form
            $id_ikm = $this->input->post('id_ikm');
            $judul_dokumentasi = $this->input->post('judul_dokumentasi');
              
            $keterangan = $this->input->post('keterangan');
             $kategori_dokumentasi = $this->input->post('kategori_dokumentasi');
              $file = $this->upload->data();
              $gambar_dokumentasi = $file['file_name'];
        

       
            $this->m_dokumentasi->insert(array(
            'id_ikm' => $id_ikm,
            'judul_dokumentasi' => $judul_dokumentasi,
            'gambar_dokumentasi' => $gambar_dokumentasi,
            'keterangan' => $keterangan,
            'kategori_dokumentasi' => $kategori_dokumentasi


           
        ));
        $this->session->set_flashdata('msg','Data berhasil di upload');

        redirect('admin/ikm_cilacap/dokumentasi');
        // echo $this->db->last_query();
 
        
    }
}


    
    function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_dokumentasi->delete($id)) {
            redirect(site_url('admin/ikm_cilacap/dokumentasi'));
            // echo $this->db->last_query();
        }
    }
 
 function edit($id = null)
    {
        if (!isset($id)) redirect('admin/ikm_cilacap/dokumentasi');
       
        $donatur = $this->m_dokumentasi;

        $ikm = $this->m_ikm;
        $getikm = $ikm->getikm1();
        
        $validation = $this->form_validation;
        // $validation->set_rules($donatur->rules());

        if ($validation->run()) {
            $donatur->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

         
        $data["listikm"] = $getikm; 
        $data["vardonatur"] = $donatur->getById($id);
        if (!$data["vardonatur"]) show_404();

        $this->load->view("admin/v_header" );
        $this->load->view("admin/ikm_cilacap/v_edit_dokumentasi", $data);
        $this->load->view("admin/v_footer" );
    }

function update()
{
    $dokumentasi_id = $this->input->post('dokumentasi_id');
    $judul_dokumentasi = $this->input->post('judul_dokumentasi');
    $keterangan = $this->input->post('keterangan');
     $kategori_dokumentasi = $this->input->post('kategori_dokumentasi');
    $new_file_name = $this->input->post('gambar');

    // $pihak_terkait = $this->input->post('pihak_terkait');
    if(isset($_POST['ubah'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
        
        $config['upload_path']         = 'assets_frontend/img/dokumentasi';
        $config['allowed_types']       = 'gif|jpg|png|jpeg';
        $config['file_name']           = $new_file_name;
        $config['max_size']             = 3000;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('gambar_dokumentasi');
        $file =$this->upload->data();
        $gambar_dokumentasi= $file['file_name'];
        $id = array('dokumentasi_id'=>$dokumentasi_id);
        $data = array('judul_dokumentasi'=>$judul_dokumentasi,'keterangan'=>$keterangan,'kategori_dokumentasi'=>$kategori_dokumentasi,'gambar_dokumentasi'=>$gambar_dokumentasi);
        $this->m_dokumentasi->update_donatur($data, $id);
        // echo var_dump($this->upload->display_errors());
        redirect('admin/ikm_cilacap/dokumentasi');
        // echo $this->db->last_query();
    } 
    else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
        // Proses ubah data ke Database
        $id = array('dokumentasi_id'=>$dokumentasi_id);
        $data = array( 'judul_dokumentasi'=>$judul_dokumentasi,'keterangan'=>$keterangan,'kategori_dokumentasi'=>$kategori_dokumentasi);
        $this->m_dokumentasi->update_donatur($data, $id);
        redirect('admin/ikm_cilacap/dokumentasi');
        // echo $this->db->last_query();
    }

}

}