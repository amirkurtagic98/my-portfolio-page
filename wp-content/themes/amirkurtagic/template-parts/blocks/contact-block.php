<?php

/**
 * Contact Block.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

?>

<section class="contact-block" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-right-lg-2 d-flex flex-column justify-content-between">
                <div class="contact-block__info">
                    <div class="contact-block__title">
                        <?php $contact_block_title = get_field( 'contact_block_title' ); ?>
                        <?php echo esc_html( $contact_block_title ); ?>
                    </div>
                    <div class="contact-block__description">
                        <?php $contact_block_description = get_field( 'contact_block_description' ); ?>
                        <?php echo $contact_block_description; ?>
                    </div>
                    <div class="contact-block__links">
                        <?php $contact_block_link_linkedin = get_field( 'contact_block_link_linkedin' ); ?>
                        <a href="<?php echo esc_url( $contact_block_link_linkedin ); ?>"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/linkedin-contact.svg"); ?></a>
                        <?php $contact_block_link_github = get_field( 'contact_block_link_github' ); ?>
                        <a href="<?php echo esc_url( $contact_block_link_github ); ?>"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/github-contact.svg"); ?></a>
                        <?php $contact_block_link_instagram = get_field( 'contact_block_link_instagram' ); ?>
                        <a href="<?php echo esc_url( $contact_block_link_instagram ); ?>"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/instagram-contact.svg"); ?></a>
                    </div>
                </div>
                <div class="contact-block__copyright d-lg-block d-none">
                    <?php $contact_block_copyright = get_field( 'contact_block_copyright' ); ?>
                    <?php echo esc_html( $contact_block_copyright ); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-block__form">
                    <?php echo do_shortcode('[contact-form-7 id="41c780f" title="Contact"]'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="contact-block__copyright d-lg-none d-block">
                    <?php $contact_block_copyright = get_field( 'contact_block_copyright' ); ?>
                    <?php echo esc_html( $contact_block_copyright ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
