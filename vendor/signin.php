<?php
	require_once 'connect.php';
	session_start();
	
	if(isset($_POST['submit'])){
	
	$er = mysqli_escape_string($connect, trim($_POST['email']));
	$query = "SELECT * FROM users WHERE email = '$er'";
	
	$req = mysqli_query($connect, $query);
	$user = mysqli_fetch_assoc($req);
	
	if($user['psw'] === md5($_POST['psw'])){
	
    $_SESSION['user'] = array(
        'id' => $user['id'],
        'name' => $user['name'],
        'role' => $user['role'],
    );
	
	header('Location: ../index.php');
	}else{
		$_SESSION['message'] = 'Не верный логин или пароль';
	}
	

	}
?>
