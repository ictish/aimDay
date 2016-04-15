<?php require_once(dirname(__DIR__)."/config/constants.php");?>

<?php
$email="";
$password="";
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['password'])){$password = $_POST['password'];}

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);

if($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_errno);
    exit();
}

if($result = $mysqli->query("SELECT m_user_id,m_user_first_name,m_user_middle_name,m_user_last_name,m_user_email_id,m_user_password_hash from m_user where m_user_email_id='$email' and m_user_password_hash='$password'")) {
    if($result->num_rows == 1) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['m_user_id'];
        $_SESSION['user_first_name'] = $row['m_user_first_name'];  
        $_SESSION['user_middle_name'] = $row['m_user_middle_name'];  
        $_SESSION['user_last_name'] = $row['m_user_last_name']; 
        header("Location:".$host."/".$app_name."/".$app_folder."/home.php");        
    } else {
        header("Location:".$host."/".$app_name."/".$app_folder."/login.php?msg=login_failed");
    }
    $result->free();
}

$mysqli->close();

?>

