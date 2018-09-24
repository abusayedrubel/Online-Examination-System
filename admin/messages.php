<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/User.php');
	$usr = new User();
?>
<?php 
    if(isset($_GET['del'])){
      $delid = (int) $_GET['del'];
      $delUser = $usr->deleteMessage($delid);
    }
  ?>

<div class="container">
  <h3>Messages</h3>
  <div class="manageuser">
    <?php
    if(isset($delUser)){
      echo $delUser;
    }
  ?>
    <table class="tblone">
      <tr>
        <th width="25%">Name</th>
        <th width="25%">Email</th>
        <th width="40%">Message</th>
        <th width="10%">Remove</th>
      </tr>

      <?php
        $userData = $usr->getAllMessage();
        if($userData){
          $i = 0;
          while ($result = $userData->fetch_assoc()) {
            $i++;
      ?>

      <tr>
        <td><?php echo $result['name']; ?></td>
        <td><?php echo $result['email']; ?></td>
        <td><?php echo $result['massage']; ?></td>
        <td>
          <a style="text-decoration: none; color: red;" onclick="return confirm('Are you sure to remove?')" href="?del=<?php echo $result['id']; ?>">Remove</a>
        </td>
      </tr>

      <?php } } ?>

    </table>
  </div>
</div>
<?php include 'inc/footer.php'; ?>