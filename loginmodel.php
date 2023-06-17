<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class loginmodel extends CI_Model {

  function Auth($username,$email,$password){
    // init the db connection
    $this->load->database();
 
    $this->db->where(array('username'=> $username,'email'=> $email,'password'=>$password));
    $result = $this->db->get('user');

    if($result->num_rows() == 0) {
      return false;
    }

    return true;
}

} 