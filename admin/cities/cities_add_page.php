<h1>Добавить город</h1>
<?php 
    require_once '../../connect.php';
    require_once "../../head_admin.php";    
    require_once "../../admin_access.php"; 

?>

<form action="cities_add.php" method="POST">
    <input type="text" placeholder="Название города" name="name">
</form>
<a href="cities.php">Назад</a>

<?php 
    require_once '../../foot.php';
?>