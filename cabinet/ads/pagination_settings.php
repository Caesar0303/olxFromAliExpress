<?php
        $itemsPerPage = 4; // Количество элементов на одной странице
        $totalItems = count($ads); // Общее количество элементов
        $totalPages = ceil($totalItems / $itemsPerPage); // Общее количество страниц
        if ($totalPages > 0) {

        // Получение текущей страницы
        if (isset($_GET['page'])) {
            $currentPage = $_GET['page'];
        } else {
            $currentPage = 1;
        }

        // Проверка и корректировка значения текущей страницы
        if ($currentPage < 1) {
            $currentPage = 1;
        } elseif ($currentPage > $totalPages) {
            $currentPage = $totalPages;
        }

        // Вычисление смещения (offset) для текущей страницы
        $offset = ($currentPage - 1) * $itemsPerPage;

        // Запрос для получения элементов текущей страницы
        $query = "SELECT * FROM ad LIMIT $itemsPerPage OFFSET $offset";
        $result = mysqli_query($connect, $query);
        $paginations = mysqli_fetch_all($result);
        }
?>