<!--1. Создать галерею изображений, состоящую из двух страниц:-->
<!--### а) Просмотр всех фотографий (уменьшенных копий);-->
<!--### б) Просмотр конкретной фотографии (изображение оригинального размера)-->
<!--### в) Все страницы вывода на экран – это twig-шаблоны. Вся логика – на бэкенде.-->
<!--### г) *Реализовать хранение ссылок и информации по картинкам в БД.-->
<!---->
<?php
    require_once 'inc/DbInteract.class.php';
    require_once 'vendor/autoload.php';

    $asset_url = 'css/style.css';
    $query = "SELECT * FROM geekbrains.images";
    $obj = new DbInteract();
    $images = $obj->get($query);

    try {
        $loader = new Twig_Loader_Filesystem('templates');
        $twig = new Twig_Environment($loader);
        $template = $twig->load('small_images.tmpl');
        echo $template->render(array('images'=>$images, 'asset_url'=>$asset_url));
    }catch (Exception $e){
        echo 'ERROR '. $e->getMessage();
    }
?>