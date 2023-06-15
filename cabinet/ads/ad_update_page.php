<h1>Редактировать объявление</h1>
<?php 
    require_once '../../connect.php';
    require_once '../../head.php';
    $ad_id = $_GET['ad_id'];
    $cities = mysqli_query($connect, "SELECT * FROM cities");
    $cities = mysqli_fetch_all($cities);
    $ad_update = mysqli_query($connect, "SELECT * FROM ad WHERE id = $ad_id");
    $ad_update = mysqli_fetch_all($ad_update);
    $ad_update = $ad_update[0];
    $categories = mysqli_query($connect, "SELECT * FROM categories");
    $categories = mysqli_fetch_all($categories);

    $subcategories = mysqli_query($connect, "SELECT * FROM subcategories");
    $subcategories = mysqli_fetch_all($subcategories);
?>
    <form action="ad_update.php" method="POST">
        <input type="text" name="ad_header" value="<?= $ad_update[2] ?>" placeholder="Объявление" required>
        <select name="city">
            <?php 
                foreach ($cities as $city) {
                    echo '<option value="'.$city[0].'">'.$city[1].'</option>';
                }
            ?>
        </select>
        <select id = "first-list" name="categories">
            <?php 
                foreach ($categories as $category) {
                    echo '<option value="'.$category[0].'">'.$category[1].'</option>';
                }
            ?>
        </select>
        <select id = "second-list" name="subcategories">
            <?php 
                foreach ($subcategories as $subcategory) {
                    echo '<option value="'.$subcategory[0].'" data-chained="'.$subcategory[1].'">'.$subcategory[2].'</option>';
                }
            ?>
        </select>
        <br>
        Номер телефона:
        <br>
        <input type="number" name="number" value="<?= $ad_update[8] ?>" required>
        <br>
        Цена:
        <br>
        <input type="number" name="cost" value="<?= $ad_update[7] ?>"  required>
        <br>
        Описание: 
        <br>
        <textarea name="description" id="" cols="30" rows="10" required><?= $ad_update[5] ?></textarea>
        <br> 
        <input type="hidden" name="user_id" value="<?= $id ?>">
        <input type="hidden" name="category_id" value="<?= $ad_update[3] ?>">
        <input type="hidden" name="subcategory_id" value="<?= $ad_update[4] ?>">
        <input type="hidden" name="ad_id" value="<?= $ad_id ?>">
        <button type="submit">Загрузить</button>
    </form>
<?php 
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="../../jquery.chained.js?v=1.0.0" type="text/javascript" charset="utf-8"></script>
<script>
    $(document).ready(function() {
    $('#second-list').chained('#first-list');
    });
</script>
</body>
</html>