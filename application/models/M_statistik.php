<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_statistik extends CI_Model
{
	private $_table = "statistik";
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
          $this->db->insert('statistik',$data);
        }
   
    function getbahanbaku()
    {
        return $this->db->get('statistik')->result_array();
    }
 
    function daftarbahan(){
     $this->db->select("*");
     $this->db->from('statistik');
     $this->db->order_by('id_statistik', 'DESC');
     return $this->db->get()->result_array();
  }
  function tampil(){
     $this->db->select("*");
     $this->db->from('statistik');
     $this->db->order_by('id_statistik', 'DESC');
     return $this->db->get();
  }

  function tampilById($id){
      return $this->db->get_where('statistik', array('id_statistik'=>$id));
    }

  function getstatistik()
    {
        return $this->db->get('statistik');
    }

    function getstatistik1()
    {
        return $this->db->get('statistik')->result_array();
    }

     function tampil6(){
           $this->db->select("*");
           $this->db->from('statistik');
           // $this->db->order_by('id', 'DESC');
           $this->db->order_by('id_statistik', 'DESC');
           $this->db->limit(1);
           return $this->db->get();
    }

     function tampil_gis(){
     $this->db->select("*");
     $this->db->from('statistik');
     return $this->db->get();
  }


    
	function edit($id)
	{
	    $this->db->where('id_statistik', $id);
	    $query = $this->db->get('statistik');
	    return $query->row_array();
	}

	function update_statistik ($data, $id)
        {
            $this->db->where('id_statistik', $id['id_statistik']) ;
            return $this->db->update('statistik',$data);
        }

	 function db_edit($id)
    {
        return $this->db->get_where('statistik ', array('id_statistik'=>$id));
    }
    function getById($id)
            {
                return $this->db->get_where($this->_table, ["id_statistik" => $id])->row();
            }
	 function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_statistik" => $id));
    }

     function _deleteImage($id)
    {
        $statistik  = $this->getById($id);
        if ($statistik ->image != "default.jpg") {
            $filename = explode(".", $statistik ->image)[0];
            return array_map('unlink', glob(FCPATH."images/$filename.*"));
        }
    }

    function detail() 
           {
      $this->db->where('id_statistik', $id);
      $query = $this->db->get('statistik');
      return $query->row_array();
  }
 
 }