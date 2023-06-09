<h1>Объявления</h1>
<?php 
    require_once "../../connect.php";
    require_once "../../head.php";
    $ads = mysqli_query($connect, "SELECT * FROM ad");
    $ads = mysqli_fetch_all($ads);
?>


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
            echo '<img src="../../images/' . $imagePath . '" alt="Изображение объявления" width="300px">';
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
            echo '</div>';
            echo '<br>';
        }
    ?>
</div>
<?php 
    require_once "../../head.php";
?>