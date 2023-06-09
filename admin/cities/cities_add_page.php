<?php 
    require_once '../../head.php';
    require_once '../../connect.php';
?>

<form action="cities_add.php" method="POST">
    <input type="text" placeholder="Название города" name="name">
</form>
<a href="cities.php">Назад</a>

<?php 
    require_once '../../../foot.php';
?>