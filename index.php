<!--1. Создать галерею изображений, состоящую из двух страниц:-->
<!--### а) Просмотр всех фотографий (уменьшенных копий);-->
<!--### б) Просмотр конкретной фотографии (изображение оригинального размера)-->


<!--### в) Все страницы вывода на экран – это twig-шаблоны. Вся логика – на бэкенде.-->
<!--### г) *Реализовать хранение ссылок и информации по картинкам в БД.-->
<!---->
<!--2. *Для примера 6 из сегодняшнего урока реализовать хранение в БД, которое позволит логике example6.php работать.-->

<?php

require_once('php/config.php');
require_once('php/function.php');
require_once('php/output.php');

?>

<h2>Here you can upload new image:</h2>
<form action="http://localhost:8888/php/send.php" method="POST" enctype="multipart/form-data">
<input type="title" name="first_name">
<input type="file" name="myfile">
<input type="submit" value="submit">
</form>