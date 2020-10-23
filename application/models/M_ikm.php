<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ikm extends CI_Model
{
  private $_table = "ikm";
  public function rules()
    {
        return [
            ['field' => 'foto',
            'label' => 'Nama Barang',
            'rules' => 'required'],
            ['field' => 'keterangan',
            'label' => 'Harga Barang',
            'rules' => 'required'],

            ['field' => 'banks_id',
            'label' => ' ID Banks',
            'rules' => 'numeric']
        ];
    }

    

  function insert($data){
          $this->db->insert('ikm',$data);
        }
   
 



    function daftarikm(){
     $this->db->select("id_ikm, judul");
     $this->db->from('ikm');
     $this->db->order_by('id_ikm', 'DESC');
     return $this->db->get()->result_array();
  }

  public function jml_ikm()
    {
       $this->db->select("count(id_ikm) as jml");
       $query=$this->db->get('ikm');
       if ($query->num_rows() > 0) {
         return $query->row()->jml;
     }
     return false;
    }

  function tampilById($id_ikm){
      return $this->db->get_where('ikm', array('id_ikm'=>$id_ikm));
    }

  function getikm()
    {
        return $this->db->get('ikm');
    }

  // function daftarikm()
  //   {
  //       return $this->db->get('ikm')->result_array();
  //   }

    function getikm1()
    {
        return $this->db->get('ikm')->result_array();
    }
 function tampil3(){
           $this->db->select("*");
           $this->db->from('ikm');
           // $this->db->order_by('id_agrowisata', 'DESC');
           $this->db->order_by('id_ikm', 'DESC');
           $this->db->limit(4);
           return $this->db->get();
    }
     function tampil6(){
           $this->db->select("*");
           $this->db->from('ikm');
           // $this->db->order_by('id_ikm', 'DESC');
           $this->db->order_by('id_ikm', 'DESC');
           $this->db->limit(4);
           return $this->db->get();
    }
  function edit($id)
  {
      $this->db->where('id_ikm', $id);
      $query = $this->db->get('ikm');
      return $query->row_array();
  }

  function update_ikm ($data, $id)
        {
            $this->db->where('id_ikm', $id['id_ikm']);
            return $this->db->update('ikm',$data);
        }

   function db_edit($id)
    {
        return $this->db->get_where('ikm ', array('id_ikm'=>$id));
    }
     function tampil(){
     $this->db->select("*");
     $this->db->from('ikm');
     $this->db->join('statistik', 'statistik.id_statistik=ikm.bahan_baku', 'inner');
     $this->db->join('kategori', 'kategori.id=ikm.kategori', 'inner');
     $this->db->order_by('id_ikm', 'DESC');
     return $this->db->get();
  }

       function tampil_ik(){
     $this->db->where('id_ikm', $this->session->userdata('kode_ikm'));
     $this->db->select("*");
     $this->db->from('ikm');
     $this->db->join('statistik', 'statistik.id_statistik=ikm.bahan_baku', 'inner');
     $this->db->join('kategori', 'kategori.id=ikm.kategori', 'inner');
     // $this->db->order_by('id_ikm', 'DESC');
     return $this->db->get();
  }

     function tampilprofil(){
     $this->db->where('user_id', $this->session->userdata('user_id'));
     $this->db->select("*");
     $this->db->from('profil_petugas');
     
     $this->db->join('users_ikm_cilacap', 'users_ikm_cilacap.user_id=profil_petugas.idpetugas', 'inner');
     return $this->db->get();
  }
   function getById($id)
            {
 
 
     $this->db->join('statistik', 'statistik.id_statistik=ikm.bahan_baku', 'inner');
     $this->db->join('kategori', 'kategori.id=ikm.kategori', 'inner');
     return $this->db->get_where($this->_table, ["id_ikm" => $id])->row();
            }
   function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_ikm" => $id));
    }

     function _deleteImage($id)
    {
        $ikm  = $this->getById($id);
        if ($ikm ->image != "default.jpg") {
            $filename = explode(".", $ikm ->image)[0];
            return array_map('unlink', glob(FCPATH."images/$filename.*"));
        }
    }

    function ikm_detail() 
           {
      $this->db->where('id_ikm', $id);
      $query = $this->db->get('ikm');
      return $query->row_array();
  }
     
  function get_ikm_list($limit, $start){
            $this->db->order_by('id_ikm', 'DESC');
            $query = $this->db->get('ikm', $limit, $start);
            return $query;
        }
 }