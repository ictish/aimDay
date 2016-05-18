<?php

class View
{
    function __construct() {
        $this->data = array();       
    }

    public function render($name, $mode = false) {
        if($mode) {
            require(VIEW_PATH.'/header.php');
            require(VIEW_PATH.'/'.$name.'.php');
            require(VIEW_PATH.'/footer.php');
        } else {    
            require(VIEW_PATH.'/'.$name.'.php');
        }
    }
}

?>
