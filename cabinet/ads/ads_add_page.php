<h1>Создать объявление</h1>
<?php 
    require_once '../../connect.php';
    require_once '../../head.php';
    $cities = mysqli_query($connect, "SELECT * FROM cities");
    $cities = mysqli_fetch_all($cities);
    $users = mysqli_query($connect, "SELECT * FROM users WHERE id = $id");
    $users = mysqli_fetch_all($users);
    $subcategories = mysqli_query($connect, "SELECT * FROM subcategories WHERE id = {$_GET['subcategory_id']}");
    $subcategories = mysqli_fetch_all($subcategories);
?>
   <a href="ads_category_choose.php">Назад</a>
   <br>
   Объявление в категорию: <?= $subcategories[0][2] ?>
   <form action="ads_add.php" method="POST">
        <input type="text" name="ad_header" placeholder="Объявление" required>
        <select name="city">
            <?php 
                foreach ($cities as $city) {
                    echo '<option value="'.$city[0].'">'.$city[1].'</option>';
                }
            ?>
        </select>
        <br>
        Номер телефона:
        <br>
        <input type="number" name="number" required>
        <br>
        Цена:
        <br>
        <input type="number" name="cost" required>
        <br>
        Описание: 
        <br>
        <textarea name="description" id="" cols="30" rows="10" required></textarea>
        <br> 
        <input type="hidden" name="user_id" value="<?= $id ?>">
        <input type="hidden" name="category_id" value="<?= $_GET['category_id'] ?>">
        <input type="hidden" name="subcategory_id" value="<?= $_GET['subcategory_id'] ?>">
        <button type="submit">Загрузить</button>
    </form>

<?php 
    require_once '../../foot.php';
?>