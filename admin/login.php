<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/loginheader.php');
	include_once ($filepath.'/../classes/Admin.php');
	$ad = new Admin();
?> 
<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$adminData = $ad->getAdminData($_POST);
	}
?>
<div class="loginbox">
        <img src="avater.png" class="avatar">
        <h1>Admin Login</h1>
        <form action="" method="post">
            <p>Username</p>
            <input type="text" name="adminUser" placeholder="sayedrubel12345" required />
            <p>Password</p>
            <input type="password" name="adminPass" placeholder="password" required="1" />
            <input type="submit" name="login" value="Login"/>
            <a href="/exam/index.php">User Login</a><br>
            <a href="#">Team Innovative</a><br>
            <a href="#">Contact</a><br>
        </form>
        <?php
			if(isset($userlogin)){
				echo $userlogin;
			}
		?>
    </div>