  <?php
  $filepath = realpath(dirname(__FILE__));
  include_once ($filepath.'/inc/header.php');
  include_once ($filepath.'/../classes/User.php');
  $usr = new User();
  ?>

  <!-- For disable the user -->
  <?php 
    if(isset($_GET['dis'])){
      $dblid = (int) $_GET['dis'];
      $dblUser = $usr->disableUser($dblid);
    }

    if(isset($_GET['ena'])){
      $eblid = (int) $_GET['ena'];
      $eblUser = $usr->enableUser($eblid);
    }

    if(isset($_GET['del'])){
      $delid = (int) $_GET['del'];
      $delUser = $usr->deleteUser($delid);
    }
  ?>

<div class="container">
  <h3>Manage Users.</h3>

  <!-- Showing the disable, remove and enable success message -->
  <?php
    if(isset($dblUser)){
      echo $dblUser;
    }

    if(isset($eblUser)){
      echo $eblUser;
    }

    if(isset($delUser)){
      echo $delUser;
    }
  ?>
  <div class="manageuser">
    <table class="tblone">
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Action</th>
      </tr>

      <?php
        $userData = $usr->getAllUser();
        if($userData){
          $i = 0;
          while ($result = $userData->fetch_assoc()) {
            $i++;
      ?>

      <tr>
        <td><!-- <?php echo $i; ?> -->
          <?php
            if($result['status'] == '1'){
              echo "<span class='error'>".$i."</span>";
            }else{
              echo $i;
            }
          ?>
        </td>
        <td><?php echo $result['name']; ?></td>
        <td><?php echo $result['username']; ?></td>
        <td><?php echo $result['email']; ?></td>
        <td>
          <?php if($result['status']=='0'){ ?>
          <a style="text-decoration: none;" onclick="return confirm('Are you sure to Disable?')" href="?dis=<?php echo $result['userid']; ?>">Disable<span style="color: grey;"> - </span></a>
          <?php }else{ ?>
          <a style="text-decoration: none;" onclick="return confirm('Are you sure to Enable?')" href="?ena=<?php echo $result['userid']; ?>">Enable<span style="color: grey;"> - </span></a>
          <?php } ?>
          <a style="text-decoration: none; color: red;" onclick="return confirm('Are you sure to remove?')" href="?del=<?php echo $result['userid']; ?>">Remove</a>
        </td>
      </tr>

      <?php } } ?>

    </table>
  </div>
</div>
<?php include 'inc/footer.php'; ?>