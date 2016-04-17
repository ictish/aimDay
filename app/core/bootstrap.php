<?php

class Bootstrap
{
    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        
        if(empty($url)) {
            $login = new Login();
            $login->index();
            return false;
        }

        $url = rtrim($url,'/');
        $url = explode('/',$url);
        
        if(!file_exists(CONTROLLER_PATH.'/'.$url[0].'.php')) {
            echo("Invalid address!");
            return false;
        }

        $url_count = count($url);
        $controller = new $url[0]();
        
        $args = array();
        if($url_count > 2) {
            for($i = 2; $i < $url_count; $i++) {
                array_push($args, $url[$i]);
            }

            $controller->$url[1]($args);
        } else {
           if(isset($url[1])) {
            $controller->$url[1]();
           } else {
            $controller->index();
           }
        }            
    }
}

?>
