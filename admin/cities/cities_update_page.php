<h1>Изменить название города</h1>
<?php 
    require_once '../../head.php';
    require_once '../../connect.php';

    $city_name = mysqli_query($connect, "SELECT name FROM cities WHERE id = {$_GET['id']}");
    $city_name = mysqli_fetch_all($city_name);
    $city_name = $city_name[0][0];
?>

<form action="cities_update.php" method="POST">
    <input type="text" name="name" value="<?= $city_name ?>" >
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
</form>
<a href="cities.php">Назад</a>

<?php 
    require_once '../../foot.php';
?>