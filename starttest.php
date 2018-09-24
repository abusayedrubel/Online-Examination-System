<?php include 'inc/header.php'; ?>
<?php
	Session::checkSession();
	$question = $exm->getQuestion();
	$total = $exm->getTotalRows();
?>
<div class="main">
	<div class="starttest">
		<h2>Test Your Knowledge</h2>
		<p>This is multiple choice quiz system</p>
		<ul>
			<li><strong>Number of Questions: </strong><?php echo $total; ?></li>
			<li><strong>Question Type: </strong>Multiple Choice</li>
		</ul>
		<a href="test.php?q=<?php echo $question['quesNo']; ?>">Start Test</a>
	</div>
</div>
<?php include 'inc/footer.php'; ?>

<style type="text/css">
.main{
	min-height: 400px;
}
.starttest{
  border: 1px solid #f4f4f4;
  margin: 0 auto;
  padding: 20px;
  width: 590px;
  margin-top: 150px;
}
.starttest h2{
  border-bottom: 1px solid #f4f4f4;
  font-size: 20px;
  margin-bottom: 10px;
  padding-bottom: 10px;
  text-align: center;
}
.starttest ul{
	margin: 0;
	padding: 0;
	list-style: none;
}
.starttest ul li{
	margin-top: 5px;
}
.starttest a{
	background: #f4f4f4 none repeat scroll 0 0;
	border: 1px solid #ddd;
	color: #444;
	display: block;
	margin-top: 10px;
	padding: 6px 10px;
	text-align: center;
	text-decoration: none;
}
</style>