<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/inc/header.php');
?>

<style>/*
  .adminPanel{
  width: 500px;
  color: #999;
  margin: 30px auto 0;
  padding: 50px;
  border: 1px solid #ddd;
}*/
</style>

<section id="main">
  <div class="container">
    <div class="main_add">
      <h1>Welcome to Admin Panel</h1>
      <p>Manage your user and control the exam system</p>
    </div>
  </div>
</section>

<?php include 'inc/footer.php'; ?>