<?php include 'inc/header2.php'; ?>
<?php
	Session::checkLogin();
?>
<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/classes/User.php');
$usr = new User();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$email = $_POST['email'];
			$password = md5($_POST['password']);

			$userlogin = $usr->userLogin($email, $password);
			}
?>

<div class="loginbox">
        <img src="avater.png" class="avatar">
        <h1>User Login</h1>
        <form action="" method="post">
            <p>Email</p>
            <input name="email" type="text" id="email" placeholder="user@gmail.com">
            <p>Password</p>
            <input name="password" type="password" id="password" placeholder="password">
            <input type="submit" id="loginsubmit" value="Login">
            <a href="register.php">Don't have an account?</a><br>
            <!-- <a href="/exam/admin/login.php">Admin Login</a> -->
        </form>
        <?php
			if(isset($userlogin)){
				echo $userlogin;
			}
		?>
    </div>

<?php include 'inc/footer2.php'; ?>