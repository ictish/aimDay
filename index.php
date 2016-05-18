<?php
require_once(__DIR__.'/config/constants.php');
require_once(__DIR__.'/config/db.php');

/**************COMPOSER***********************
* 1. wget http://getcompser.org/composer.phar
* 2. php composer.phar install
**********************************************
require_once(__DIR__.'/vendor/autoload.php');

*************BUILD PROPEL PROJECT******************
* 3. modify propel.yaml and schema.xml
* 4. propel sql:build
* 5. propel sql:insert
* 6. propel model:build
* 7. propel config:convert
***************************************************
require_once(APP_PATH.'/generated-conf/config.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


$defautLogger = new Logger('defaultLogger');
$defualtLogger->pushHandler(new StreamHandler('/var/log/propel.log', Logger::WARNING));
*/

$app = new Bootstrap();

?>

