<?php require_once(dirname(__DIR__)."/config/constants.php");?>

<?php
session_start();
session_unset();
session_destroy();
header("Location:".$host."/".$app_name."/".$app_folder."/login.php?msg=logged_out");
?>
