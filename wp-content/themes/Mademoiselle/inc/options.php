<?php

// Dodavanje menija sa opcijama
function mademoiselle_option_page() {
    add_menu_page(
       'Mademoiselle Options', // Naziv na meniju
        'Mademoiselle Options', // Naziv menija
        'manage_options', // Dozvola za pristup
        'mademoiselle_options', // Slug stranice
        'mademoiselle_contact_data', // Funkcija za prikaz sadržaja
        'dashicons-admin-users', // Ikona menija
        20 // Pozicija menija
    );
}
add_action('admin_menu', 'mademoiselle_option_page');

// Registrovanje postavki za kontakt podatke
function mademoiselle_contact_settings() {
    register_setting('mademoiselle_contact_data', 'mademoiselle_contact_address');
    register_setting('mademoiselle_contact_data', 'mademoiselle_contact_mobile');
    register_setting('mademoiselle_contact_data', 'mademoiselle_contact_email');
}
add_action('admin_init', 'mademoiselle_contact_settings');

// Prikazivanje forme za unos podataka
function mademoiselle_contact_data() {
    ?>
    <div class="wrap">
        <h2>Mademoiselle Contact Data</h2>
        <form method="post" action="options.php">
            <?php settings_fields('mademoiselle_contact_data'); ?>
            <?php do_settings_sections('mademoiselle_contact_data'); ?>
            <table class="form-table">
               <tr>
                    <th>Address</th>
                    <td><input type="text" name="mademoiselle_contact_address" value="<?php echo esc_attr(get_option('mademoiselle_contact_address')); ?>"></td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td><input type="text" name="mademoiselle_contact_mobile" value="<?php echo esc_attr(get_option('mademoiselle_contact_mobile')); ?>"></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><input type="text" name="mademoiselle_contact_email" value="<?php echo esc_attr(get_option('mademoiselle_contact_email')); ?>"></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

?>
