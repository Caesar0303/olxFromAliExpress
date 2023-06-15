<h1>Модерация</h1>
<?php 
    require_once "../../connect.php";
    if ($_SESSION['admin'] == 1) {
        require_once "../../head_admin.php";
    } else {
        require_once "../../head.php";
    }
    $ads = mysqli_query($connect, "SELECT * FROM ad WHERE moderation = 0");
    $ads = mysqli_fetch_all($ads);
    ?>
<a href="../../index.php">Назад</a>
<div class="ads">
    <?php 
        foreach ($ads as $ad){
            $ad_id = $ad[0];
            $city_id = $ad[1];
            $category_id = $ad[3];
            $subcategory_id = $ad[4];
            $cities = mysqli_query($connect, "SELECT name FROM cities WHERE id = $city_id");
            $cities = mysqli_fetch_all($cities);
            $category = mysqli_query($connect, "SELECT name FROM categories WHERE id = $category_id");
            $category = mysqli_fetch_all($category);
            $subcategory = mysqli_query($connect, "SELECT name FROM subcategories WHERE id = $subcategory_id");
            $subcategory = mysqli_fetch_all($subcategory);
            $image = mysqli_query($connect, "SELECT image FROM images WHERE ad_id = '$ad_id'");
            $image = mysqli_fetch_all($image);
            $imagePath = $image[0][0]; // Получаем путь к изображению из массива
            echo '<div class = "ad">';
            echo '<img src="../../images/' . $imagePath . '" class = "image" alt="Изображение объявления" width="300px">';
            echo 'Объвление: ';
            echo $ad[2];
            echo '<br>';
            echo 'Город: ';
            echo $cities[0][0];
            echo '<br>';
            echo 'Цена: ';
            echo $ad[7] . "T";
            echo '<br>';
            echo '<a href="ad_page.php?ad_id='.$ad_id.'">Посмотреть объявление</a>';
            echo '<a href="moderation_true.php?ad_id='.$ad_id.'">Одобрить объявления</a>';
            echo '<a href="ad_delete.php?ad_id='.$ad_id.'">Удалить объявления</a>';
            echo '</div>';
        }

    ?>
</div>
<?php 
    require_once "../../foot.php";
?>