<?php include 'inc/header2.php';
  $filepath = realpath(dirname(__FILE__));
  include_once ($filepath.'/./classes/User.php');
  $usr = new User();
?>
<div class="loginbox_reg">
        <h1>Send a message</h1>
        <form action="" method="post">
            <p>Name</p>
            <input type="text" name="name" id="name" placeholder="Sayed Rubel" required="1">
            <p>E-mail</p>
            <input name="email" type="text" id="email" placeholder="exmple@gmail.com" required="1">
            <p>Massage</p>
            <input type="text" name="massage" id="massage" placeholder="massage" required="1">
            <input type="submit" id="regsubmit" value="Send">
        </form>
        <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $massage = $_POST['massage'];
    

    $userregi = $usr->userContact($name, $email, $massage);
    echo $userregi;
  }
  ?>