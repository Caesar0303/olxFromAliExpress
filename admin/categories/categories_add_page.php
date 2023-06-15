<h1>Добавление категорий</h1>
<?php 
    
    require_once "../../connect.php";    
    require_once "../../head_admin.php";    
    require_once "../../admin_access.php";    
    
?>
    <form action="categories_add.php" method="post">
        <input type="text" name="name" placeholder="Название категорий">
    </form>
    <a href="categories.php">Назад</a>
<?php 
    require_once "../../foot.php";    
?>