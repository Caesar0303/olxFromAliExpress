<h1>Добавления подкатегорий</h1>
<?php 
    require_once "../../connect.php";
    require_once "../../head.php";
    $subcategories = mysqli_query($connect, "SELECT * FROM subcategories");
    $subcategories = mysqli_fetch_all($subcategories);
?>
    <a href="subcategories_add_page.php">Добавить</a>
    <a href="subcategories.php?id=<?= $_SESSION['category_id'] ?>">Назад</a>
    <div class="table_wrapper table-responsive">
        <table>
        <tbody class="table table-striped table-bordered table-hover">
            <tr>
            <th>
                Номер
            </th>
            <th>
                Категорий
            </th>
            <th>
            </th>
            <th>
                Подкатегорий
            </th>
            </tr>
                <?php 
                    foreach ($subcategories as $subcategory) {
                        $category_id = $subcategory[1];
                        $category = mysqli_query($connect, "SELECT name FROM categories WHERE id = $category_id");
                        $category = mysqli_fetch_all($category);
                        $category = $category[0][0]; 
                ?>
            <tr>
                <td><?= $subcategory[0] ?></td>
                <td><?= $category ?></td>
                <td><?= $subcategory[2] ?></td>
                <td><?= '<a href="subcategories_delete.php?id='.$subcategory[0].'">Удалить</a>' ?></td>
                <td><?= '<a href="subcategories_update_page.php?id='.$subcategory[0].'"> Изменить </a>' ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php 
    require_once "../../foot.php";
?>