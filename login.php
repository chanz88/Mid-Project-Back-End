<?php 
session_start(); 
include "connect.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	$password = md5($password);

	$sql = "SELECT * FROM datapengguna WHERE username='$username' AND password='$password'";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);
        if ($row['username'] === $username && $row['password'] === $password) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            header("Location: dashboard.php");
		    exit();
        }else{
            $_SESSION['error'] = 'Incorrect username or password';
			header("Location: index.php?error=Incorrect username or password");
		    exit();
		}
	}else{
        $_SESSION['error'] = 'Incorrect username or password';
		header("Location: index.php?error=Incorrect username or password");
	    exit();
	}
	
}else{
	header("Location: index.php");
	exit();
}
?>