<?php

/**
 * Landing Block.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

?>

<section class="landing-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex">
                <div class="landing-block__info">
                    <div class="landing-block__title">
                        <?php $landing_block_title = get_field( 'landing_block_title' ); ?>
                        <?php echo esc_html( $landing_block_title ); ?>
                    </div>
                    <div class="landing-block__description">
                        <?php $landing_block_description = get_field( 'landing_block_description' ); ?>
                        <?php echo $landing_block_description; ?>
                    </div>
                    <div class="landing-block__links">
                        <?php
                            $link = get_field( 'landing_block_button' );
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a href="<?php echo esc_url( $link_url ); ?>" class="btn d-lg-flex d-none">
                            <?php echo esc_html( $link_title ); ?> 
                            <span class="landing-block__icon landing-block__icon-1"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/circle.svg"); ?></span>
                            <span class="landing-block__icon landing-block__icon-2 d-none"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/circle-hover.svg"); ?></span>
                        </a>
                        <a href="<?php echo esc_url( $link_url ); ?>" class="btn d-lg-none d-flex">
                            <?php echo esc_html( $link_title ); ?> 
                            <span class="landing-block__icon"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/circle-hover.svg"); ?></span>
                        </a>
                        <?php $landing_block_link_linkedin = get_field( 'landing_block_link_linkedin' ); ?>
                        <a href="<?php echo esc_url( $landing_block_link_linkedin ); ?>"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/linkedin.svg"); ?></a>
                        <?php $landing_block_link_github = get_field( 'landing_block_link_github' ); ?>
                        <a href="<?php echo esc_url( $landing_block_link_github ); ?>"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/github.svg"); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="landing-block__image">
                    <?php $landing_block_image = get_field( 'landing_block_image' ); ?>
                    <img src="<?php echo esc_url( $landing_block_image['url'] ); ?>" alt="<?php echo esc_attr( $landing_block_image['alt'] ); ?>" />
                </div>
            </div>
        </div>
    </div>
</section>
