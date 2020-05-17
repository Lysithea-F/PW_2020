<?php 

	function login($username,$password){
		if ($username == "admin" && $password == "12345") {
			echo "Selamat Datang Admin";
		}else{
			echo "Username / Password Salah";
		}
	}

	$username = $_POST['username'];
	$password = $_POST['password'];
	login($username,$password);
 ?>