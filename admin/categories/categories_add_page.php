<h1>Добавление категорий</h1>
<?php 
    require_once "../../head.php";    
?>
    <form action="categories_add.php" method="post">
        <input type="text" name="name" placeholder="Название категорий">
    </form>
    <a href="categories.php">Назад</a>
<?php 
    require_once "../../foot.php";    
?>