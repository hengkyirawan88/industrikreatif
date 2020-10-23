<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategoriproduk extends CI_Model
{
	private $_table = "kategoriproduk";
  public function rules()
    {
        return [
            ['field' => 'foto',
            'label' => 'Nama Barang',
            'rules' => 'required'],
            ['field' => 'keterangan',
            'label' => 'Harga Barang',
            'rules' => 'required'],

            ['field' => 'banks_id_kategoriproduk',
            'label' => ' id_kategoriproduk Banks',
            'rules' => 'numeric']
        ];
    }

    

	function insert($data){
          $this->db->insert('kategoriproduk',$data);
        }
   
    function getbahanbaku()
    {
        return $this->db->get('kategoriproduk')->result_array();
    }
 
    function daftarkategoriproduk(){
     $this->db->select("*");
     $this->db->from('kategoriproduk');
     $this->db->order_by('id_kategoriproduk', 'DESC');
     return $this->db->get()->result_array();
  }
  function tampil(){
     $this->db->select("*");
     $this->db->from('kategoriproduk');
     $this->db->order_by('id_kategoriproduk', 'DESC');
     return $this->db->get();
  }

  function tampilByid_kategoriproduk($id_kategoriproduk){
      return $this->db->get_where('kategoriproduk', array('id_kategoriproduk'=>$id_kategoriproduk));
    }

  function getkategoriproduk()
    {
        return $this->db->get('kategoriproduk');
    }

    function getkategoriproduk1()
    {
        return $this->db->get('kategoriproduk')->result_array();
    }
 
     function tampil6(){
           $this->db->select("*");
           $this->db->from('kategoriproduk');
           // $this->db->order_by('id_kategoriproduk', 'DESC');
           $this->db->order_by('id_kategoriproduk', 'DESC');
           $this->db->limit(1);
           return $this->db->get();
    }

     function tampil_gis(){
     $this->db->select("*");
     $this->db->from('kategoriproduk');
     return $this->db->get();
  }


    
	function edit($id_kategoriproduk)
	{
	    $this->db->where('id_kategoriproduk', $id_kategoriproduk);
	    $query = $this->db->get('kategoriproduk');
	    return $query->row_array();
	}

	function update_kategoriproduk ($data, $id_kategoriproduk)
        {
            $this->db->where('id_kategoriproduk', $id_kategoriproduk['id_kategoriproduk']) ;
            return $this->db->update('kategoriproduk',$data);
        }

	 function db_edit($id_kategoriproduk)
    {
        return $this->db->get_where('kategoriproduk ', array('id_kategoriproduk'=>$id_kategoriproduk));
    }
    function getByid_kategoriproduk($id_kategoriproduk)
            {
                return $this->db->get_where($this->_table, ["id_kategoriproduk" => $id_kategoriproduk])->row();
            }
	 function delete($id_kategoriproduk)
    {
        $this->_deleteImage($id_kategoriproduk);
        return $this->db->delete($this->_table, array("id_kategoriproduk" => $id_kategoriproduk));
    }

     function _deleteImage($id_kategoriproduk)
    {
        $kategoriproduk  = $this->getByid_kategoriproduk($id_kategoriproduk);
        if ($kategoriproduk ->image != "default.jpg") {
            $filename = explode(".", $kategoriproduk ->image)[0];
            return array_map('unlink', glob(FCPATH."images/$filename.*"));
        }
    }

    function detail() 
           {
      $this->db->where('id_kategoriproduk', $id_kategoriproduk);
      $query = $this->db->get('kategoriproduk');
      return $query->row_array();
  }
 
 }