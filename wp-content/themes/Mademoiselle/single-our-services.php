<?php
get_header();
?>

<main>
    <section class="service-lead-section">
        <div class="container">
            <div class="row d-flex justify-content-lg-between">
                <div class="col-12 col-lg-5 mb-5 mb-lg-0">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            ?>
                            <article class="service-description">
                                <h3 class="title-description mb-5">
                                    <?php the_title(); ?>
                                </h3>
                                <div class="text-description">
                                    <?php the_content(); ?>
                                </div>
                            </article>
                            <?php
                        }
                    } else {
                        echo '<p>No content to display on this page.</p>';
                    }
                    ?>
                </div>
                <div class="col-12 col-lg-6 mb-5 mb-lg-0 order-first">
                    <figure class="image-description mb-0 d-block">
                        <?php the_post_thumbnail('blog-image'); // Display the featured image  ?>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <?php
    get_template_part('/template-parts/latest-trends-section');
    ?>


</main>

<?php
get_footer();
?>
