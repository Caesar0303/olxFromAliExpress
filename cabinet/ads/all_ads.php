<h1>Все объявления</h1>
<?php 
    require_once "../../connect.php";
    if ($_SESSION['admin'] == 1) {
        require_once "../../head_admin.php";
    } else {
        require_once "../../head.php";
    }
    $query = $_GET['query'];
    $ads = mysqli_query($connect, "SELECT * FROM ad WHERE moderation = 1");
    $ads = mysqli_fetch_all($ads);
    $categories = mysqli_query($connect, "SELECT * FROM categories");
    $categories = mysqli_fetch_all($categories);
    $subcategories = mysqli_query($connect, "SELECT * FROM subcategories");
    $subcategories = mysqli_fetch_all($subcategories);
?>
<div class="buttons">
    <a href="?">Показать все объявления</a>
    <?php
    if (!isset($_GET['search'])) {
        echo '<a href="' . $_SERVER['REQUEST_URI'] . '&search=true">Поиск</a>';
    } else {
        echo '<a href="?">Закрыть поиск</a>';
    }
    if (!isset($_GET['search_category'])) {
        echo '<a href="?search_category=true">Поиск по категориям</a>';
    } else {
        echo '<a href="?">Закрыть поиск</a>';
    }
    ?>
</div>
<?php
if (isset($_GET['search']) && $_GET['search'] == "true") {
    echo '
    <form action="" method="GET" class="search">
        <input type="text" name="query" placeholder="Введите запрос" />
        <button type="submit">Поиск</button>
    </form>
    ';
}

if (isset($_GET['search_category']) && $_GET['search_category'] == "true") {
    echo '
    <form action="" method="GET" class="search">
        <select id="first-list" name="categories">';
            foreach ($categories as $category) {
                echo '<option value="' . $category[0] . '">' . $category[1] . '</option>';
            }
    echo '
        </select>
        <select id="second-list" name="subcategories">';
            foreach ($subcategories as $subcategory) {
                echo '<option value="' . $subcategory[0] . '" data-chained="' . $subcategory[1] . '">' . $subcategory[2] . '</option>';
            }
    echo '
        </select>
        <button type="submit">Поиск</button>
    </form>
    ';
}
?>
</div>
<div class="ads">
    <?php 
        if (isset($_GET['categories']) && isset($_GET['subcategories'])) {
            $category_id = $_GET['categories'];
            $subcategories_id = $_GET['subcategories'];
            $ads = mysqli_query($connect, "SELECT * FROM ad WHERE category_id = $category_id AND subcategory_id = $subcategories_id");
            $ads = mysqli_fetch_all($ads);
            if (count($ads) >= 4) {
                require 'pagination_settings.php';
            }
            require 'all_ads_info.php';
            if (count($ads) >= 4) {
                require 'pagination.php';
            }
        } else if (isset($_GET['query']) && !isset($_GET['categories'])) {
            $ads = mysqli_query($connect, "SELECT * FROM ad WHERE name LIKE '%{$query}%'");
            $ads = mysqli_fetch_all($ads);
            if (count($ads) >= 4) {
                require 'pagination_settings.php';
            }
            require 'all_ads_info.php';
            if (count($ads) >= 4) {
                require 'pagination.php';
            }
        } else {
            require 'pagination_settings.php';
            if (isset($paginations)) {
                $ads = $paginations;
            }
            require 'all_ads_info.php';
            require 'pagination.php';
        }
    ?>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="../../jquery.chained.js?v=1.0.0" type="text/javascript" charset="utf-8"></script>
<script>
    $(document).ready(function() {
    $('#second-list').chained('#first-list');
    });
</script>
<?php 
    require_once "../../foot.php";
?>