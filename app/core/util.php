<?php

class Util
{
    public function is_logged_in() {
        session_start();
        if(!isset($_SESSION['user_id'])) {
            /*if(!strstr($_GET['url'],'login')) {
                header('Location:'.APP_ADDR.'/login');
            }*/
            header('Location:'.APP_ADDR);
        } else {
            if(!strstr($_GET['url'],'home')) {
                header('Location:'.APP_ADDR.'/home');
            }
        }
    }

    public function get_class_name($file_path) {
        $path_explode = explode('/',$file_path);
        $file_name = $path_explode[count($path_explode) - 1];
        $file_name_explode = explode('.',$file_name);
        return $file_name_explode[0];
    }

    /* checks the env file and returns the environment, if file not found default environment is development*/
   /* public function get_environment() {
        $fp = fopen(CONFIG_PATH.'/env'), 'r';
        if($fp) {
            while(($line = fgets($fp) !== false)) {
                return $line;
            }
            fclose($fp);
        } else {
            return "development";   
        }
    }*/
}
?>
