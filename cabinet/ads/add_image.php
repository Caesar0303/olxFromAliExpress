<?php
require_once '../../connect.php';
if (!empty([$_FILES['file']])) {
    var_dump($_FILES);
}
$ad_id = $_POST['ad_id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $targetDirectory = '../../images/';
    $targetFile = $targetDirectory . basename($_FILES['file']['name']);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
echo "!!!!!!";
    // Проверяем, является ли файл изображением
    if (getimagesize($_FILES['file']['tmp_name']) !== false) {
        // Проверяем тип файла (допустимые форматы изображений: JPG и PNG)
        if ($imageFileType === 'jpg' || $imageFileType === 'jpeg' || $imageFileType === 'png') {
            // Перемещаем файл в папку "images"
            if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
                // Файл успешно загружен
                $imagePath =  basename($_FILES['file']['name']);

                // Добавляем информацию о загруженном изображении в таблицу "images"
                mysqli_query($connect, "INSERT INTO images (image, ad_id) VALUES ('$imagePath', '$ad_id')");

                echo "Изображение успешно добавлено.";
                header ('Location: ads_category_choose.php');
            } else {
                echo "Ошибка при сохранении изображения.";
            }
        } else {
            echo "Недопустимый формат изображения. Поддерживаемые форматы: JPG, JPEG, PNG.";
        }
    } else {
        echo "Выбранный файл не является изображением.";
    }
} else {
    echo "Ошибка запроса.";
}
?>
