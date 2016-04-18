<?php
// directory path settings
define("ROOT",dirname(__DIR__));
define("APP_PATH",ROOT.'/'.'app');
define("CONTROLLER_PATH",APP_PATH.'/'.'controller');
define("MODEL_PATH",APP_PATH.'/'.'model');
define("VIEW_PATH",ROOT.'/'.'view');
define("CONFIG_PATH",ROOT.'/'.'config');
define("CORE_PATH",APP_PATH.'/'.'core');
define("SERVER_NAME",$_SERVER['SERVER_NAME']);
define("APP_NAME",explode('/',ltrim($_SERVER['REQUEST_URI'],'/'))[0]);
define("APP_ADDR",SERVER_NAME.'/'.APP_NAME);

?>
