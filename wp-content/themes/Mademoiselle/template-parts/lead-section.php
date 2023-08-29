<?php
$leadImage = ''; // Inicijalizacija prazne varijable za featured image u "lead-section"

if (is_front_page() && get_option('page_for_posts')) {
    $leadImage = get_the_post_thumbnail_url(get_option('page_for_posts'), 'full');
} else if (is_home()) {
    // Postavite sliku za blog stranicu
    $leadImage = get_the_post_thumbnail_url(get_option('page_for_posts'), 'full');
} else {
    $leadImage = get_the_post_thumbnail_url(get_the_ID(), 'full');
}

$sectionTitle = '';

if (is_home()) {
    $sectionTitle = 'Blog';
} else if (is_page() && !is_front_page()) {
    $sectionTitle = get_the_title(); 
} else if (is_front_page()) {
    $sectionTitle = 'Welcome to Mademoiselle'; // Dodali smo naslov za početnu stranicu
}
?>

<section class="lead-home-section" style="background-image:url(<?php echo esc_url($leadImage); ?>)">
    <div class="container">
        <h2 class="home-title">
            <?php echo esc_html($sectionTitle); ?>
        </h2>
    </div>
</section>

