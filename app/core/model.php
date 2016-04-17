<?php

class Model
{
    function __construct() {
       $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
       if($this->db->connect_errno) {
        echo("Connection to MySQL Server failed:".$this->db->connect_errno);
       } 
    }
}
?>
