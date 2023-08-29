<section class='service-home'>
    <div class='container'>
        <?php
        $args = array(
            'post_type' => 'our-services',
            'posts_per_page' => -1,
        );
        $services_query = new WP_Query($args);

        if ($services_query->have_posts()) {
            while ($services_query->have_posts()) {
                $services_query->the_post();
                ?>
                <article class='service-product'>
                    <div class='row no-gutters'>
                        <div class='col-12 col-md-6' style="background-color: #ECD9D9">
                            <div class='product-content'>
                                <h2 class='service-title'>
                                    <?php the_title(); ?>
                                </h2>
                                <a href="<?php the_permalink(); ?>" class="service-link">
                                    Learn more
                                </a>
                            </div>
                        </div>
                        <div class='col-12 col-md-6'>
                            <figure class="service-image mb-0">
                                <?php the_post_thumbnail('blog-image'); ?>
                            </figure>
                        </div>
                    </div>
                </article>
                <?php
            }
        }
        
        wp_reset_postdata();
        
        ?>
    </div>
</section>
