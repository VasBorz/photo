<!--1. Создать галерею изображений, состоящую из двух страниц:-->
<!--### а) Просмотр всех фотографий (уменьшенных копий);-->
<!--### б) Просмотр конкретной фотографии (изображение оригинального размера)-->


<!--### в) Все страницы вывода на экран – это twig-шаблоны. Вся логика – на бэкенде.-->
<!--### г) *Реализовать хранение ссылок и информации по картинкам в БД.-->
<!---->
<!--2. *Для примера 6 из сегодняшнего урока реализовать хранение в БД, которое позволит логике example6.php работать.-->

<?php
    require_once 'inc/DbInteract.class.php';
    require_once 'vendor/autoload.php';

    $asset_url = 'css/style.css';
    $sql = "SELECT * FROM geekbrains.images";
    $obj = new DbInteract();
    $images = $obj->get($sql);
    if (isset($_GET['big_image_url']) && isset($_GET['id'])){
        $big_image = $_GET['big_image_url'];
        $id_img = $_GET['id'];
        $sql2 = "UPDATE geekbrains.images SET views = views + 1 WHERE id = $id_img";
        $obj->get($sql2);
    }

    try {
        $loader = new Twig_Loader_Filesystem('templates');
        $twig = new Twig_Environment($loader);
        $template = $twig->load('big_images.tmpl');
        echo $template->render(array('images'=>$images, 'asset_url'=>$asset_url, 'big_image'=> $big_image));
    }catch (Exception $e){
        echo 'ERROR '. $e->getMessage();
    }
?>
