<?php
Class loginuser extends CI_Model
{
  function login($username, $password)
  {
    $this -> db -> select('username,full_name,alamat,kota,jenis_kelamin,email,no_telepon,role');
    $this -> db -> from('user');
    $this -> db -> where('username', $username);
    $this -> db -> where('password', MD5($password));
    $this -> db -> limit(1);

    $query = $this -> db -> get();

    if($query -> num_rows() == 1)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }
}
?>