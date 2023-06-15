<h1>Категорий</h1>
<?php 
    require_once "../../connect.php";
    require_once "../../head_admin.php";    
    require_once "../../admin_access.php";    
?>
<a href="../../index.php">Назад</a>
<a href="categories_add_page.php"> Добавить категорию </a>
<div class="table_wrapper table-responsive">
    <table>
        <tbody class="table table-striped table-bordered table-hover">
            <tr>
            <th>
                Номер
            </th>
            <th>
                Категория
            </th>
            </tr>
                <?php 
                    $categories = mysqli_query($connect, "SELECT * FROM categories");
                    $categories = mysqli_fetch_all($categories);
                    foreach ($categories as $category) {
                ?>
            <tr>
                <td><?= $category[0] ?></td>
                <td><?= $category[1] ?></td>
                <td><?= '<a href="categories_delete.php?id='.$category[0].'">Удалить</a>' ?></td>
                <td><?= '<a href="categories_update_page.php?id='.$category[0].'"> Изменить </a>' ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php 
    require_once "../../foot.php";    
?>