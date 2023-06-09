<h1>Города</h1>
<?php 
    require_once '../../head.php';
    require_once '../../connect.php';

    $cities = mysqli_query($connect, "SELECT * FROM cities");
    $cities = mysqli_fetch_all($cities);
?>
<a href="../index.php">Назад</a>
<a href="cities_add_page.php">Добавить город</a>
<div class="table_wrapper table-responsive">
        <table>
            <tbody class="table table-striped table-bordered table-hover">
                <tr>
                <th>
                    Номер
                </th>
                <th>
                    Название
                </th>
                </tr>
                    <?php 
                        foreach ($cities as $city) {
                    ?>
                <tr>
                    <td><?= $city[0] ?></td>
                    <td><?= $city[1] ?></td>
                    <td><?= '<a href="cities_delete.php?id='.$city[0].'">Удалить</a>' ?></td>
                    <td><?= '<a href="cities_update_page.php?id='.$city[0].'"> Изменить </a>' ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<?php 
    require_once '../../foot.php';
?>