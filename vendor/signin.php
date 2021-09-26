<?php

    session_start();
	require_once 'connect.php';
	

	
	$email = $_POST['email'];
	$psw= md5($_POST['psw']);
	
	$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `psw` =  '$psw'");
	if(mysqli_num_rows($check_user)>0){
		
	$user = mysqli_fetch_assoc($check_user);
		
	setcookie('user', $user['role'],  time() + 10, "/");
		
    $_SESSION['user'] = array(
        'id' => $user['id'],
        'name' => $user['name'],
        'role' => $user['role'],
    );
		
		
		
		
	}else{
		$_SESSION['message'] = 'Не верный логин или пароль';
	}
	
	 header('Location: ../index.php');
?>
