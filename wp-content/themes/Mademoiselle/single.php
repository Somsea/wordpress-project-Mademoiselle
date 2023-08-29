
<?php
get_header();
?>

<main>

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <section class="blog-single">
                <div class="container">
                    <p class="blog-single-info">
                        <a href="#" class="bold">
                            <?php
                            $blogCategories = get_the_category(get_the_ID());
                            foreach ($blogCategories as $blogCategorie) {
                                ?>
                                <a href="<?php echo get_category_link($blogCategorie->term_id); ?>" class="bold"><?php echo $blogCategorie->name; ?> </a>
                                <?php
                            }
                            ?>
                            <span class="separator"> | </span> 
                            <span class="italic"><?php echo get_the_date('m.d.Y'); ?></span>
                    </p>
                    <div class="row justify-content-md-between">
                        <div class="col-12 col-md-5 mb-5 mb-md-0">
                            <article class="blog-single-description">
                                <h3 class="blog-single-title">
                                    <?php the_title(); ?>
                                </h3>
                                <p class="blog-single-text">
                                    <?php the_excerpt(); ?>
                                </p>
                            </article>
                        </div>

                        <div class="col-12 col-md-6">
                            <figure>
                                <?php the_post_thumbnail('blog-image') ?>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

            <section class="blog-single-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10 col-xl-8">
                            <article>
                                <?php the_content(); ?> 
                            </article>
                            <article class="blog-tags">
                                <p>
                                    Tags:
                                </p>
                                <div class="tags">

                                    <?php
                                    $blogTags = get_the_tags(get_the_ID());
                                    foreach ($blogTags as $blogTag) {
                                        ?>
                                        <a href="<?php echo get_tag_link($blogTag->term_id); ?>">
                                            <?php echo $blogTag->name ?>
                                        </a>
                                        <?php
                                    }
                                    ?>

                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        }
    }
    ?>
</main>

<?php
get_footer();
?>
