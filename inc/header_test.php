<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Session.php');
Session::init();
include_once ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helpers/Format.php');

spl_autoload_register(function($class){
	include_once "classes/".$class.".php";
});

$db = new Database();
$fm = new Format();
$usr = new User();
$exm = new Exam();
$pro = new Process();

header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache"); 
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>
<script>
var seconds = 600;
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
<!doctype html>
<html>
<head>
	<title>Online Examination</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta http-equiv="Cache-Control" content="no-cache">
	<link rel="stylesheet" href="css/custom.css">
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>

	<style type="text/css">
	#showcase {
    	min-height: 100px;
    	background: black;
    	text-align: center;
    	color: #ffffff;
	}

	#showcase .showcase_2 {
    	margin-top: 80px;
    	padding-bottom: 20px;
	}

	#showcase .showcase_2 p {
    	margin-top: 0;
    	margin-bottom: 5px;
    	font-size: 16px;
    	font-style: italic;
	}
	</style>

</head>
<body>
<?php
	if(isset($_GET['action']) && $_GET['action'] == 'logout'){
		Session::destroy();
		header("Location:index.php");
		exit();
	}
?>
<header>
        <div class="container">
            <div id="branding">
                <h3>Innovative</h3>
            </div>
            <nav>
                <ul>
                    <?php
				$login = Session::get("login");
				if($login==true){
				?>
				<li><a href="profile.php">Profile</a></li>
				<li><a href="exam.php">Exam</a></li>
				<li><a href="?action=logout">Logout</a></li>
				<li><a href="../exam/admin/login.php">Admin</a></li>
				
				<?php	}else{ ?>
				<li><a href="index.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
				<li><a href="../exam/admin/login.php">Admin</a></li>
				<?php	} ?>
                </ul>
                
            </nav>
            <div id="nav_user">
            	<?php
			$login = Session::get("login");
			if($login==true){
			?>
			<span style="float: right; color: grey;">
			Welcome <?php echo Session::get("name"); ?>
			</span>
				
			<?php	}else{ ?>
			<span style="float: right; color: #888">
			Team Innovative
			</span>
			<?php	} ?>
            </div>
        </div>
    </header>
    <!--End Header-->
    <!--Showcase-->
    <section id="showcase">
        <div class="container">
            <div class="showcase_2">
            	<p>Time Remaining</p>
                <p><time id="countdown">10:00</time></p>
            </div>

        </div>
    </section>
    <!--End showcase-->