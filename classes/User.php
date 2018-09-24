
<?php 
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Session.php');
	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../helpers/Format.php');

	class User{
		private $db;
		private $fm;
		public function __construct(){
			$this->db = new Database();
			$this->fm = new Format();
		}


		public function userRegistration($name, $username, $password, $email){
			$name = $this->fm->validation($name);
			$username = $this->fm->validation($username);
			$password = $this->fm->validation($password);
			$email = $this->fm->validation($email);

			$name = mysqli_real_escape_string($this->db->link, $name);
			$username = mysqli_real_escape_string($this->db->link, $username);
			$password = mysqli_real_escape_string($this->db->link, md5($password));
			$email = mysqli_real_escape_string($this->db->link, $email);

			if($name == "" || $username == "" || $password == "" || $email == ""){
				$msg= "<span style='color:red;'>Fields Must Not be Empty!!</span>";
				return $msg;
			}else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				$msg= "<span style='color:red;'>Invalid Email Address!!</span>";
				return $msg;
			}else{
				$chkquery = "SELECT * FROM tbl_user WHERE email = '$email'";
				$chkresult = $this->db->select($chkquery);
				if($chkresult != false){
					$msg= "<span style='color:red;'>Emial already exist !!</span>";
					return $msg;
				}else{
					$query = "INSERT INTO tbl_user (name, username, password, email) VALUES ('$name','$username','$password','$email')";
					$inserted_row = $this->db->insert($query);
					if($inserted_row){
						$msg= "<span style='color:green;'>Registration Successful..</span>";
						#return $msg;
						header("Location:index.php");
						
					}else{
						$msg= "<span style='color:red;'>Error.. Not Registered!!</span>";
						return $msg;
					}
				}
			}

		}

		public function userLogin($email, $password){
			$email = $this->fm->validation($email);
			$password = $this->fm->validation($password);
			$email = mysqli_real_escape_string($this->db->link, $email);
			$password = mysqli_real_escape_string($this->db->link, $password);

			if($email=="" or $password==""){
				//echo "Empty";
				//exit();
				$lmsg = "<span style='color:red;'>Fields must not be empty!</span>";
				return $lmsg;
			}else{
				$query = "SELECT * FROM tbl_user WHERE email='$email' AND password='$password' ";
				$result = $this->db->select($query);
				if($result != false){
					$value = $result->fetch_assoc();
					if($value['status']=='1'){
						//echo "Disable";
						//exit();
						$lmsg = "<span style='color:red;'>ID Disabled!</span>";
						return $lmsg;
					}else{
						Session::init();
						Session::set("login", true);
						Session::set("userid", $value['userid']);
						Session::set("username", $value['username']);
						Session::set("name", $value['name']);
						header("Location:exam.php");
					}
				}else{
					//echo "Error";
					//exit();
					$lmsg = "<span style='color:red;'>Something went wrong!</span>";
					return $lmsg;
				}
			}
		}

		public function getUserData($userid){
			$query = "SELECT * FROM tbl_user WHERE userid = '$userid' ";
			$result = $this->db->select($query);
			return $result;
		}

		public function getAllUser(){
			$query = "SELECT * FROM tbl_user";  # $query = "SELECT * FROM tbl_user ORDER BY userid DESC";
			$result = $this->db->select($query);
			return $result;
		}

		public function updateUserData($userid, $data){
			$name = $this->fm->validation($data['name']);
			$username = $this->fm->validation($data['username']);
			$email = $this->fm->validation($data['email']);

			$name = mysqli_real_escape_string($this->db->link, $name);
			$username = mysqli_real_escape_string($this->db->link, $username);
			$email = mysqli_real_escape_string($this->db->link, $email);

			$query = "UPDATE tbl_user SET name='$name', username='$username', email='$email' WHERE userid = '$userid' ";
			$updated_row = $this->db->update($query);
			if($updated_row){
				$msg = "<span style='color: green;'>User Data Updated</span>";
				return $msg;
			}else{
				$msg = "<span style='color: red;'>User Data Not Updated</span>";
				return $msg;
			}
		}

		#For disable the users
		public function disableUser($userid){
			$query = "UPDATE tbl_user SET status = '1' WHERE userid = '$userid' ";
			$updated_row = $this->db->update($query);
			if($updated_row){
				$msg = "<span style='color: green;'>User Disabled ! </span>";
				return $msg;
			}else{
				$msg = "<span style='color: red;'>User Not Disabled ! </span>";
				return $msg;
			}
		}

		#For enable the users
		public function enableUser($userid){
			$query = "UPDATE tbl_user SET status = '0' WHERE userid = '$userid' ";
			$updated_row = $this->db->update($query);
			if($updated_row){
				$msg = "<span class='success'>User Enabled ! </span>";
				return $msg;
			}else{
				$msg = "<span class='error'>User Not Enabled ! </span>";
				return $msg;
			}
		}

		#For delete the users
		public function deleteUser($userid){
			$query = "DELETE FROM tbl_user WHERE userid = '$userid' ";
			$deleteData = $this->db->delete($query);
			if($deleteData){
				$msg = "<span class='success'>User Removed ! </span>";
				return $msg;
			}else{
				$msg = "<span class='error'>Error to remove this user ! </span>";
				return $msg;
			}
		}



		public function userContact($name, $email, $massage){
			$name = $this->fm->validation($name);
			$email = $this->fm->validation($email);
			$massage = $this->fm->validation($massage);

			if($name == "" || $massage == "" || $email == ""){
				$msg= "<span style='color:red;'>Fields Must Not be Empty!!</span>";
				return $msg;
			}else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				$msg= "<span style='color:red;'>Invalid Email Address!!</span>";
				return $msg;
			}else{
				$chkquery = "SELECT * FROM tbl_user WHERE email = '$email'";
				$chkresult = $this->db->select($chkquery);
				if($chkresult != false){
					$msg= "<span style='color:red;'>Emial already exist !!</span>";
					return $msg;
				}else{
					$query = "INSERT INTO contact (name, email, massage) VALUES ('$name','$email','$massage')";
					$inserted_row = $this->db->insert($query);
					if($inserted_row){
						$msg= "<span style='color:green;'>Successful..</span>";
						return $msg;
					}else{
						$msg= "<span style='color:red;'>Error.. Not Submitted!!</span>";
						return $msg;
					}
				}
			}

		}


		public function getAllMessage(){
			$query = "SELECT * FROM contact ORDER BY id DESC";
			$result = $this->db->select($query);
			return $result;
		}

		public function deleteMessage($userid){
			$query = "DELETE FROM contact WHERE id = '$userid' ";
			$deleteData = $this->db->delete($query);
			if($deleteData){
				$msg = "<span class='success'>User Removed ! </span>";
				return $msg;
			}else{
				$msg = "<span class='error'>Error to remove this user ! </span>";
				return $msg;
			}
		}
	}

 ?>