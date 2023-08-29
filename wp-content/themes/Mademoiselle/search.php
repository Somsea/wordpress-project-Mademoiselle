<?php
get_header();
?>

<main>
    <section class="blog-single">
        <div class="container">
            <div class="row justify-content-md-between">
                <div class="col-12 col-md-5 mb-5 mb-md-0">
                    <article class="blog-single-description">
                        <h3 class="blog-single-title">
                            Search results for: <?php echo get_search_query(); ?>
                        </h3>
                    </article>
                </div>
                <div class="col-12 col-md-6">
                    <figure>
                        <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2023/08/image-5.png" alt=""/>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class='search-section'>
        <div class='container'>
            <div class='row'>
                <div class='col-12 col-md-8'>
                    <?php if (have_posts()) { ?>
                        <section class="blog-section">
                            <div class="container-fluid">
                                <div class="row">
                                    <?php
                                    while (have_posts()) {
                                        the_post();
                                        ?>
                                        <div class="col-12 col-xm-6 col-md-4">
                                            <article class="blog-article">
                                                <a href="<?php the_permalink(); ?>" class="content-image mb-5 d-block">
                                                    <?php the_post_thumbnail('blog-list'); ?>
                                                </a>
                                                <div class="trend-info">
                                                    <p class="trend-date"><?php echo get_the_date('m/d/Y'); ?></p>
                                                    <h2 class="trend-title text-center">
                                                        <a href="<?php the_permalink(); ?>" class="d-block">
                                                            <?php the_title(); ?>
                                                        </a>
                                                    </h2>
                                                </div>
                                            </article>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </section>
                    <?php } else { ?>
                        <section class="blog-section">
                            <div class="container-fluid">
                                <div class="jumbotron">
                                    <h3>There are no posts to show</h3>
                                </div>
                            </div>
                        </section>
                    <?php } ?>
                </div>

            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
