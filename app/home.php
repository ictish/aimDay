<?php require_once(dirname(__DIR__)."/config/constants.php");?>

<?php
function is_logged_in()
{
    session_start();
    if(isset($_SESSION['user_id'])) {
        return true;
    }
    return false;
}

function get_name()
{
    session_start();
    $first_name = (isset($_SESSION['user_first_name'])) ? $_SESSION['user_first_name'] : '';    
    $middle_name = (isset($_SESSION['user_middle_name'])) ? $_SESSION['user_middle_name'] : '';    
    $last_name = (isset($_SESSION['user_last_name'])) ? $_SESSION['user_last_name'] : '';
    $user_name = $first_name." ".$middle_name." ".$last_name;
    return $user_name;    
}
?>


<?php 
if(!is_logged_in()) { header("Location:".$host."/".$app_name."/".$app_folder."/login.php?msg=illegal_access_attemp");}?>

<div>
Welcome <?php echo(get_name()); ?>
<a href="profile.php">Profile</a>
<a href="target.php">Set Target</a>
<a href="logout.php">Logout</a>
</div>

<div>

</div>


