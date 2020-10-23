<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model
{
	private $_table = "kategori";
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
          $this->db->insert('kategori',$data);
        }
   
    function getbahanbaku()
    {
        return $this->db->get('kategori')->result_array();
    }
 
    function daftarbahan(){
     $this->db->select("*");
     $this->db->from('kategori');
     $this->db->order_by('id', 'DESC');
     return $this->db->get()->result_array();
  }
  function tampil(){
     $this->db->select("*");
     $this->db->from('kategori');
     $this->db->order_by('id', 'DESC');
     return $this->db->get();
  }

  function tampilById($id){
      return $this->db->get_where('kategori', array('id'=>$id));
    }

  function getkategori()
    {
        return $this->db->get('kategori');
    }

    function getkategori1()
    {
        return $this->db->get('kategori')->result_array();
    }

        function daftarkategori(){
     $this->db->select("*");
     $this->db->from('kategori');
     $this->db->order_by('id', 'DESC');
     return $this->db->get()->result_array();
  }

     function tampil6(){
           $this->db->select("*");
           $this->db->from('kategori');
           // $this->db->order_by('id', 'DESC');
           $this->db->order_by('id', 'DESC');
           $this->db->limit(1);
           return $this->db->get();
    }

     function tampil_gis(){
     $this->db->select("*");
     $this->db->from('kategori');
     return $this->db->get();
  }


    
	function edit($id)
	{
	    $this->db->where('id', $id);
	    $query = $this->db->get('kategori');
	    return $query->row_array();
	}

	function update_kategori ($data, $id)
        {
            $this->db->where('id', $id['id']) ;
            return $this->db->update('kategori',$data);
        }

	 function db_edit($id)
    {
        return $this->db->get_where('kategori ', array('id'=>$id));
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
        $kategori  = $this->getById($id);
        if ($kategori ->image != "default.jpg") {
            $filename = explode(".", $kategori ->image)[0];
            return array_map('unlink', glob(FCPATH."images/$filename.*"));
        }
    }

    function detail() 
           {
      $this->db->where('id', $id);
      $query = $this->db->get('kategori');
      return $query->row_array();
  }
 
 }