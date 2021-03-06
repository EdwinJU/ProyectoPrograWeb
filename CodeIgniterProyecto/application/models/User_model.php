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

  function editRide($name,$rideE)
  {
    $this->db->where(array('name' => $name));
    $this->db->update('rides', $rideE);
    
    return $r;
  }
   function editUser($user_create,$userE)
  {
    $this->db->where(array('username' => $user_create));
    $this->db->update('users', $userE);
    
    return $r;
  }
    function eliminarRide($name)
  {
    $this->db->where(array('name' => $name));
    $this->db->delete('rides');
    
    return $r;
  }

  function all($user_create)
  {
   $query = $this->db->get_where('rides', array('user_create' => $user_create));

    return $query->result_object();
    
  }
    function allHome($from,$to)
  {
   $query = $this->db->get_where('rides', array('start' => $from, 'end' => $to));

    return $query->result_object();
    
  }

}