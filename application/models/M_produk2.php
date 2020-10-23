<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk2 extends CI_Model
{
  private $_table = "produk";
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
          $this->db->insert('dokumentasi',$data);
        }
   
 

  function tampil(){
     $this->db->select("*");
     $this->db->from('dokumentasi');
     // $this->db->select("*");
     // $this->db->from('produk');
     $this->db->join('ikm', 'dokumentasi.id_ikm=ikm.id_ikm', 'left');
     // $this->db->order_by('produk_id', 'DESC');
     // return $this->db->get();
     $this->db->order_by('dokumentasi_id', 'DESC');
     return $this->db->get();
  }

  function tampilById($dokumentasi_id){
      return $this->db->get_where('donatur', array('dokumentasi_id'=>$dokumentasi_id));
    }

  function getdonatur()
    {
        return $this->db->get('donatur');
    }

    function getdonatur1()
    {
        return $this->db->get('donatur')->result_array();
    }
 function tampil3(){
           $this->db->select("*");
           $this->db->from('dokumentasi');
            $this->db->join('ikm', 'dokumentasi.id_ikm=ikm.id_ikm', 'left');
           $this->db->order_by('dokumentasi_id', 'DESC');
          $this->db->where('kategori_dokumentasi', 'pameran');
           // $this->db->limit(4);
           return $this->db->get();
    }

     function tampil4(){
           $this->db->select("*");
           $this->db->from('dokumentasi');
            $this->db->join('ikm', 'dokumentasi.id_ikm=ikm.id_ikm', 'left');
           $this->db->order_by('dokumentasi_id', 'DESC');
          $this->db->where('kategori_dokumentasi', 'produksi');
           // $this->db->limit(4);
           return $this->db->get();
    }
    function tampil5(){
           $this->db->select("*");
           $this->db->from('dokumentasi');
           $this->db->join('ikm', 'dokumentasi.id_ikm=ikm.id_ikm', 'left');
           $this->db->order_by('dokumentasi_id', 'DESC');
          $this->db->where('kategori_dokumentasi', 'seminar');
           // $this->db->limit(4);
           return $this->db->get();
    }
     function tampil6(){
           $this->db->select("*");
           $this->db->from('dokumentasi');
           $this->db->join('ikm', 'dokumentasi.id_ikm=ikm.id_ikm', 'left');
           $this->db->order_by('dokumentasi_id', 'DESC');
          $this->db->where('kategori_dokumentasi', 'lainnya');
           // $this->db->limit(4);
           return $this->db->get();
    }
 
  function edit($id)
  {
      $this->db->where('dokumentasi_id', $id);
      $query = $this->db->get('donatur');
      return $query->row_array();
  }

  function update_donatur ($data, $id)
        {
            $this->db->where('dokumentasi_id', $id['dokumentasi_id']);
            return $this->db->update('dokumentasi',$data);
        }

   function db_edit($id)
    {
        return $this->db->get_where('donatur ', array('dokumentasi_id'=>$id));
    }
    function getById($id)
            {
                return $this->db->get_where($this->_table, ["id" => $id])->row();
            }
   function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }

     function _deleteImage($id)
    {
        $donatur  = $this->getById($id);
        if ($donatur ->image != "default.jpg") {
            $filename = explode(".", $donatur ->image)[0];
            return array_map('unlink', glob(FCPATH."images/$filename.*"));
        }
    }

    function donatur_detail() 
           {
      $this->db->where('dokumentasi_id', $id);
      $query = $this->db->get('donatur');
      return $query->row_array();
  }
     
  function get_donatur_list($limit, $start){
            $this->db->order_by('dokumentasi_id', 'DESC');
            $query = $this->db->get('donatur', $limit, $start);
            return $query;
        }

  

 }