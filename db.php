<?php
	try {
// 		 $conn = mysqli_connect("localhost","root","rajatsaini","monitors");
	$conn = mysqli_connect("localhost","defenceguru_user_monitors","BYRSW++%_&k.","defenceguru_monitors");
	} catch (mysqli_sql_exception $e) {
		echo $e;
	}
?>