<?php

class Login extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->util->is_logged_in();
        
    }

    function index() {
        $this->view->render('login/login');
    }

    function authenticate() {
        $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
        $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';
        $m_user = new M_user();
        $result = $m_user->get_user($email, $password);
        
        if(!empty($result)) {
            session_start();
            $_SESSION['user_id'] = $result['m_user_id'];
            $_SESSION['user_first_name'] = $result['m_user_first_name'];
            $_SESSION['user_middle_name'] = $result['m_user_middle_name'];
            $_SESSION['user_last_name'] = $result['m_user_last_name'];
            header('Location:http://'.APP_ADDR.'/home');
        } else {
            $this->view->data['status'] = 'login_failed';
            $this->view->render('login/login');
        }
    }
}

?>
