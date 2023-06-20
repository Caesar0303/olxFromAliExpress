<?php
require_once '../../connect.php';
var_dump($_FILES['file']);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
var_dump($_FILES['file1']);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
var_dump($_FILES['file2']);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
// if (!empty($_FILES['file'])) {
//     var_dump($_FILES);
// }

$ad_id = $_POST['ad_id'];
mysqli_query($connect, "DELETE FROM images WHERE ad_id = '$ad_id'");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $targetDirectory = '../../images/';
    $imageFileType = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
    $imageName = $ad_id . '.' . $imageFileType;
    $targetFile = $targetDirectory . $imageName;

    if (isset($_FILES['file1'])) {
        $imageFileType1 = strtolower(pathinfo($_FILES['file1']['name'], PATHINFO_EXTENSION));
        $imageName1 = $ad_id . '_1.' . $imageFileType1;
        $targetFile1 = $targetDirectory . $imageName1;
    }
    if (isset($_FILES['file2'])) {
        $imageFileType2 = strtolower(pathinfo($_FILES['file2']['name'], PATHINFO_EXTENSION));
        $imageName2 = $ad_id . '_2.' . $imageFileType2;
        $targetFile2 = $targetDirectory . $imageName2;
    }

    // Перемещаем файлы в папку "images"
    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
        $imagePath = $imageName;
        mysqli_query($connect, "INSERT INTO images (image, ad_id) VALUES ('$imagePath', '$ad_id')");

        if (isset($_FILES['file1']) && move_uploaded_file($_FILES['file1']['tmp_name'], $targetFile1)) {
            $imagePath1 = $imageName1;
            mysqli_query($connect, "INSERT INTO images (image, ad_id) VALUES ('$imagePath1', '$ad_id')");
        }
        if (isset($_FILES['file2']) && move_uploaded_file($_FILES['file2']['tmp_name'], $targetFile2)) {
            $imagePath2 = $imageName2;
            mysqli_query($connect, "INSERT INTO images (image, ad_id) VALUES ('$imagePath2', '$ad_id')");
        }

        echo "Изображения успешно добавлены.";
        header('Location: ads_success.php');
    } else {
        echo "Ошибка при сохранении изображений.";
    }
} else {
    echo "Ошибка запроса.";
}
?>
