<?php
class Login_model extends CI_Model{
    //cek nip dan password dosen
    function auth_user($username){
        $query=$this->db->query("SELECT a.* , b.nama as kab
FROM user a
left join m_kab b on a.kd_kab=b.id WHERE username='$username' LIMIT 1");
        return $query;
    }
 
}