<?php
// directory path settings
define("ROOT", dirname(__DIR__));
define("APP_PATH", ROOT.'/app');
define("CONTROLLER_PATH", APP_PATH.'/controller');
define("VIEW_PATH", ROOT.'/view');
define("CONFIG_PATH", ROOT.'/config');
define("CORE_PATH", APP_PATH.'/core');

// server path settings
define("WEBSITE_ADDR", $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME']);
define("APP_NAME", explode('/',ltrim($_SERVER['REQUEST_URI'],'/'))[0]);
define("APP_ADDR", WEBSITE_ADDR.'/'.APP_NAME);

// directory path settings for resources
define("RES_PATH_REL", 'app/res');
define("CSS_PATH_REL", RES_PATH_REL.'/css');
define("JS_PATH_REL", RES_PATH_REL.'/js');
define("IMG_PATH_REL", RES_PATH_REL.'/img');

define("RES_PATH", APP_ADDR.'/'.RES_PATH_REL);
define("CSS_PATH", APP_ADDR.'/'.CSS_PATH_REL);
define("JS_PATH", APP_ADDR.'/'.JS_PATH_REL);
define("IMG_PATH", APP_ADDR.'/'.IMG_PATH_REL);

?>
