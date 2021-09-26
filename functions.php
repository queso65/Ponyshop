<?php
require_once 'vendor/connect.php';

function get_cat(){
	global $connect;
	$query = "SELECT * FROM `category`";
	$res = mysqli_query($connect, $query);
	$arr_cat = array();
	while($row = mysqli_fetch_assoc($res)){
		$arr_cat[$row['id']] = $row;
	}
	return $arr_cat;
}

function cats_id($array, $id){
	if(!$id) return false;
	$data .= $id . ",";
	foreach($array as $item){
		if($item['parent'] == $id){
			$data .= $item['id'] . ",";
			$data .= cats_id($array, $item['id']);
		}
	}
	return $data;
}

function get_products($ids){
	global $connect;
	if($ids){
		$query = "SELECT * FROM goods WHERE cat_id IN($ids) ORDER BY name";
	}
	else{
	    $query = "SELECT * FROM goods ORDER BY name";
	}
	$res = mysqli_query($connect, $query);
	$products = array();
	while($row = mysqli_fetch_assoc($res)){
		$products[] = $row;
	}
	return $products;
}