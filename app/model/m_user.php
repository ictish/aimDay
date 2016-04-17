<?php

class M_user extends Model
{
    public function __construct() {
        parent::__construct();
        $this->table = 'm_user';
    }
 
    public function get_user($email, $password) {
        $query = "SELECT m_user_id,m_user_first_name,m_user_middle_name,m_user_last_name,m_user_email_id,m_user_password_hash from m_user where m_user_email_id='$email' and m_user_password_hash='$password'";
        $result = $this->db->query($query);
        $row = ($result) ? $result->fetch_assoc() : array();
        $result->free();       
        return $row;            
    }  
}
?>
