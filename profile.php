<?php include 'inc/header.php'; ?>
<?php
	Session::checkSession();
	$userid = Session::get("userid");
?>
<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/classes/User.php');
$usr = new User();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$updateUser = $usr->updateUserData($userid, $_POST);
}
?>
<style type="text/css">
	.main{
		min-height: 400px:;
	}
	.profile{
		width: 530px;
		margin: 0 auto;
		border: 1px solif #ddd;
		padding: 30px;
	}
	h1{
		text-align: center;
	}
</style>
<div class="main">
<h1>Your Profile</h1>
	<div class="profile">
		<form action="" method="post">
			<?php
				$getData = $usr->getUserData($userid);
				if($getData){
					$result = $getData->fetch_assoc();
			?>
		<table class="tbl"> 
			<tr>
			   <td>Name</td>
			   <td><input name="name" type="text" value="<?php echo $result['name']; ?>"></td>
			 </tr>
			 <tr>
			   <td>Username</td>
			   <td><input name="username" type="text" value="<?php echo $result['username']; ?>"></td>
			 </tr>   
			 <tr>
			   <td>Email</td>
			   <td><input name="email" type="text" value="<?php echo $result['email']; ?>"></td>
			 </tr>
			  <tr>
			  <td></td>
			   <td><input type="submit" name="submit" value="Update">
			   </td>
			 </tr>
			 <?php
			if(isset($updateUser)){
				echo $updateUser;
			}
		?>
        </table>
        <?php } ?>
		</form>
	</div>
</div>
<?php include 'inc/footer.php'; ?>