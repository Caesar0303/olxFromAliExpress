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
    .ad {
        border-radius: 10px;
        background:#fff;
        display: flex;
        margin-right: 30px;
        margin-bottom: 30px;
    }
    .ads {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
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
<div class="menu">
        <ul>
            <li><a href="/admin/categories/categories.php">Категорий</a></li>
            <li><a href="/admin/subcategories/subcategories.php">Подкатегорий</a></li>
            <li><a href="/admin/cities/cities.php">Города</a></li>
            <li><a href="/cabinet/ads/all_ads.php">Посмотреть все объявления</a></li>
            <li><a href="/cabinet/ads/ads_category_choose.php">Создать объявление</a></li>
        </ul>
</div>

