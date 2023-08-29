<?php
/*
 * Template Name: Contact Page
 */

get_header();
?>

<main>
    <section class="contact-section position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 mb-5">
                    <?php the_content(); ?>

                </div>  
            </div>
        </div>
        <div class="image-map">
            <?php
            the_field('contact_page_map');
            ?>
        </div> 
        <?php
        get_template_part('/template-parts/info-section');
        ?>
    </section>
</main>

<?php
get_footer();
?>
 

