<?php
class Users_ikm_cilacap extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('m_ikm');
        $this->load->model('m_users_ikm_cilacap');
    }

    function index(){
        $data['users_ikm_cilacap'] = $this->m_users_ikm_cilacap->tampil()->result();
        $this->load->view('admin/v_header');
        $this->load->view('admin/ikm_cilacap/v_users', $data);
        $this->load->view('admin/v_footer');
    
    }

        function tambah(){
            $data['ikm'] = $this->m_ikm->daftarikm(); 
         $this->load->view('admin/v_header');
         $this->load->view('admin/ikm_cilacap/v_tambah_lapangan', $data);
         $this->load->view('admin/v_footer');
    }

  function tambah_lapangan(){

           
           //tampung data dari form
            // $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $level = $this->input->post('level');
            $email = $this->input->post('email');
            $jabatan = $this->input->post('jabatan');
            $nama_user = $this->input->post('nama_user');
            $kode_ikm = $this->input->post('kode_ikm');
            

       
            $this->m_users_ikm_cilacap->insert(array(
            // 'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'nama_user  ' => $nama_user,
            'email  ' => $email,
            'jabatan  ' => $jabatan,
            'kode_ikm  ' => $kode_ikm,
            'level' => $level

           
        ));
        $this->session->set_flashdata('msg','Data berhasil di upload');

        redirect('admin/ikm_cilacap/users_ikm_cilacap');
        //localhost/sig_ikm_cilacap/admin/ikm_cilacap/lapangan
        // echo $this->db->last_query();
 
        
    }

function tambah_lapangan_reg(){

           
           //tampung data dari form
            // $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $level = $this->input->post('level');
            $email = $this->input->post('email');
            $jabatan = $this->input->post('jabatan');
            $nama_user = $this->input->post('nama_user');
            $kode_ikm = $this->input->post('kode_ikm');
            

       
            $this->m_users_ikm_cilacap->insert(array(
            // 'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'nama_user  ' => $nama_user,
            'email  ' => $email,
            'jabatan  ' => $jabatan,
            'kode_ikm  ' => $kode_ikm,
            'level' => $level

           
        ));
        $this->session->set_flashdata('msg','Selamat Berhasil registrasi Silahkan login !');
        $this->session->flashdata('msg','Selamat Berhasil registrasi Silahkan login !');

        redirect('login_ikm_cilacap');
        //localhost/sig_ikm_cilacap/admin/ikm_cilacap/lapangan
        // echo $this->db->last_query();
 
        
    }
     
    function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_users_ikm_cilacap->delete($id)) {
            redirect('admin/ikm_cilacap/users_ikm_cilacap');
            // echo $this->db->last_query();
        }
    }
 
 function edit($id = null)
    {
        if (!isset($id)) redirect('admin/ikm_cilacap/users_ikm_cilacap');
       
        $users = $this->m_users_ikm_cilacap;
        
        $validation = $this->form_validation;
        // $validation->set_rules($profil_pengusaha->rules());

        if ($validation->run()) {
            $users->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

         
        $data["varusers"] = $users->getById($id);
        if (!$data["varusers"]) show_404();

        $this->load->view("admin/v_header" );
        $this->load->view("admin/ikm_cilacap/v_edit_users", $data);
        $this->load->view("admin/v_footer" );
    }

function update()
{

           //tampung data dari form
            $user_id = $this->input->post('user_id');
            $nama_user = $this->input->post('nama_user');
            // $kerajinan = $this->input->post('kerajinan');
            $level = $this->input->post('level');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
              $jabatan = $this->input->post('jabatan');
            $email = $this->input->post('email');

            $id = array('user_id'=>$user_id);
            $data = array('nama_user' => $nama_user,
            'level' => $level,
            'username' => $username,
            'password' => $password,
             'jabatan' => $jabatan,
            'email' => $email

           
        );
         $this->m_users_ikm_cilacap->update_users_ikm_cilacap($data,$id);

        redirect('admin/ikm_cilacap/users_ikm_cilacap');
        // echo $this->db->last_query();
 
    


 }
 
 
}