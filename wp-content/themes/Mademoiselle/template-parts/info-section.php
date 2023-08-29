<section class="info-contact text-center">
    <div class="container">

        <?php
        $address = get_option('mademoiselle_contact_address');
        $phone = get_option('mademoiselle_contact_mobile');
        $email = get_option('mademoiselle_contact_email');
        ?>

        <?php if (!empty($address)) { ?>
            <p class="info-address">
                <?php echo esc_html($address); ?>
            </p>
        <?php } ?>

        <?php if (!empty($phone)) { ?>
            <p class="info-address">
                <a href="tel:<?php echo  esc_html($phone); ?>"><?php echo esc_html($phone); ?></a>
            </p>
        <?php } ?>

        <?php if (!empty($email)) { ?>
            <p class="info-address">
                <a href="mailto:<?php echo esc_html($email); ?>"><?php echo esc_html($email); ?></a>
            </p>
        <?php } ?>
       
    </div>
</section>
