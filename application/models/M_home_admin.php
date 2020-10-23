<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home_admin extends CI_Model
{
  private $_table = "pelaku_usaha";
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
          $this->db->insert('pelaku_usaha',$data);
        }
   
 

  function tampil(){
     $this->db->select("*");
     $this->db->from('pelaku_usaha');
     $this->db->order_by('pelaku_usaha_id', 'DESC');
     return $this->db->get();
  }

  function tampilById($pelaku_usaha_id){
      return $this->db->get_where('pelaku_usaha', array('pelaku_usaha_id'=>$pelaku_usaha_id));
    }

  function getpelaku_usaha()
    {
        return $this->db->get('pelaku_usaha');
    }

    function getpelaku_usaha1()
    {
        return $this->db->get('pelaku_usaha')->result_array();
    }

     function tampil6(){
           $this->db->select("*");
           $this->db->from('pelaku_usaha');
           // $this->db->order_by('pelaku_usaha_id', 'DESC');
           $this->db->order_by('pelaku_usaha_id', 'ASC');
           $this->db->limit(4);
           return $this->db->get();
    }
  function edit($id)
  {
      $this->db->where('pelaku_usaha_id', $id);
      $query = $this->db->get('pelaku_usaha');
      return $query->row_array();
  }

  function update_pelaku_usaha ($data, $id)
        {
            $this->db->where('pelaku_usaha_id', $id['pelaku_usaha_id']);
            return $this->db->update('pelaku_usaha',$data);
        }

   function db_edit($id)
    {
        return $this->db->get_where('pelaku_usaha ', array('pelaku_usaha_id'=>$id));
    }
    function getById($id)
            {
                return $this->db->get_where($this->_table, ["pelaku_usaha_id" => $id])->row();
            }
   function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("pelaku_usaha_id" => $id));
    }

     function _deleteImage($id)
    {
        $pelaku_usaha  = $this->getById($id);
        if ($pelaku_usaha ->image != "default.jpg") {
            $filename = explode(".", $pelaku_usaha ->image)[0];
            return array_map('unlink', glob(FCPATH."images/$filename.*"));
        }
    }

    function detail() 
           {
      $this->db->where('pelaku_usaha_id', $id);
      $query = $this->db->get('pelaku_usaha');
      return $query->row_array();
  }
     

 }