<?php
	include_once('configuration.php');

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$gender = $_POST['gender'];
		$city = $_POST['city'];
		

		//header("location : index.php");
	}
?>
<?php
function validation(){
		if(!(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['contact']) || !isset($_POST['gender']) || !isset($_POST['city']))){
			echo "Values are not valid";
		}
	}
	validation();
?>
