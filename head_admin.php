<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
    <title>Olx</title>
</head>
<style>
    .ad_page{
        background: #fff;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
    .ad {
        max-width: 300px;
        border-radius: 10px;
        background: #fff;
        display: flex;
        margin-right: 30px;
        margin-bottom: 30px;
        flex-direction: column;
        align-content: center;
    }
    .ads {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }
    .image {
        border-radius: 10px;
    }
    .images {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-around;
    }
    .menu {
        float: left;
        width: 300px;
        height: 100%;
    }
    body{
        background:#F0F8FF;
    }
    h1 {
        display: flex; 
        justify-content: center;
    }
    .table_wrapper {
        display: flex;
        justify-content: center;
        flex-direction: column-reverse;
    }
</style>
<body>
<?php 
    if($_SESSION['admin'] == 1) {
?>
<div class="menu">
        <ul>
            <li><a href="/exit.php">Выйти</a></li>
            <li><a href="/admin/categories/categories.php">Категорий</a></li>
            <li><a href="/admin/subcategories/subcategories.php">Подкатегорий</a></li>
            <li><a href="/admin/cities/cities.php">Города</a></li>
            <li><a href="/cabinet/ads/moderation.php">Модерация</a></li>
            <li><a href="/cabinet/ads/all_ads.php">Все объявления</a></li>
        </ul>
</div>
<?php
    } 
    elseif ($_SESSION['user'] == NULL) {
?>
<?php 
    echo '<div class="menu">';
    echo '<ul>';
    echo '<li><a href="/cabinet/ads/all_ads.php">Посмотреть все объявления</a></li>';
    echo '</ul>';
    echo '</div>';
    }
?>
