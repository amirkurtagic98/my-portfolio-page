<?php

/**
 * About Block.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

?>

<section class="about-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="about-block__header">
                    <?php $about_block_header = get_field( 'about_block_header' ); ?>
	                <?php echo esc_html( $about_block_header ); ?>
                </div>
            </div>
            <div class="col-lg-7 offset-lg-1">
                <div class="about-block__title">
                    <?php $about_block_title = get_field( 'about_block_title' ); ?>
                    <?php echo esc_html( $about_block_title ); ?>
                </div>
                <div class="about-block__description">
                    <?php $about_block_description = get_field( 'about_block_description' ); ?>
	                <?php echo $about_block_description; ?>
                </div>
                <div class="about-block__links">
                    <?php
                        $link = get_field( 'about_block_button' );
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url( $link_url ); ?>" class="btn d-lg-flex d-none">
                        <?php echo esc_html( $link_title ); ?>
                        <span class="about-block__icon about-block__icon-1"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/circle.svg"); ?></span>
                        <span class="about-block__icon about-block__icon-2 d-none"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/circle-download.svg"); ?></span>
                    </a>
                    <a href="<?php echo esc_url( $link_url ); ?>" class="btn d-lg-none d-flex">
                        <?php echo esc_html( $link_title ); ?>
                        <span class="landing-block__icon"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/circle-download.svg"); ?></span>
                    </a>
                    <?php $about_block_link_linkedin = get_field( 'about_block_link_linkedin' ); ?>
                    <a href="<?php echo esc_url( $about_block_link_linkedin ); ?>"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/linkedin.svg"); ?></a>
                    <?php $about_block_link_github = get_field( 'about_block_link_github' ); ?>
                    <a href="<?php echo esc_url( $about_block_link_github ); ?>"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/github.svg"); ?></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="about-block__image">
                    <?php $about_block_image = get_field( 'about_block_image' ); ?>
                    <img src="<?php echo esc_url( $about_block_image['url'] ); ?>" alt="<?php echo esc_attr( $about_block_image['alt'] ); ?>">
                </div>
            </div>
        </div>
    </div>
</section>
