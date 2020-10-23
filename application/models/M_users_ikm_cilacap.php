<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_users_ikm_cilacap extends CI_Model
{
	private $_table = "users_ikm_cilacap";
	 

	function insert($data){
            $this->db->insert('users_ikm_cilacap',$data);
        }
    
      
	function tampil(){
	   $this->db->select("*");
	   $this->db->from('users_ikm_cilacap');
       $this->db->join('ikm', 'ikm.id_ikm = users_ikm_cilacap.kode_ikm', 'left');
        $this->db->order_by('user_id', 'ASC');
       
	   return $this->db->get();
	}
     function tampil6(){
           $this->db->select("*");
           $this->db->from('users_ikm_cilacap');
           $this->db->order_by('user', 'DESC');
           $this->db->limit(6);
           return $this->db->get();
    }
	function edit($id)
	{
	    $this->db->where('user', $id);
	    $query = $this->db->get('users_ikm_cilacap');
	    return $query->row_array();
	}

	function update_users_ikm_cilacap2($data, $user_id)
    {
        $this->db->where('user_id', $data['user_id']);
        // $this->db->set($data);
        $this->db->set(array('nama_user'=>$data['nama_user']));
        $this->db->set(array('email'=>$data['email']));
        $this->db->set(array('jabatan'=>$data['jabatan']));
        $this->db->set(array('level'=>$data['level']));
        $this->db->set(array('username'=>$data['username']));
        $this->db->set(array('password'=>$data['password']));
        

        return $this->db->update('users_ikm_cilacap',$data);
    }
    function update_users_ikm_cilacap($data, $id)
        {
            $this->db->where('user_id' , $id['user_id']);
            return $this->db->update('users_ikm_cilacap',$data);
        }


	 function db_edit($id)
    {
        return $this->db->get_where('users_ikm_cilacap', array('user'=>$id));
    }
    function getById($id)
            {
                return $this->db->get_where($this->_table, ["user_id" => $id])->row();
            }
	 function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("user_id" => $id));
    }

     function _deleteImage($id)
    {
        $users = $this->getById($id);
        if ($users->image != "default.jpg") {
            $filename = explode(".", $users->image)[0];
            return array_map('unlink', glob(FCPATH."images/$filename.*"));
        }
    }

  }