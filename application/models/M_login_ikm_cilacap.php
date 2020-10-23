<?php
class M_login_ikm_cilacap extends CI_Model{

 //    function cek_login($table,$where){   
  //  return $this->db->get_where($table,$where);
  // }  

  public function cek_login($data) {
      $query = $this->db->get_where('users_ikm_cilacap', $data);
      return $query;
    }
}
