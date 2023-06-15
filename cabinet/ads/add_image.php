<?php
require_once '../../connect.php';
if (!empty([$_FILES['file']])) {
    var_dump($_FILES);
}

$ad_id = $_POST['ad_id'];
mysqli_query($connect, "DELETE FROM images WHERE ad_id = '$ad_id'");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $targetDirectory = '../../images/';
    $targetFile = $targetDirectory . basename($_FILES['file']['name']);
    if (isset($_FILES['file1'])) {
        $targetFile1 = $targetDirectory . basename($_FILES['file1']['name']);
    }
    if (isset($_FILES['file2'])) {
        $targetFile2 = $targetDirectory . basename($_FILES['file2']['name']);
    }
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
                mysqli_query($connect, "INSERT INTO images (image, ad_id) VALUES ('$imagePath', '$ad_id')");

                if (move_uploaded_file($_FILES['file1']['tmp_name'], $targetFile1)) {
                    $imagePath =  basename($_FILES['file1']['name']);
                    mysqli_query($connect, "INSERT INTO images (image, ad_id) VALUES ('$imagePath', '$ad_id')");
                }
                if (move_uploaded_file($_FILES['file2']['tmp_name'], $targetFile2)) {
                    $imagePath =  basename($_FILES['file2']['name']);
                    mysqli_query($connect, "INSERT INTO images (image, ad_id) VALUES ('$imagePath', '$ad_id')");
                }
                echo "Изображение успешно добавлено.";
                header ('Location: ads_success.php');
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
