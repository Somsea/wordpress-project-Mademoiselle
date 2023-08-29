<?php
get_header();
?>

<main>

    <?php
    $term = get_queried_object();
    $categoryImage = get_field('taxonomy_image', $term);
    ?>

    <section class="blog-single">
        <div class="container">
            <div class="row justify-content-md-between">
                <div class="col-12 col-md-5 mb-5 mb-md-0">
                    <article class="blog-single-description">
                        <h3 class="blog-single-title">
                            Tag: <?php single_tag_title(); ?>
                        </h3>

                        <?php the_archive_description(' <p class="blog-single-text">', ' </p>') ?>

                    </article>
                </div>

                <div class="col-12 col-md-6">
                    <div class="category-image">
                        <?php
                        if ($categoryImage) {
                            ?>
                            <img src="<?php echo esc_url($categoryImage) ?>" alt=""/>
                            <?php
                        } else {
                            ?>
                            <img src="img/image-4.png" alt=""/>
                            <?php
                        }
                        ?>
                        <div class="image-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    get_template_part('/template-parts/post-loop');
    ?>

</main>

<?php
get_footer();
?>