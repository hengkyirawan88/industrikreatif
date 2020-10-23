<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_donatur extends CI_Model
{
  private $_table = "donatur";
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
   
 

  function tampil(){
     $this->db->select("*");
     $this->db->from('donatur');
     $this->db->order_by('id_donatur', 'DESC');
     return $this->db->get();
  }

  function tampilById($id_donatur){
      return $this->db->get_where('donatur', array('id_donatur'=>$id_donatur));
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
           $this->db->from('donatur');
           // $this->db->order_by('id_agrowisata', 'DESC');
           $this->db->order_by('id_donatur', 'DESC');
           // $this->db->limit(4);
           return $this->db->get();
    }
     function tampil6(){
           $this->db->select("*");
           $this->db->from('donatur');
           // $this->db->order_by('id_donatur', 'DESC');
           $this->db->order_by('id_donatur', 'DESC');
           $this->db->limit(4);
           return $this->db->get();
    }
  function edit($id)
  {
      $this->db->where('id_donatur', $id);
      $query = $this->db->get('donatur');
      return $query->row_array();
  }

  function update_donatur ($data, $id)
        {
            $this->db->where('id_donatur', $id['id_donatur']);
            return $this->db->update('donatur',$data);
        }

   function db_edit($id)
    {
        return $this->db->get_where('donatur ', array('id_donatur'=>$id));
    }
    function getById($id)
            {
                return $this->db->get_where($this->_table, ["id_donatur" => $id])->row();
            }
   function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_donatur" => $id));
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
      $this->db->where('id_donatur', $id);
      $query = $this->db->get('donatur');
      return $query->row_array();
  }
     
  function get_donatur_list($limit, $start){
            $this->db->order_by('id_donatur', 'DESC');
            $query = $this->db->get('donatur', $limit, $start);
            return $query;
        }

  

 }