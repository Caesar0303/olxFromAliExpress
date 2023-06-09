<?php 
    require_once "../../connect.php";

    $name = $_POST['ad_header'];
    $city_id = $_POST['city'];
    $contacts = $_POST['number'];
    $description = $_POST['description'];
    $user_id = $_POST['user_id'];
    $cost = $_POST['cost'];
    $category_id = $_POST['category_id'];
    $subcategory_id = $_POST['subcategory_id'];
    $current_date = date('Y-m-d');

    var_dump($name);
    var_dump($city_id);
    var_dump($contacts);
    var_dump($description);
    var_dump($user_id);
    var_dump($cost);
    var_dump($category_id);
    var_dump($subcategory_id);
    var_dump($current_date);

    mysqli_query($connect, "INSERT INTO ad (city_id, name, category_id, subcategory_id, description, create_at, cost, contacts, views, user_id) 
    VALUES ('$city_id', '$name', '$category_id', '$subcategory_id', '$description', '$current_date', '$cost', '$contacts', 0, '$user_id')");

    $insertedId = mysqli_insert_id($connect); // Получаем идентификатор только что вставленной записи

    header("Location: add_image_page.php?ad_id=$insertedId");
?>