<?php

class Home extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->util->is_logged_in();
    }

    public function index() {
        $this->view->data['name'] = $this->get_name();
        $this->view->render('home/home');   
    }

    private function get_name()
    {
        session_start();
        $first_name = (isset($_SESSION['user_first_name'])) ? $_SESSION['user_first_name'] : '';
        $middle_name = (isset($_SESSION['user_middle_name'])) ? $_SESSION['user_middle_name'] : '';
        $last_name = (isset($_SESSION['user_last_name'])) ? $_SESSION['user_last_name'] : '';
        $user_name = $first_name." ".$middle_name." ".$last_name;
        return $user_name;
    }
}

?>
