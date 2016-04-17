<?php

class Logout extends Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        session_start();
        session_unset();
        session_destroy();
        header('Location:http://'.APP_ADDR.'/');
    }
    
}
?>
