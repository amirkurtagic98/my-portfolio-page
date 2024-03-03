<?php

/**
 * My Capabilities Block.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

?>

<section class="my-capabilities-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="my-capabilities-block__title">
                    <?php $my_capabilities_block_title = get_field( 'my_capabilities_block_title' ); ?>
                    <?php echo esc_html( $my_capabilities_block_title ); ?>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-2">
                <div class="my-capabilities-block__description">
                    <?php $my_capabilities_block_description = get_field( 'my_capabilities_block_description' ); ?>
                    <?php echo $my_capabilities_block_description; ?>
                </div>
                <?php if ( have_rows( 'my_capabilities_block_tags' ) ) : ?>
                    <div class="my-capabilities-block__tags">
	                    <?php while ( have_rows( 'my_capabilities_block_tags' ) ) :
		                    the_row(); ?>
                            <div class="my-capabilities-block__tag">
                                <?php $my_capabilities_block_tag = get_sub_field( 'my_capabilities_block_tag' ); ?>
                                <?php echo esc_html( $my_capabilities_block_tag ); ?>
                            </div>
	                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
