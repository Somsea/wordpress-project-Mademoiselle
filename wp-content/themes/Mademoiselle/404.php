<?php get_header(); ?>

<main>
    
<section class="lead-home-section" style="background-image:url(<?php echo get_template_directory_uri() . '/frontend/asset/error.png'; ?>)">
    <div class="container">
        <h2 class="home-title">
            Oops! We can't find that page
        </h2>
        <a href="<?php echo esc_url(home_url()); ?>" class="link-title">
            Back to Home
        </a>
    </div>
</section>

</main>
<?php get_footer(); ?>
