
<?php
get_header();
?>

<main>
    <?php
    // Prikaz glavne slike (lead image) stranice
    get_template_part('/template-parts/lead-section');

    get_template_part('/template-parts/post-loop');
    
    get_template_part('/template-parts/pagination-info');
    ?>

</main>

<?php
get_footer();
?>