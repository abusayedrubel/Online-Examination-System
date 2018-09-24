	<?php include 'inc/header.php'; ?>

	<?php
		Session::checkSession();

		if(isset($_GET['q'])){
			$number = (int) $_GET['q'];
		}else{
			header("Location:exam.php");
		}

		$total = $exm->getTotalRows();
		$question = $exm->getQuesbyNumber($number);
	?>
	<?php
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$process = $pro->processData($_POST);
		}
	?>
	<div class="container_test">
		<div><div><div><div><div><div><div><div><div>
	 		<form method="post" action="" class="quote">
	 					<div>
	 						<h1>Question <?php echo $question['quesNo']; ?> Out of <?php echo $total; ?></h1>
	 					</div>
  						<div>
  							<label><h3>Que <?php echo $question['quesNo']; ?>: <?php echo $question['ques']; ?></h3><span id="countdown">10:00</span></label><br>
  							<?php
					$answer = $exm->getAnswer($number);
					if($answer){
						while($result = $answer->fetch_assoc()){
				?>
  							<input type="radio" name="ans" value="<?php echo $result['id']; ?>" /><?php echo $result['ans']; ?><br>
  						</div>
  						<?php } } ?>
  						
  						<input class="button_1" type="submit" name="submit" value="Next Question"/>
  						<input type="hidden" name="number" value="<?php echo $number; ?>" />
					</form>
					</div>
				</div></div></div></div></div></div></div></div></div>
	<?php include 'inc/footer_test.php'; ?>
<script>
var seconds = 60;
    function secondPassed() {
        var minutes = Math.round((seconds - 30)/60),
            remainingSeconds = seconds % 60;

        if (remainingSeconds < 10) {
            remainingSeconds = "0" + remainingSeconds;
        }

        document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
        if (seconds == 0) {
            clearInterval(countdownTimer);
           //form1 is your form name
          document.form1.submit();
        } else {
            seconds--;
        }
    }
    var countdownTimer = setInterval('secondPassed()', 1000);
</script>

