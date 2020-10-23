<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model
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

            ['field' => 'id',
            'label' => ' ID Banks',
            'rules' => 'numeric']
        ];
    }

    

	function insert($data){
          $this->db->insert('produk',$data);
        }
   
 

  function tampil(){
     $this->db->select("*");
     $this->db->from('produk');
     // $this->db->join('ikm');
     $this->db->join('ikm', 'ikm.id_ikm = produk.kode_ikm', 'inner');
     $this->db->join('kategoriproduk', 'kategoriproduk.id_kategoriproduk = produk.kategori_produk', 'inner');
     $this->db->order_by('id', 'DESC');
     return $this->db->get();
  }

  function tampilById($id){
      return $this->db->get_where('produk', array('id'=>$id));
    }

  function getproduk()
    {
        return $this->db->get('produk');
    }

    function getproduk1()
    {
        return $this->db->get('produk')->result_array();
    }

     function tampil6(){
           $this->db->select("*");
           $this->db->from('produk');
           // $this->db->order_by('id', 'DESC');
           $this->db->order_by('id', 'DESC');
           $this->db->limit(1);
           return $this->db->get();
    }

     function tampil_gis(){
     $this->db->select("*");
     $this->db->from('produk');
     return $this->db->get();
  }


    
	function edit($id)
	{
	    $this->db->where('id', $id);
	    $query = $this->db->get('produk');
	    return $query->row_array();
	}

	function update_produk ($data, $id)
        {
            $this->db->where('id', $id['id']) ;
            return $this->db->update('produk',$data);
        }

	 function db_edit($id)
    {
        return $this->db->get_where('produk ', array('id'=>$id));
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
        $produk  = $this->getById($id);
        if ($produk ->image != "default.jpg") {
            $filename = explode(".", $produk ->image)[0];
            return array_map('unlink', glob(FCPATH."images/$filename.*"));
        }
    }

    function detail() 
           {
      $this->db->where('id', $id);
      $query = $this->db->get('produk');
      return $query->row_array();
  }
 
 }