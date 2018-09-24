<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/inc/header.php');
include_once ($filepath.'/../classes/Exam.php');
$exm = new Exam();
?>

<style>
  .adminPanel{
  width: 600px;
  color: #999;
  margin: 20px auto 0;
  padding: 10px;
  border: 1px solid #ddd;
}
</style>
<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $addQue = $exm->addQuestions($_POST);
  }
    $total = $exm->getTotalRows();
    $next = $total+1;
?>
<div class="container">
	<h1>Admin Panel - Add Questions</h1>
  <?php
    if(isset($addQue)){
      echo $addQue;
    }
  ?>
	<div class="adminPanel">
    <form action="" method="post">
      <table>
        <tr>
          <td>Question No</td>
          <td>:</td>
          <td><input type="number" value="<?php
            if(isset($next)){
              echo $next;
            }
          ?>" name="quesNo"></td>
        </tr>
        <tr>
          <td>Question</td>
          <td>:</td>
          <td><input type="text" name="ques" placeholder="Add Question..." required></td>
        </tr>
        <tr>
          <td>Option 1</td>
          <td>:</td>
          <td><input type="text" name="ans1" placeholder="Add Answer 1..." required></td>
        </tr>
        <tr>
          <td>Option 2</td>
          <td>:</td>
          <td><input type="text" name="ans2" placeholder="Add Answer 2..." required></td>
        </tr>
        <tr>
          <td>Option 3</td>
          <td>:</td>
          <td><input type="text" name="ans3" placeholder="Add Answer 3..." required></td>
        </tr>
        <tr>
          <td>Option 4</td>
          <td>:</td>
          <td><input type="text" name="ans4" placeholder="Add Answer 4..." required></td>
        </tr>
        <tr>
          <td>Correct No</td>
          <td>:</td>
          <td><input type="number" name="rightAns" required></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><input type="submit" value="Add Question"></td>
        </tr>
      </table>
    </form>
	</div>
</div>
<?php include 'inc/footer.php'; ?>