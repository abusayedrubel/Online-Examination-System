<?php include 'inc/header2.php';
  $filepath = realpath(dirname(__FILE__));
  include_once ($filepath.'/./classes/User.php');
  $usr = new User();
?>
<div class="loginbox_reg">
        <img src="avater.png" class="avatar">
        <h1>User Registration</h1>
        <form action="" method="post">
            <p>Name</p>
            <input type="text" name="name" id="name" placeholder="Sayed Rubel" required="1">
            <p>Username</p>
            <input name="username" type="text" id="username" placeholder="sayedrubel12345" required="1">
            <p>Password</p>
            <input type="password" name="password" id="password" placeholder="pass12345" required="1">
            <p>E-mail</p>
            <input name="email" type="text" id="email" placeholder="exmple@gmai.com" required="1">
            <input type="submit" id="regsubmit" value="Signup">
            <a href="index.php">Already have account? Login</a><br>
            <a href="#">Team Innovative</a>
        </form>
        <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $userregi = $usr->userRegistration($name, $username, $password, $email);
    echo $userregi;
  }
  ?>
  </div>
<!--
  <div class="segment">
   <form action="" method="post">
    <table>
      <tr>
       <td>Name</td>
       <td><input type="text" name="name" id="name"></td>
     </tr>
     <tr>
       <td>Username</td>
       <td><input name="username" type="text" id="username"></td>
     </tr>
     <tr>
       <td>Password</td>
       <td><input type="password" name="password" id="password"></td>
     </tr>

     <tr>
       <td>E-mail</td>
       <td><input name="email" type="text" id="email"></td>
     </tr>
     <tr>
       <td></td>
       <td><input type="submit" id="regsubmit" value="Signup">
       </td>
     </tr>
   </table>
 </form>
 <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $userregi = $usr->userRegistration($name, $username, $password, $email);
    echo $userregi;
  }
  ?>
</div>
-->
<?#php include 'inc/footer.php'; ?>