<?php
get_header();
?>

<main>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();

            // Prikaz glavne slike (lead image) stranice
            get_template_part('/template-parts/lead-section');
            ?>

            <section class="about-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-5 col-xl-8">
                            <article class="about-text">
                                <?php the_content(); // Prikaz sadržaja iz WordPress editora ?>
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

