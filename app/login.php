<?php
$msg = '';
if(isset($_GET['msg'])) { $msg = $_GET['msg'];}

if($msg == 'login_failed') {
    echo("Email or password incorrect! Please try again!<br>");
}

?>
<form method="post" action="login_script.php">
Email:<input type="text" name="email"></br>
Password:<input type="password" name="password"><br>
<button type="submit" name="submit" value="Login">Login</button>
</form>

