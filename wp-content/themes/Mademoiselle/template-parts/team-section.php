<section class="section-team">
    <div class="container">
        <h1>
            Trust our professionals
        </h1>

        <div class="team-member-slider owl-carousel owl-theme">
            <?php
            $args_team = array(
                'post_type' => 'our-team',
                'posts_per_page' => -1
            );

            $team_query = new WP_Query($args_team);

            if ($team_query->have_posts()) {
                while ($team_query->have_posts()) {
                    $team_query->the_post();
                    ?>
                    <div class="team-member">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 mb-4 mb-lg-0">
                                <div class="team-member-content">
                                    <h3 class="team-member-name">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                    <div class="team-member-info">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5 mb-4 mb-lg-0 order-md-first">
                                <a href="<?php the_permalink(); ?>" class="d-block team-member-image">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('team-image');
                                    }
                                    ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
            } else {
                echo '<p>No team members found</p>';
            }
            ?>
        </div>
    </div>
</section>



<script>
    jQuery(document).ready(function ($) {
        $('.owl-carousel').owlCarousel({
            items: 1,
            loop: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000, // Promena slike svakih 5 sekundi
        });
    });
</script>