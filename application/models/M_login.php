<?php

class M_login extends CI_Model{

  //tampil buku
  function login_siswa($nisn, $nik){
    $login = $this->db->query("SELECT * from tb_siswa where nisn='$nisn' AND nik='$nik' ");
    return $login;
  }

  function admin_login($username, $password){
    $login = $this->db->query("SELECT * from tb_admin where username='$username' AND password=md5('$password') ");
    return $login;
  }


}
