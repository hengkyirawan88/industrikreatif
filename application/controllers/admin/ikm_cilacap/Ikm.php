<?php
class Ikm extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('m_ikm');
        $this->load->model('m_statistik');
        $this->load->model('m_kategori');
         
    }

    function index(){
        $data['ikm'] = $this->m_ikm->tampil()->result();
        // $data['akun'] = $this->m_akun->tampil()->result();
        $this->load->view('admin/v_header');
        $this->load->view('admin/ikm_cilacap/v_ikm',$data);
        $this->load->view('admin/v_footer');
    
    }

        function profil(){
        $data['profil'] = $this->m_ikm->tampilprofil()->result();
     

        
        $this->load->view('admin/v_header');
        $this->load->view('admin/v_home_admin_profil', $data);
        $this->load->view('admin/v_footer');
        // echo $this->db->last_query();
    }

        function nodelete(){
        $data['ikm'] = $this->m_ikm->tampil()->result();
        // $data['akun'] = $this->m_akun->tampil()->result();
        $this->load->view('admin/v_header');
        $this->load->view('admin/ikm_cilacap/v_ikm_nodelete',$data);
        $this->load->view('admin/v_footer');
    
    }

        function nodelete_ik(){
        $data['ikm'] = $this->m_ikm->tampil_ik()->result();
        // $data['akun'] = $this->m_akun->tampil()->result();
        $this->load->view('admin/v_header', $data);
        $this->load->view('admin/ikm_cilacap/v_ikm_nodelete',$data);
        $this->load->view('admin/v_footer');
    
    }
        function lapangan(){
        $data['ikm'] = $this->m_ikm->tampil()->result();
        $data['kategori'] = $this->m_ikm->tampil()->result();
        $this->load->view('admin/v_header');
        $this->load->view('admin/ikm_cilacap/v_ikm_lapangan',$data);
        $this->load->view('admin/v_footer');
    
    }

        function verifikasi(){
        $data['ikm'] = $this->m_ikm->tampil()->result();
        $data['kategori'] = $this->m_ikm->tampil()->result();
        $this->load->view('admin/v_header');
        $this->load->view('admin/ikm_cilacap/v_ikm_verifikasi',$data);
        $this->load->view('admin/v_footer');
    
    }



    function tambah(){
         $data['bahan_baku'] = $this->m_statistik->daftarbahan();
         $data['kategori'] = $this->m_kategori->daftarkategori();
         // $data['ikm'] = $this->m_ikm->daftarikm();
         $this->load->view('admin/v_header');
         $this->load->view('admin/ikm_cilacap/v_tambah_ikm', $data);
         $this->load->view('admin/v_footer');
    }

  function tambah_ikm(){
            $config['upload_path']         = 'assets_frontend/img/ikm';  // folder upload 
            $config['allowed_types']       = 'gif|jpg|png|jpeg|doc|xlsx'; // jenis file
            $config['max_size']            = 30000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
            // $this->load->library('upload' );

 
            if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
            {
                   echo 'Anda gagal upload';
                   echo $this->db->last_query();
                   // echo var_dump($this->upload->display_errors());
            }
            else
            {

           
           //tampung data dari form
            $judul = $this->input->post('judul');
            $kategori = $this->input->post('kategori');
            $kontak = $this->input->post('kontak');
            $produk = $this->input->post('produk');
            $ijin_usaha = $this->input->post('ijin_usaha');
            $jumlah_tk = $this->input->post('jumlah_tk');
            $bahan_baku = $this->input->post('bahan_baku');
            $kebutuhan_bahan_baku = $this->input->post('kebutuhan_bahan_baku');
            $kapasitas_produksi = $this->input->post('kapasitas_produksi');
            $nilai_investasi = $this->input->post('nilai_investasi');
            $limbah = $this->input->post('limbah');
            $penjualan = $this->input->post('penjualan');
            $alamat = $this->input->post('alamat');
            $latitude = $this->input->post('latitude');
            $longitude = $this->input->post('longitude');
            $file = $this->upload->data();
            $gambar = $file['file_name'];

       
            $this->m_ikm->insert(array(
            'judul' => $judul,
            'kategori' => $kategori,
            'kontak' => $kontak,
            'produk' => $produk,
            'ijin_usaha' => $ijin_usaha,
            'jumlah_tk' => $jumlah_tk,
            'bahan_baku' => $bahan_baku,
            'kebutuhan_bahan_baku' => $kebutuhan_bahan_baku,
            'kapasitas_produksi' => $kapasitas_produksi,
            'nilai_investasi' => $nilai_investasi,
            'penjualan' => $penjualan,
            'limbah' => $limbah,
            'alamat' => $alamat,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'gambar' => $gambar

           
        ));
        $this->session->set_flashdata('msg','Data berhasil di upload');

        redirect('admin/ikm_cilacap/ikm');
        // echo $this->db->last_query();
 
        
    }


     }
    function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_ikm->delete($id)) {
            redirect(site_url('admin/ikm_cilacap/ikm'));
            // echo $this->db->last_query();
        }
    }
 
 function edit_tanikuproduk($id = null)
    {
        if (!isset($id)) redirect('admin/tani/produk');
       
        $produk = $this->m_produk;
        $pelaku_usaha = $this->m_pelaku_usaha;

        $getpelaku_usaha = $pelaku_usaha->getpelaku_usaha1();
        $getProduk = $produk->getProduk1();
        
        $validation = $this->form_validation;
        // $validation->set_rules($produk->rules());

        if ($validation->run()) {
            $produk->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["listpelaku_usaha"] = $getpelaku_usaha; 
        $data["varproduk"] = $produk->getById($id);
        if (!$data["varproduk"]) show_404();

        $this->load->view("admin/tani/v_header" );
        $this->load->view("admin/tani/v_edit_produk", $data);
        $this->load->view("admin/tani/v_footer" );
    }

    function edit($id = null)
    {
        if (!isset($id)) redirect('admin/ikm_cilacap/ikm');
      

        $bahan_baku = $this->m_statistik;
        $kategori = $this->m_kategori;

        $getbahan_baku = $bahan_baku->getbahanbaku();
        $getkategori = $kategori->getkategori1();
        $ikm = $this->m_ikm;
        
        $validation = $this->form_validation;
        // $validation->set_rules($ikm->rules());

        if ($validation->run()) {
            $ikm->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

         
        $data["bahan_baku"] = $getbahan_baku;
        $data["kategori"] = $getkategori;
        $data["varikm"] = $ikm->getById($id);
        if (!$data["varikm"]) show_404();

        $this->load->view("admin/v_header" );
        $this->load->view("admin/ikm_cilacap/v_edit_ikm", $data);
        $this->load->view("admin/v_footer" );
    }

     function edit_ik($id = null)
    {
        if (!isset($id)) redirect('admin/ikm_cilacap/ikm');
      

        $bahan_baku = $this->m_statistik;
        $kategori = $this->m_kategori;

        $getbahan_baku = $bahan_baku->getbahanbaku();
        $getkategori = $kategori->getkategori1();
        $ikm = $this->m_ikm;
        
        $validation = $this->form_validation;
        // $validation->set_rules($ikm->rules());

        if ($validation->run()) {
            $ikm->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

         
        $data["bahan_baku"] = $getbahan_baku;
        $data["kategori"] = $getkategori;
        $data["varikm"] = $ikm->getById($id);
        if (!$data["varikm"]) show_404();

        $this->load->view("admin/v_header" );
        $this->load->view("admin/ikm_cilacap/v_edit_ikm_ik", $data);
        $this->load->view("admin/v_footer" );
    }

function edit_verifikasi($id = null)
    {
        if (!isset($id)) redirect('admin/ikm_cilacap/ikm/verifikasi');
       

        $ikm = $this->m_ikm;
        
        $validation = $this->form_validation;
        // $validation->set_rules($ikm->rules());

        if ($validation->run()) {
            $ikm->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

         

        $data["varikm"] = $ikm->getById($id);
        if (!$data["varikm"]) show_404();

        $this->load->view("admin/v_header" );
        $this->load->view("admin/ikm_cilacap/v_edit_verifikasi", $data);
        $this->load->view("admin/v_footer" );
    }


function detail($id = null)
    {
        if (!isset($id)) redirect('admin/ikm_cilacap/ikm');
       
        $bahan_baku = $this->m_statistik;
        $kategori = $this->m_kategori;

        $getbahan_baku = $bahan_baku->getbahanbaku();
        $getkategori = $kategori->getkategori1();
        $ikm = $this->m_ikm;
        
        $validation = $this->form_validation;
        // $validation->set_rules($ikm->rules());

        if ($validation->run()) {
            $ikm->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

         
        $data["bahan_baku"] = $getbahan_baku;
        $data["kategori"] = $getkategori;
        $data["varikm"] = $ikm->getById($id);
        if (!$data["varikm"]) show_404();

        $this->load->view("admin/v_header" );
        $this->load->view("admin/ikm_cilacap/v_detail_ikm", $data);
        $this->load->view("admin/v_footer" );
    }


function update_verifikasi()
{

           //tampung data dari form
            $id_ikm = $this->input->post('id_ikm');
            $verifikasi = $this->input->post('verifikasi');


            $id_ikm = array('id_ikm'=>$id_ikm);
            $data = array('verifikasi' => $verifikasi


           
        );
        $this->m_ikm->update_ikm($data, $id_ikm);

        redirect('admin/ikm_cilacap/ikm/verifikasi');
        // echo $this->db->last_query();
 
    


 }
function update()
{
    $id_ikm = $this->input->post('id_ikm');
    $judul = $this->input->post('judul');
    $alamat = $this->input->post('alamat');
    $kategori = $this->input->post('kategori');
    $kontak = $this->input->post('kontak');
    $produk = $this->input->post('produk');
    $latitude = $this->input->post('latitude');
    $longitude = $this->input->post('longitude');
    $new_file_name = $this->input->post('gambar');
            $ijin_usaha = $this->input->post('ijin_usaha');
            $jumlah_tk = $this->input->post('jumlah_tk');
            $bahan_baku = $this->input->post('bahan_baku');
            $kebutuhan_bahan_baku = $this->input->post('kebutuhan_bahan_baku');
            $kapasitas_produksi = $this->input->post('kapasitas_produksi');
            $nilai_investasi = $this->input->post('nilai_investasi');
            $limbah = $this->input->post('limbah');
            $penjualan = $this->input->post('penjualan');

    // $pihak_terkait = $this->input->post('pihak_terkait');
    if(isset($_POST['ubah'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
        
        $config['upload_path']         = 'assets_frontend/img/ikm';
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
        $id = array('id_ikm'=>$id_ikm);
        $data = array('judul'=>$judul,'ijin_usaha' => $ijin_usaha,
            'jumlah_tk' => $jumlah_tk,
            'bahan_baku' => $bahan_baku,
            'kebutuhan_bahan_baku' => $kebutuhan_bahan_baku,
            'kapasitas_produksi' => $kapasitas_produksi,
            'nilai_investasi' => $nilai_investasi,
            'penjualan' => $penjualan,
            'limbah' => $limbah,'alamat'=>$alamat,'produk'=>$produk,'tanggal'=>$tanggal,'latitude'=>$latitude,'longitude'=>$longitude,'kategori'=>$kategori,'kontak'=>$kontak,'gambar'=>$gambar);
        $this->m_ikm->update_ikm($data, $id);
        // echo var_dump($this->upload->display_errors());
        redirect('admin/ikm_cilacap/ikm');
        // echo $this->db->last_query();
    } 
    else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
        // Proses ubah data ke Database
        $id = array('id_ikm'=>$id_ikm);
        $data = array( 'judul'=>$judul,'ijin_usaha' => $ijin_usaha,
            'jumlah_tk' => $jumlah_tk,
            'bahan_baku' => $bahan_baku,
            'kebutuhan_bahan_baku' => $kebutuhan_bahan_baku,
            'kapasitas_produksi' => $kapasitas_produksi,
            'nilai_investasi' => $nilai_investasi,
            'penjualan' => $penjualan,
            'limbah' => $limbah,'alamat'=>$alamat,'produk'=>$produk,'tanggal'=>$tanggal,'latitude'=>$latitude,'longitude'=>$longitude,'kategori'=>$kategori,'kontak'=>$kontak);
        $this->m_ikm->update_ikm($data, $id);
        redirect('login_ikm_cilacap/halaman_admin');
        // echo $this->db->last_query();
    }

}

function update_ik()
{
    $id_ikm = $this->input->post('id_ikm');
    $judul = $this->input->post('judul');
    $alamat = $this->input->post('alamat');
    $kategori = $this->input->post('kategori');
    $kontak = $this->input->post('kontak');
    $produk = $this->input->post('produk');
    $latitude = $this->input->post('latitude');
    $longitude = $this->input->post('longitude');
    $new_file_name = $this->input->post('gambar');
            $ijin_usaha = $this->input->post('ijin_usaha');
            $jumlah_tk = $this->input->post('jumlah_tk');
            $bahan_baku = $this->input->post('bahan_baku');
            $kebutuhan_bahan_baku = $this->input->post('kebutuhan_bahan_baku');
            $kapasitas_produksi = $this->input->post('kapasitas_produksi');
            $nilai_investasi = $this->input->post('nilai_investasi');
            $limbah = $this->input->post('limbah');
            $penjualan = $this->input->post('penjualan');

    // $pihak_terkait = $this->input->post('pihak_terkait');
    if(isset($_POST['ubah'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
        
        $config['upload_path']         = 'assets_frontend/img/ikm';
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
        $id = array('id_ikm'=>$id_ikm);
        $data = array('judul'=>$judul,'ijin_usaha' => $ijin_usaha,
            'jumlah_tk' => $jumlah_tk,
            'bahan_baku' => $bahan_baku,
            'kebutuhan_bahan_baku' => $kebutuhan_bahan_baku,
            'kapasitas_produksi' => $kapasitas_produksi,
            'nilai_investasi' => $nilai_investasi,
            'penjualan' => $penjualan,
            'limbah' => $limbah,'alamat'=>$alamat,'produk'=>$produk,'tanggal'=>$tanggal,'latitude'=>$latitude,'longitude'=>$longitude,'kategori'=>$kategori,'kontak'=>$kontak,'gambar'=>$gambar);
        $this->m_ikm->update_ikm($data, $id);
        // echo var_dump($this->upload->display_errors());
        redirect('admin/ikm_cilacap/ikm');
        // echo $this->db->last_query();
    } 
    else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
        // Proses ubah data ke Database
        $id = array('id_ikm'=>$id_ikm);
        $data = array( 'judul'=>$judul,'ijin_usaha' => $ijin_usaha,
            'jumlah_tk' => $jumlah_tk,
            'bahan_baku' => $bahan_baku,
            'kebutuhan_bahan_baku' => $kebutuhan_bahan_baku,
            'kapasitas_produksi' => $kapasitas_produksi,
            'nilai_investasi' => $nilai_investasi,
            'penjualan' => $penjualan,
            'limbah' => $limbah,'alamat'=>$alamat,'produk'=>$produk,'tanggal'=>$tanggal,'latitude'=>$latitude,'longitude'=>$longitude,'kategori'=>$kategori,'kontak'=>$kontak);
        $this->m_ikm->update_ikm($data, $id);
        redirect('admin/ikm_cilacap/ikm/nodelete_ik');
        // echo $this->db->last_query();
    }

}
}