<?php

class Database extends Util
{
    public function __construct$($credentials) {
        $env = Util::get_environment();
        $credential = $credential[$env];

        try {
            $db = new PDO('mysql:host='.$credential['host'].';
                                       dbname='.$credential['dbname'].';
                                       charset='.$credential['charset'].';', 
                                       $credential['username'], 
                                       $credential['password']);
            return $db; 
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}

?>
