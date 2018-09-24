  <?php
  $filepath = realpath(dirname(__FILE__));
  include_once ($filepath.'/inc/header.php');
  include_once ($filepath.'/../classes/Exam.php');
  $exm = new Exam();
  ?>
  <?php
    if (isset($_GET['delque'])) {
      $quesNO = (int) $_GET['delque'];
      $delQue = $exm->delQuestion($quesNO);
    }
  ?>

<div class="container">
  <h3>Manage Question list...</h3>
  <?php
    if (isset($delQue)) {
      echo $delQue;
    }
  ?>
  <div class="manageuser">
    <table class="tblone">
      <tr>
        <th width="07%">No</th>
        <th width="73%">Questions</th>
        <th width="20%">Action</th>
      </tr>

      <?php
        $getData = $exm->getQueByOrder();
        if($getData){
          $i = 0;
          while ($result = $getData->fetch_assoc()) {
            $i++;
      ?>

      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $result['ques']; ?></td>
        <td>
          <a style="text-decoration: none; color: red;" onclick="return confirm('Are you sure to remove?')" href="?delque=<?php echo $result['quesNo']; ?>">Remove</a>
        </td>
      </tr>

      <?php } } ?>

    </table>
  </div>
</div>
<?php include 'inc/footer.php'; ?>