
    <?php
    if (have_posts()) {
        ?>
        <section class="blog-section">
            <div class="container">
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
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>
        <?php
    } else {
        ?>
        <section class="blog-section">
            <div class="container">
                <div class="jumbotron">
                    <h3>There are no posts to show</h3>
                </div>
            </div>
        </section>
        <?php
    }
    ?>
