<?php
class Login_ikm_cilacap extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_login_ikm_cilacap');
         $this->load->model('m_ikm');
        
        
        $this->load->model('m_users_ikm_cilacap'); 
    }

     function index() {
        $this->load->view('admin/v_login');
    }

      function registrasi() {
        $data['ikm'] = $this->m_ikm->tampil()->result();
        $this->load->view('admin/v_registrasi', $data);
    }

     function aksi_login() {
        
        
        $data = array('username' => $this->input->post('username', TRUE),
                        'password' => ($this->input->post('password', TRUE))
            );
        $this->load->model('m_login_ikm_cilacap'); // load model_user
        $hasil = $this->m_login_ikm_cilacap->cek_login($data);
        if ($hasil->num_rows() == 1) {
            foreach ($hasil->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Loggin';
                // $sess_data['uid'] = $sess->uid;
                $sess_data['nama_user'] = $sess->nama_user;
                $sess_data['username'] = $sess->username;
                
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('level')== 1) {
                 $row = $this->db->query('SELECT * FROM users_ikm_cilacap 
                    where username = "'.$sess_data['username'].'" '  );
                 
                     $data = $row->row();
                     $nama_user = $data->nama_user;
                     $username = $data->username;
                  
                     $user_id = $data->user_id;
                    
                     $password = $data->password;
                    
                     $jabatan = $data->jabatan;
                      $level = $data->level;
                      $kode_ikm = $data->kode_ikm;


                     $tahun = date('Y');

                    $this->session->set_userdata('nama_user', $nama_user);
                    $this->session->set_userdata('username', $username);
     
                    $this->session->set_userdata('user_id', $user_id);
               
                    $this->session->set_userdata('password', $password);
                    
                    $this->session->set_userdata('jabatan', $jabatan);
                    $this->session->set_userdata('level', $level);
                    $this->session->set_userdata('kode_ikm', $kode_ikm);


                    $this->session->set_userdata($data_session);
                redirect('login_ikm_cilacap/halaman_admin');
                    // echo $this->db->last_query();
            }
            elseif($this->session->userdata('level')== 2) {
                $row = $this->db->query('SELECT * FROM users_ikm_cilacap 
                    where username = "'.$sess_data['username'].'" '  );
                     $data = $row->row();
                     $nama_user = $data->nama_user;
                     $username = $data->username;
               
                     $user_id = $data->user_id;
                    
                     $password = $data->password;
                     
                     $jabatan = $data->jabatan;
                     $level = $data->level;
                     $kode_ikm = $data->kode_ikm;


                     $tahun = date('Y');

                    $this->session->set_userdata('nama_user', $nama_user);
                    $this->session->set_userdata('username', $username);
              
                    $this->session->set_userdata('user_id', $user_id);
                
                    $this->session->set_userdata('password', $password);
                    $this->session->set_userdata('jabatan', $jabatan);
                    $this->session->set_userdata('level', $level);
                    $this->session->set_userdata('kode_ikm', $kode_ikm);
                    
                    
                    $this->session->set_userdata($data_session);
                redirect('login_ikm_cilacap/halaman_admin');
            }      
            else{
                $row = $this->db->query('SELECT * FROM users_ikm_cilacap 
                    where username = "'.$sess_data['username'].'" '  );
                     $data = $row->row();
                     $nama_user = $data->nama_user;
                     $username = $data->username;
            
                     $user_id = $data->user_id;
                     
                     $nik = $data->nik;
                     $password = $data->password;
                     
                     $jabatan = $data->jabatan;
                     $level = $data->level;
                     $kode_ikm = $data->kode_ikm;

                     $tahun = date('Y');

                    $this->session->set_userdata('nama_user', $nama_user);
                    $this->session->set_userdata('username', $username);
                     $this->form_validation->set_message('is_unique', '{field} sudah digunakan.');
               
                    $this->session->set_userdata('user_id', $user_id);
         
                    $this->session->set_userdata('password', $password);
                    
                    $this->session->set_userdata('jabatan', $jabatan);
                    $this->session->set_userdata('level', $level);
                    $this->session->set_userdata('kode_ikm', $kode_ikm);
                    
                    $this->session->set_userdata($data_session);
                redirect('login_ikm_cilacap/halaman_admin');
            }      
        }
        else {
            echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
        }
    }


    function halaman_admin(){
     
    
        // $data['users']= $this->m_galeri->tampil()->result();
          // $data['rowN']= $this->m_users->countRow();
        // $data['rowKS']= $this->m_kios_saprodi->countRow();
        // $data['rowPU']= $this->m_pelaku_usaha->countRow();
        // $data['rowAW']= $this->m_agrowisata->countRow();
        // $data['rowP']= $this->m_produk->countRow();
        // $data['rowKO']= $this->m_rekomendasi_bbm->countRow();
        // $data['rowPKO']= $this->m_rekomendasi_bbm->countRows();
        // $data['rowAG']= $this->m_agrowisata->countRows();
        
        $this->load->view('admin/v_header');
        $this->load->view('admin/v_home_admin');
        $this->load->view('admin/v_footer');
        // echo $this->db->last_query();
    }

    function halaman_adminprofil(){
     
    
        // $data['users']= $this->m_galeri->tampil()->result();
          // $data['rowN']= $this->m_users->countRow();
        // $data['rowKS']= $this->m_kios_saprodi->countRow();
        // $data['rowPU']= $this->m_pelaku_usaha->countRow();
        // $data['rowAW']= $this->m_agrowisata->countRow();
        // $data['rowP']= $this->m_produk->countRow();
        // $data['rowKO']= $this->m_rekomendasi_bbm->countRow();
        // $data['rowPKO']= $this->m_rekomendasi_bbm->countRows();
        // $data['rowAG']= $this->m_agrowisata->countRows();
        
        $this->load->view('admin/v_header');
        $this->load->view('admin/v_home_admin_profil');
        $this->load->view('admin/v_footer');
        // echo $this->db->last_query();
    }
      

     function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login_ikm_cilacap'));
    }
}

      


      