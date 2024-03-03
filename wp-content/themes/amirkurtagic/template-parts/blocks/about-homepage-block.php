<?php

/**
 * About Homepage Block.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

?>

<section class="about-homepage-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="about-homepage-block__header">
                    <?php $about_homepage_block_header = get_field( 'about_homepage_block_header' ); ?>
                    <?php echo esc_html( $about_homepage_block_header ); ?>
                </div>
            </div>
            <div class="col-lg-7 offset-lg-1">
                <div class="about-homepage-block__title">
                    <?php $about_homepage_block_title = get_field( 'about_homepage_block_title' ); ?>
                    <?php echo esc_html( $about_homepage_block_title ); ?>
                </div>
                <div class="about-homepage-block__description">
                    <?php $about_homepage_block_description = get_field( 'about_homepage_block_description' ); ?>
                    <?php echo $about_homepage_block_description; ?>
                </div>
                <div class="about-homepage-block__link">
                    <?php
                        $link = get_field( 'about_homepage_block_link' );
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                </div>
                <div class="about-homepage-block__image d-lg-none d-md-none d-sm-none d-block">
                    <?php $about_homepage_block_image = get_field( 'about_homepage_block_image' ); ?>
	                <img src="<?php echo esc_url( $about_homepage_block_image['url'] ); ?>" alt="<?php echo esc_attr( $about_homepage_block_image['alt'] ); ?>" />
                </div>
            </div>
        </div>
    </div>
</section>
