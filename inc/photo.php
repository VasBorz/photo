
<a href="../index.php"><h2>-back to previus page</h2></a>
<?php 
require_once('../index.php');

$id_photo = $_GET['id'];
update_views($id_photo);
$query = "SELECT * FROM images WHERE id = $id_photo";
$views = query_select($query);

//---GET big image---///
$res = query_select($query);
$img_big = $res[0][img_real_size_url];



echo " <img src=\"../img/$img_big\" height=\"400px\">";
echo "<h2>Views of this image = " . $views[0][views] . "</h2>";


 ?>
 <img src="../img/$img_big" alt="">