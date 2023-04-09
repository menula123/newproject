<?php 

session_start();

include 'componants/db.php';



if (isset($_POST['btn'])) {
	$name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $telno = $_POST['telno'];
    $country  = $_POST['country'];


    $_SESSION['name']     = $_POST['name'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email']    = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['telno']    = $_POST['telno'];
    $_SESSION['country']  = $_POST['country'];
  

$sql = "INSERT INTO signup(name,username,email,password,telno,country) VALUES ('$name','$username','$email','$password','$telno','$country');";
$result = mysqli_query($connect,$sql);


if (mysqli_query($connect,$sql)) {
	header("Location:home.php?Registration_seccessfull");
}



}



?>