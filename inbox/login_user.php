<?php 


session_start();

include 'componants/db.php';


if (isset($_POST['login_btn'])) {
	$user_login = $_POST['username_login'];
	$email_login = $_POST['email_login'];
	$password_login= $_POST['password_login'];


	$sess_user = $_SESSION['username'];
	$sess_email = $_SESSION['email'];
	$sess_pass = $_SESSION['password'];



	if ($user_login === $sess_user and $email_login === $sess_email and $password_login === $sess_pass) {
		echo "$sess_email";
	}else {
		echo "$sess_email";
	}
}


?>