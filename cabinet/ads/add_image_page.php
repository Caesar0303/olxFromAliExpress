<h1>Добавить изображение</h1>
<?php 
    require_once '../../connect.php';
    require_once '../../head.php';
?>
    <form action="add_image.php" method="POST" enctype="multipart/form-data">
        Добавьте изображение:
        <br>
        <input type="file" name="file" required>
        <br>
        <input type="file" name="file1">
        <br>
        <input type="file" name="file2">
        <br>
        <input type="hidden" name="ad_id" value="<?= $_GET['ad_id'] ?>">
        <button>Загрузить</button>
    </form>
<?php 
    require_once '../../foot.php';
?>