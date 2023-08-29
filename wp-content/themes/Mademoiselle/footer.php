<footer class="footer-section">
    <div class="container">
        <div class="footer-content">


            <?php
            $menuLocation = get_nav_menu_locations();
            $socialMenuId = $menuLocation['social'];

            $socialMenuItems = wp_get_nav_menu_items($socialMenuId);

            // var_dump($socialMenuItems);

            if ($socialMenuItems) {
                ?>
                <nav class="social">
                    <?php
                    foreach ($socialMenuItems as $socialMenuItem) {
                        if ($socialMenuItem->menu_item_parent == 0) {
                    ?>
                    <a href="<?php echo $socialMenuItem->url ?>" class="fab fa-<?php echo strtolower($socialMenuItem->title) ?>"></a>
                    <?php
                        }
                    }
                    ?>
                </nav>
                <?php
            }
            ?>

            <!--
            <nav class="social">
                <a href="https://facebook.com" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com" class="fab fa-twitter"></a>
                <a href="https://instagram.com" class="fab fa-instagram"></a>
            </nav>
            
            -->
            <p class="copyright mb-0">
                Copyright &COPY; <?php echo date('Y') ?> <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); if($socialMenuItem->title =='Facebook'){echo '-f';} ?></a>
            </p>
        </div>
    </div>
</footer>


<?php
// include default wordpress js files
wp_footer();
?>
</body>
</html>
