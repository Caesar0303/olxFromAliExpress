<div class="pagination">
    <?php
        $pageBack = $_GET['page']-1; 
        $pageForward =  $_GET['page']+1;
        if ($totalPages > 0) {
            if ($totalPages > 8) {
                if ($currentPage < 4) {
                    echo '<a ';
                    if ($_GET['page'] <= 0 + 1) {
                        echo 'class = nonactive ';
                        $pageBack = 0;
                    }
                    echo 'href="all_ads.php?page='."$pageBack".'"';
                    echo '>Назад</a>';
                    
                    for ($i = 1; $i <= 4; $i++) {
                        echo '<a href="all_ads.php?page=' . $i . '"';
                        if ($i == $currentPage) {
                            echo 'class=active';
                        }
                        echo '>' . $i . '</a>';
                    }
                    echo "...";
                    echo '<a href="all_ads.php?page='."$totalPages".'">'."$totalPages".'</a>';
                    echo '<a ';
                    if ($_GET['page'] > $totalPages - 1) {
                        echo 'class = nonactive ';
                        $pageForward = 0;
                    }
                    echo 'href="all_ads.php?page='."$pageForward".'"';
                    echo '>Вперед</a>';
                    } elseif ($currentPage > $totalPages - 4) {
                        echo '<a ';
                        if ($_GET['page'] <= 0 + 1) {
                            echo 'class = nonactive ';
                            $pageBack = 0;
                        }
                        echo 'href="all_ads.php?page='."$pageBack".'"';
                        echo '>Назад</a>';
                    
                        echo '<a href="all_ads.php?page='."1".'">'."1".'</a>';
                        echo "...";
                        for ($i = $totalPages - 4; $i <= $totalPages; $i++) {
                            echo '<a href="all_ads.php?page=' .$i. '"';
                            if ($i == $currentPage) {
                                echo ' class="active"';
                            }
                            echo '>' . $i . '</a>';
                        }
                        echo '<a ';
                        if ($_GET['page'] > $totalPages - 1) {
                            echo 'class = nonactive ';
                            $pageForward = 0;
                        }
                        echo 'href="all_ads.php?page='."$pageForward".'"';
                        echo '>Вперед</a>';
                    } 
                elseif ($currentPage >= 4 && $currentPage <= $totalPages - 4) {
                    echo '<a ';
                    if ($_GET['page'] <= 0 + 1) {
                        echo 'class = nonactive ';
                        $pageBack = 0;
                    }
                    echo 'href="all_ads.php?page='."$pageBack".'"';
                    echo '>Назад</a>';
                
                    echo '<a href="all_ads.php?page=1"';
                    echo '>1</a>';
                    echo '...';
                    echo '<a href="all_ads.php?page=' . ($currentPage - 1) . '"';
                    echo '>' . ($currentPage - 1) . '</a>';
                    echo '<a href="all_ads.php?page=' . $currentPage . '"';
                        echo 'class=active';
                    echo '>' . $currentPage . '</a>';
                    echo '<a href="all_ads.php?page=' . ($currentPage + 1) . '"';
                    echo '>' . ($currentPage + 1) . '</a>';
                    echo '...';
                    echo '<a href="all_ads.php?page=' . $totalPages . '"';
                    echo '>'. $totalPages .'</a>';

                    echo '<a ';
                    if ($_GET['page'] > $totalPages - 1) {
                        echo 'class = nonactive ';
                        $pageForward = 0;
                    }
                    echo 'href="all_ads.php?page='."$pageForward".'"';
                    echo '>Вперед</a>';
                }
            } elseif($totalPages <= 8) {
                $pageBack = $_GET['page']-1; 
                $pageForward =  $_GET['page']+1;
                echo '<a ';
                if ($_GET['page'] <= 0 + 1) {
                    echo 'class = nonactive ';
                    $pageBack = 0;
                }
                echo 'href="all_ads.php?page='."$pageBack".'"';
                echo '>Назад</a>';
                for ($i = 1; $i <= $totalPages; $i++) {
                    echo '<a href="all_ads.php?page=' . $i . '"';
                    if ($i == $currentPage) {
                        echo 'class=active';
                    }
                    echo '>' . $i . '</a>';
                }
                echo '<a ';
                if ($_GET['page'] > $totalPages - 1) {
                    echo 'class = nonactive ';
                    $pageForward = 0;
                }
                echo 'href="all_ads.php?page='."$pageForward".'"';
                echo '>Вперед</a>';
            }
        }
    ?>
</div>