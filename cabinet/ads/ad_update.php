<?php 
    require_once "../../connect.php";
    $ad_id = $_POST['ad_id'];
    $name = $_POST['ad_header'];
    $city_id = $_POST['city'];
    $contacts = $_POST['number'];
    $description = $_POST['description'];
    $user_id = $_POST['user_id'];
    $cost = $_POST['cost'];
    $category = $_POST['categories'];
    $subcategory = $_POST['subcategories'];
    $current_date = date('Y-m-d');
    var_dump($category);
    var_dump($subcategory);


    mysqli_query($connect, "UPDATE ad SET city_id = '$city_id', name = '$name', description = '$description',
    create_at = '$current_date', cost = '$cost', contacts = '$contacts',subcategory_id = '$subcategory', category_id = '$category',moderation = 0 WHERE id = $ad_id");

    $insertedId = mysqli_insert_id($connect); // Получаем идентификатор только что вставленной записи

    header("Location: my_ads.php");
?>