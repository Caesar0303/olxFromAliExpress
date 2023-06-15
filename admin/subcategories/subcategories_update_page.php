<h1>Изменение подкатегорий</h1>
<?php 
    require_once "../../connect.php";    
    require_once '../../head_admin.php';  
    require_once "../../admin_access.php";  

    $subcategory_name = mysqli_query($connect, "SELECT name FROM subcategories WHERE id = {$_GET['id']}");
    $subcategory_name = mysqli_fetch_all($subcategory_name);
    $subcategory_name = $subcategory_name[0][0];
    $categories = mysqli_query($connect, "SELECT * FROM categories");
    $categories = mysqli_fetch_all($categories); 
    $selected_category_id = $_GET['category_id'];
    $selected_category = mysqli_query($connect, "SELECT name FROM categories WHERE id = $selected_category_id");
    $selected_category = mysqli_fetch_all($selected_category);
    $selected_category = $selected_category[0][0];
?>
    <form action="subcategories_update.php" method="post">
        <select name="category">
            <?php 
                echo '<option disabled selected>'.$selected_category.'</option>';
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