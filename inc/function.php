<?php

include_once 'ConnDb.class.php';

//function update_views ($id_image){
//
//	$conn = mysqli_connect(HOST, USER, PASSWORD, DB);
//
//		if (!$conn) {
//
//		echo "текст ошибки" . mysqli_connect_error() . "<br>";
//		echo "Код ошибки" . mysqli_connect_errno() . "<br>";
//
//		}else{
//
//		$query = "UPDATE images SET views = views + 1 WHERE id = $id_image";
//
//		mysqli_query($conn, $query);
//
//		mysqli_close($conn);
//
//		}
//
//}