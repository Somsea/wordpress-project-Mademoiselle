
    <section class="latest-trends">
        <div class="container">
            <h1>
                Stay Up with the Latest Beauty Trends
            </h1>
            <div class="row">
                <?php
                $latest_trends_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $latest_trends_query = new WP_Query($latest_trends_args);

                if ($latest_trends_query->have_posts()) {
                    while ($latest_trends_query->have_posts()) {
                        $latest_trends_query->the_post();
                        ?>
                        <div class="col-12 col-sm-6 col-lg-4 mb-lg-0">
                            <article class="content-section">
                                <a href="<?php the_permalink(); ?>" class="content-image mb-5 d-block">
                                    <?php the_post_thumbnail('blog-list'); ?>
                                </a>
                                <div class="trend-info">
                                    <p class="trend-date"><?php echo get_the_date('m/d/Y'); ?></p>
                                    <h2 class="trend-title text-center">
                                        <a href="<?php the_permalink(); ?>" class="d-block"><?php the_title(); ?></a>
                                    </h2>
                                </div>
                            </article>
                        </div>
                        <?php
                    }

                    wp_reset_postdata();
                } else {
                    echo '<p>No trends found.</p>';
                }
                ?>
            </div> 
    </section> <!-- latest trends done -->
