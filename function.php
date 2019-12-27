<?php 

function query_select ($query){

	$connection = mysqli_connect(HOST,USER,PASSWORD,DB);

	if (!$connection) {
		echo "no connection" . PHP_EOL;
		echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL . '<br>';
		echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
	}

	$result = mysqli_query($connection, $query);


	while ($row = mysqli_fetch_assoc($result)) {
		$arr[] = $row;
	}

	mysqli_free_result($result);

	mysqli_close($connection);

	return $arr;

}

function query_insert ($query){

	$connection = mysqli_connect(HOST,USER,PASSWORD,DB);

	if (!$connection) {
		echo "no connection" . PHP_EOL;
		echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL . '<br>';
		echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
	}

	$result = mysqli_query($connection, $query);

	mysqli_free_result($result);

	mysqli_close($connection);

}

function update_views ($id_image){

	$conn = mysqli_connect(HOST, USER, PASSWORD, DB);

		if (!$conn) {

		echo "текст ошибки" . mysqli_connect_error() . "<br>";
		echo "Код ошибки" . mysqli_connect_errno() . "<br>";

		}else{	

		$query = "UPDATE images SET views = views + 1 WHERE id = $id_image";

		mysqli_query($conn, $query);

		mysqli_close($conn);
			
		}

}

?>