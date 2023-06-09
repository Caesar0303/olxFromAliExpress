<h1>Изменение подкатегорий</h1>
<?php 
    require_once "../../connect.php";    
    require_once "../../head.php";    

    $subcategory_name = mysqli_query($connect, "SELECT name FROM subcategories WHERE id = {$_GET['id']}");
    $subcategory_name = mysqli_fetch_all($subcategory_name);
    $subcategory_name = $subcategory_name[0][0];
    $categories = mysqli_query($connect, "SELECT * FROM categories");
    $categories = mysqli_fetch_all($categories); 
?>
    <form action="subcategories_update.php" method="post">
        <select name="category">
            <?php 
                foreach($categories as $category){
                    echo "<option value='" . $category[0] . "'>" . $category[1] . "</option>";
                }  
            ?>
        </select>
        <input type="text" name="name" value="<?= $subcategory_name ?>">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    </form>
    <a href="subcategories.php?id=<?= $_SESSION['category_id'] ?>">Назад</a>
<?php 
    require_once "../../foot.php";    
?>