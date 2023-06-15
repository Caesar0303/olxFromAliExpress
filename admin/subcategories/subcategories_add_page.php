<h1>Добавления подкатегорий</h1>
<?php 
    require_once "../../connect.php";
    require_once '../../head_admin.php';
    require_once "../../admin_access.php"; 

    $categories = mysqli_query($connect, "SELECT * FROM categories");
    $categories = mysqli_fetch_all($categories);
?>
    <a href="subcategories.php?id=<?= $_SESSION['category_id'] ?>">Назад</a>
    <form action="subcategories_add.php" method="POST">
        <select name="category_id" id="">
            <?php 
                foreach ($categories as $category) {
                    echo '<option value="'.$category[0].'">'.$category[1].'</option>';
                }
            ?>
        </select>
        <input type="text" name="name" placeholder="Название подкатегорий">
        <input type="hidden" name="id" value=<?= $_SESSION['category_id'] ?>>
        <button>Сохранить</button>
    </form>
<?php 
    require_once "../../foot.php";
?>