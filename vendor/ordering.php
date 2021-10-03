<?php
     require_once 'connect.php';
	 session_start();
	 
    if ( isset($_SESSION['cart_list']) ){
		if ( isset($_SESSION['id']) ){
		$tel = $_POST['phone'];
	    $city = $_POST['city'];
		
        foreach($_SESSION['cart_list'] as $good){
			$ord .= $good['id'] . ",";
		}
		
		$ord = rtrim($ord, ",");
		
		$user_id = $_SESSION['user']['id'];
		
		echo $tel;
		echo $city;
		echo $ord;
		echo $user_id;
		
		mysqli_query($connect,"INSERT INTO `cart` (`id`,`user_id`,`phone`,`city`,`ord`) VALUES (NULL, '$user_id', '$tel', '$city', '$ord')");
		}
		else{
			header('Location: ../login.php');
		}
    }
	else{
		header('Location: ../index.php');
	}
?>