<?php 
require_once('../inc/DbInteract.class.php');

$uploadsDir = "../img";

if (is_uploaded_file($buffer = $_FILES[myfile][tmp_name])) {
	$destination = $_FILES[myfile][name];
	$img_url = $_FILES[myfile][name];
	$file_type = $_FILES[myfile][type];
	$file_size = $_FILES[myfile][size];

	if (move_uploaded_file ($buffer ,"$uploadsDir/$destination")){
		 if (!copy("$uploadsDir/$img_url", "$uploadsDir/s/$img_url")) {
     		 echo "Error - file is not uploaded...\n";
		 }
		 $obj = new DbInteract();
		 $sql = "INSERT INTO geekbrains.images (img_url, file_type, file_size, img_real_size_url, file_name) VALUES ('$img_url', '$file_type', '$file_size', '$img_url', '$img_url')";

		 $obj->insert($sql);
		 header('Location: ../index.php?uploaded=successfully');
	}

}
