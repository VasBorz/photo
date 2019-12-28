<!--1. Создать галерею изображений, состоящую из двух страниц:-->
<!--### а) Просмотр всех фотографий (уменьшенных копий);-->
<!--### б) Просмотр конкретной фотографии (изображение оригинального размера)-->


<!--### в) Все страницы вывода на экран – это twig-шаблоны. Вся логика – на бэкенде.-->
<!--### г) *Реализовать хранение ссылок и информации по картинкам в БД.-->
<!---->
<!--2. *Для примера 6 из сегодняшнего урока реализовать хранение в БД, которое позволит логике example6.php работать.-->

<?php
    require_once 'inc/GetResults.class.php';
    //require_once 'inc/output.php';
    require_once 'vendor/autoload.php';

    try {
        $loader = new Twig_Loader_Filesystem('templates');
        $twig = new Twig_Environment($loader);
        $template = $twig->load('small_images.tmpl');
        $month = date('m', mktime());
        $arr = array('1','2','3','4');
        echo $template->render(array('items'=>$arr));
    }catch (Exception $e){
        echo 'ERROR '. $e->getMessage();
    }

    $obj = new getResults();
    $query = "SELECT * FROM geekbrains.images";
    print_r($obj->get($query));


?>

<h2>Here you can upload new image:</h2>
<form action="http://localhost:8888/php/send.php" method="POST" enctype="multipart/form-data">
<input type="title" name="first_name">
<input type="file" name="myfile">
<input type="submit" value="submit">
</form>