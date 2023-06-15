    <h1>Мои объявления</h1>
<?php 
    require_once '../../connect.php';
    require_once '../../head.php';
    $my_ads = mysqli_query($connect, "SELECT * FROM ad WHERE user_id = $id");
    $my_ads = mysqli_fetch_all($my_ads);
    if ($my_ads[11] == 0) {
        
    }
?>
<div class="ads">
<?php 
    foreach ($my_ads as $my_ad){
        $ad_id = $my_ad[0];
        $city_id = $my_ad[1];
        $category_id = $my_ad[3];
        $subcategory_id = $my_ad[4];
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
        if ($my_ads[11] == 0) {
        echo 'В обработке';
        echo '<br>';
        }
        echo 'Объвление: ';
        echo $my_ad[2];
        echo '<br>';
        echo 'Город: ';
        echo $cities[0][0];
        echo '<br>';
        echo 'Цена: ';
        echo $my_ad[7] . "T";
        echo '<br>';
        echo '<a href="ad_page.php?ad_id='.$ad_id.'">Посмотреть объявление</a>';
        echo '<a href="ad_update_page.php?ad_id='.$ad_id.'">Редактировать объявление</a>';
        echo '<a href="add_image_page.php?ad_id='.$ad_id.'">Редактировать картинки</a>';
        echo '<a href="ad_delete.php?ad_id='.$ad_id.'">Удалить объявление</a>';
        echo '</div>';
    }
?>
</div>

<?php 
    require_once '../../foot.php';
?>