<?php
class User_model extends CI_Model {

  function authenticate($user, $pass) {
		$pass = md5($pass);
    $query = $this->db->get_where('users',
      array('username' => $user, 'password' => $pass));

	  return $query->result_object();
  }

  function save($user)
  {
		$user['password'] = md5($user['password']);
    $r = $this->db->insert('users', $user);
    return $r;
  }
  function saveRide($ride)
  {
    $r = $this->db->insert('rides', $ride);
    return $r;
  }

  function all($user)
  {

   $query = $this->db->get_where('rides', array('user' => $user));

    return $query->result_object();
    
  }

}