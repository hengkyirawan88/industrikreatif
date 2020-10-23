<?php
class Donatur extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('m_donatur');
    }

    function index(){
        $data['donatur'] = $this->m_donatur->tampil()->result();
        $this->load->view('admin/v_header');
        $this->load->view('admin/ibnu_abbas/v_donatur',$data);
        $this->load->view('admin/v_footer');
    
    }

    function tambah(){
         $this->load->view('admin/v_header');
         $this->load->view('admin/ibnu_abbas/v_tambah_donatur');
         $this->load->view('admin/v_footer');
    }

  function tambah_donatur(){
           

           
           //tampung data dari form
            $nama_bahanbaku = $this->input->post('nama_bahanbaku');
            // $jumlah = $this->input->post('jumlah');

       
            $this->m_donatur->insert(array(
            'nama_bahanbaku' => $nama_bahanbaku
            // 'jumlah' => $jumlah

           
        ));
        $this->session->set_flashdata('msg','Data berhasil di upload');

        redirect('admin/ikm_cilacap/statistik');
        // echo $this->db->last_query();
 
        
    }


    
    function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_donatur->delete($id)) {
            redirect(site_url('admin/ibnu_abbas/donatur'));
            // echo $this->db->last_query();
        }
    }
 
 function edit($id = null)
    {
        if (!isset($id)) redirect('admin/ibnu_abbas/donatur');
       
        $donatur = $this->m_donatur;
        
        $validation = $this->form_validation;
        // $validation->set_rules($donatur->rules());

        if ($validation->run()) {
            $donatur->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

         
        $data["vardonatur"] = $donatur->getById($id);
        if (!$data["vardonatur"]) show_404();

        $this->load->view("admin/v_header" );
        $this->load->view("admin/ibnu_abbas/v_edit_donatur", $data);
        $this->load->view("admin/v_footer" );
    }

function update()
{
    $id_donatur = $this->input->post('id_donatur');
    $judul = $this->input->post('judul');
    $isi = $this->input->post('isi');
    $new_file_name = $this->input->post('gambar');

    // $pihak_terkait = $this->input->post('pihak_terkait');
    if(isset($_POST['ubah'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
        
        $config['upload_path']         = 'assets_frontend/img/donatur';
        $config['allowed_types']       = 'gif|jpg|png|jpeg';
        $config['file_name']           = $new_file_name;
        $config['max_size']             = 3000;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('gambar');
        $file =$this->upload->data();
        $gambar= $file['file_name'];
        $id = array('id_donatur'=>$id_donatur);
        $data = array('judul'=>$judul,'isi'=>$isi,'gambar'=>$gambar);
        $this->m_donatur->update_donatur($data, $id);
        // echo var_dump($this->upload->display_errors());
        redirect('admin/ibnu_abbas/donatur');
        // echo $this->db->last_query();
    } 
    else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
        // Proses ubah data ke Database
        $id = array('id_donatur'=>$id_donatur);
        $data = array( 'judul'=>$judul,'isi'=>$isi);
        $this->m_donatur->update_donatur($data, $id);
        redirect('admin/ibnu_abbas/donatur');
        // echo $this->db->last_query();
    }

}

}