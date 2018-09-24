<?php include 'inc/header.php'; ?>
<?php
	Session::checkSession();
?>
<div class="container_final">
	<h1>You have done..!</h1>
	<div class="container_final_start">
		<p>Congratulation, you have just completed the test..!</p>
		<p>Final Score: 
			<?php
				if(isset($_SESSION['score'])){
					echo $_SESSION['score'];
					unset($_SESSION['score']);
				}
			?>
		</p>
		<div class="link">
		<a href="viewans.php">View Answers</a>
		<a href="starttest.php">Start Again</a>
		</div>
	</div>
</div>
<?php include 'inc/footer.php'; ?>
