<?php
/*
 * Template name: Page with sidebar
 */
get_header();
?>

<main>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();

            // Prikaz glavne slike (lead image) stranice
            $leadImage = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>
            <section class="lead-home-section" style="background-image:url(<?php echo esc_url($leadImage); ?>)">
                <div class="container">
                    <h2 class="home-title">
                        <?php the_title(); ?>
                    </h2>
                </div>
            </section>

            <section class="about-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-5 col-xl-8">
                            <article class="about-text">
                                <?php the_content(); // Prikaz sadržaja iz WordPress editora ?> 
                            </article>
                        </div>

                        <div class="col-12 col-md-6 col-xl-4">
                            <aside>
                                <?php
                                get_sidebar();
                                
                                dynamic_sidebar('sidebar_2'); 
                                
                                ?>
                            </aside>
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
