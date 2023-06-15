<h1>Изменение категорий</h1>
<?php 
    require_once "../../connect.php";
    require_once "../../head_admin.php";    
    require_once "../../admin_access.php";    

    
    $category_name = mysqli_query($connect, "SELECT name FROM categories WHERE id = {$_GET['id']}");
    $category_name = mysqli_fetch_all($category_name);
    $category_name = $category_name[0][0];
?>
    <form action="categories_update.php" method="post">
        <input type="text" name="name" value = '<?=$category_name?>'>
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    </form>
    <a href="categories.php">Назад</a>
<?php 
    require_once "../../foot.php";    
?>