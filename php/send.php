<?php 
require_once('../php/config.php');
require_once('../php/function.php');
$uploadsDir = "../img";

if (is_uploaded_file($bufer = $_FILES[myfile][tmp_name])) {
	$destination = $_FILES[myfile][name];
	$img_url = $_FILES[myfile][name];
	$file_type = $_FILES[myfile][type];
	$file_size = $_FILES[myfile][size];
	echo "$bufer_for_small_images";

	if (move_uploaded_file ($bufer ,"$uploadsDir/$destination")){
		 if (!copy("$uploadsDir/$img_url", "$uploadsDir/s/$img_url")) {
     		echo "не удалось скопировать $file...\n";
		 }
		  		$query_insert = "INSERT INTO images (img_url, file_type, file_size, img_real_size_url, file_name) VALUES ('$img_url', '$file_type', '$file_size', '$img_url', '$img_url')";
	query_insert ($query_insert);
		header('Location: http://localhost:8888?uploaded=successfully');
	}

}

?>