<?php 
class Home extends Controller
{
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->view->data['notice'] = "This is data sent from controller";
        $this->view->render('home/home', true);
    }   

}
?>
