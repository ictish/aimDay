<?php

class Util
{
    public function is_logged_in() {
        session_start();
        if(!isset($_SESSION['user_id'])) {
            if(!strstr($_GET['url'],'login')) {
                header('Location:http://'.APP_ADDR.'/login');
            }
        } else {
            if(!strstr($_GET['url'],'home')) {
                header('Location:http://'.APP_ADDR.'/home');
            }
        }
    }

    public function get_class_name($file_path) {
        $path_explode = explode('/',$file_path);
        $file_name = $path_explode[count($path_explode) - 1];
        $file_name_explode = explode('.',$file_name);
        return $file_name_explode[0];
    }
}

?>
