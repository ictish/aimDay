<?php

class View
{
    function __construct() {
        $this->data = array();       
    }

    public function render($name) {
        require(VIEW_PATH.'/'.$name.'.php');   
    }
}

?>
