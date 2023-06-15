<h1>Просмотр объявления</h1>
<?php 
    require_once '../../connect.php';
    if($_SESSION['admin'] == 1) {
        require_once '../../head_admin.php';
    } else {
        require_once '../../head.php';
    }
    $id = $_GET['ad_id'];
    mysqli_query($connect, "UPDATE ad SET views = views + 1 WHERE id = $id");
?>
<?php
    $ad = mysqli_query($connect, "SELECT * FROM ad WHERE id = $id");
    $ad = mysqli_fetch_all($ad);
    $ad = $ad[0];
    require 'ad_info.php';
    $imagePath1 = $image[1][0];
    $imagePath2 = $image[2][0];
    echo '<a href="all_ads.php">Назад</a>';
    echo '<div class = "ad_page">';
    echo '<div class = "images">';
    echo '<img src="../../images/' . $imagePath . '" alt="Изображение объявления" width="300px">';
    if (isset($imagePath1)) {
        echo '<img src="../../images/' . $imagePath1 . '" alt="Изображение объявления" width="300px">';
    }
    if (isset($imagePath2)) {
        echo '<img src="../../images/' . $imagePath2 . '" alt="Изображение объявления" width="300px">';
    }
    echo '</div>';
    echo 'Объвление: ';
    echo $ad[2];
    echo '<br>';
    echo 'Город: ';
    echo $cities[0][0];
    echo '<br>';
    echo 'Категория: ';
    echo $category[0][0];
    echo '<br>';
    echo 'Подкатегория: ';
    echo $subcategory[0][0];
    echo '<br>';
    echo 'Цена: ';
    echo $ad[7] . "T";
    echo '<br>';
    echo 'Описание: ';
    echo $ad[5];
    echo '<br>';
    echo 'Контакты: ';
    echo $ad[8];
    echo '<br>';
    echo 'Дата: ';
    echo $ad[6];
    echo '<br>';
    echo 'Просмотры: ';
    echo $ad[9];
    echo '</div>';
    echo '<br>';
?>
<?php 
    require_once '../../foot.php';
?>