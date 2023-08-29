<section class="pagination-info">
    <div class="container">
        <?php
        global $wp_query;
        $total_pages = $wp_query->max_num_pages;

        if ($total_pages > 1) {
            $current_page = max(1, get_query_var('paged'));

            echo '<ul class="pagination justify-content-center pagination-sm">';

            if ($current_page > 1) {
                echo '<li class="page-item">
                        <a class="page-link" href="' . get_pagenum_link($current_page - 1) . '">
                            &laquo; Previous
                        </a>
                      </li>';
            }

            for ($i = 1; $i <= $total_pages; $i++) {
                echo '<li class="page-item';
                echo ($current_page === $i) ? ' active' : '';
                echo '"><a class="page-link" href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
            }

            if ($current_page < $total_pages) {
                echo '<li class="page-item">
                        <a class="page-link" href="' . get_pagenum_link($current_page + 1) . '">
                            Next &raquo;
                        </a>
                      </li>';
            }

            echo '</ul>';
        }
        ?>
    </div>
</section>

