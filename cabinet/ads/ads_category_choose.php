<h1>Выбрать категорию</h1>
<?php 
    require_once '../../connect.php';
    require_once '../../head.php';
    $cities = mysqli_query($connect, "SELECT * FROM cities");
    $cities = mysqli_fetch_all($cities);
    $categories = mysqli_query($connect, "SELECT * FROM categories");
    $categories = mysqli_fetch_all($categories);
    $category_id = $categories[0][0];
    $users = mysqli_query($connect, "SELECT * FROM users WHERE id = $id");
    $users = mysqli_fetch_all($users);
?>
    Категорий:
    <br>
    <?php 
        foreach ($categories as $category) {
            echo '<a href="?category_id='.$category[0].'">'.$category[1].'</a> <br>';
        }
    ?> 
    Подкатегорий:
    <br>
    <?php 
        if (isset($_GET['category_id'])) {
            $category_id = $_GET['category_id'];
            $subcategories = mysqli_query($connect, "SELECT * FROM subcategories WHERE categories_id = $category_id");
            $subcategories = mysqli_fetch_all($subcategories);
            foreach ($subcategories as $subcategory) {
                echo '<a href="ads_add_page.php?subcategory_id='.$subcategory[0].'&category_id='.$_GET['category_id'].'">'.$subcategory[2].'</a> <br>';
            }
        }
    ?>
    
<?php 
    require_once '../../foot.php';
?>