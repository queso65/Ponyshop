<?php
	require_once 'connect.php';
	require_once '../functions.php';
	session_start();

	if( isset($_POST['delate_id']) ){
		$resp = rights(1);
		
		if($resp == "have_rights"){
			$id = $_POST['delate_id'];
			$sql_delete = "DELETE FROM users WHERE id = $id "; 
			$res = mysqli_query($connect, $sql_delete);
			echo $resp;
		}
		else{
			echo $resp;
		}
	}
?>
