<?php 

$query = "SELECT * FROM images";

$result = query_select ($query);

$arr_sort = array();

foreach ($result as $key => $value) {

	$arr_sort[$value[views]] = array("$value[id]", "$value[img_url]");
	
}

function storey_sort($new_arr, $new_arr2) {
    return $new_arr2["views"] - $new_arr["views"];
}
 
usort($result, "storey_sort");



foreach ($result as $key => $value) {

	if (is_array($result)) {
		foreach ($value as $key2 => $value2) {
			if ($key2 == "img_url") {
			echo"<a href=\"http://localhost:8888/php/photo.php?id=$value[id]\"> <img width=\"100\" height=\"100\" src=\"http://localhost:8888/img/s/$value2\"></a>";
			echo " <span>views: $value[views] </span>" ;
			}


		}
	 
	}
}

 ?>