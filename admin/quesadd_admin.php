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

.container2{
  width: 600px;
  color: #999;
  margin: 20px auto 0;
  padding: 10px;
  border: 1px solid #ddd;
}

* {
    box-sizing: border-box;
}


.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    width: 100%;
    left: 0;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content .header {
    background: red;
    padding: 16px;
    color: white;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 10px;
    background-color: #ccc;
    height: 250px;
}

.column a {
    float: none;
    color: black;
    padding: 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.column a:hover {
    background-color: #ddd;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
        height: auto;
    }
}
</style>
<div class="container">
  <div class="container2">
	<h1>Admin Panel - Add Questions</h1>
  <div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">CSE
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
        <h2>Computer Science and Engineering</h2>
      </div>   
      <div class="row">
        <div class="column">
          <h3>C Programming Test</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>Java Programming Test</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>PHP Programming Test</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>Python Programming Test</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>Js Programming Test</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>C# Programming Test</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
      </div>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">SSC
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
        <h2>Secondary School Certificate</h2>
      </div>   
      <div class="row">
        <div class="column">
          <h3>Bangla</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>English</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>Mathematics</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>Physics</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>Chemistry</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>Others</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
      </div>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">HSC
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
        <h2>Higher Secondary School Certificate</h2>
      </div>   
      <div class="row">
        <div class="column">
          <h3>Bangla</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>English</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>Mathematics</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>Physics</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>Chemistry</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>Biology</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
      </div>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Addmission
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
        <h2>Universities and Medicals</h2>
      </div>   
      <div class="row">
        <div class="column">
          <h3>Bangla</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>English</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>Mathematics</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>Physics</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>Chemistry</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>Biology</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
      </div>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Science
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
        <h2>All Subjects</h2>
      </div>   
      <div class="row">
        <div class="column">
          <h3>Physics</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>Chemistry</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>Biology</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>Mathematics</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
        <div class="column">
          <h3>Social Science</h3>
          <a href="quesadd.php">Quiz 1</a>
          <a href="quesadd.php">Quiz 2</a>
          <a href="quesadd.php">Quiz 3</a>
        </div>
      </div>
    </div>
  </div> 
</div>
</div>
</div>
<?php include 'inc/footer.php'; ?>