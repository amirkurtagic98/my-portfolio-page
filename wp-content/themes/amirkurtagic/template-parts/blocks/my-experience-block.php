<?php

/**
 * My Experience Block.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

?>

<section class="my-experience-block" id="work">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="my-experience-block__title">
                    <?php $my_experience_block_title = get_field( 'my_experience_block_title' ); ?>
                    <?php echo esc_html( $my_experience_block_title ); ?>  
                </div>
            </div>
            <div class="col-lg-6 offset-lg-2">
                <?php if ( have_rows( 'my_experience_block_job' ) ) : ?>
                    <?php while ( have_rows( 'my_experience_block_job' ) ) :
                        the_row(); ?>
                        <div class="my-experience-block__job">
                            <div class="my-experience-block__job-first">
                                <div class="my-experience-block__job-title">
                                    <?php $my_experience_block_job_title = get_sub_field( 'my_experience_block_job_title' ); ?>
                                    <?php echo esc_html( $my_experience_block_job_title ); ?>
                                </div>
                                <div class="my-experience-block__job-date">
                                    <?php $my_experience_block_job_date = get_sub_field( 'my_experience_block_job_date' ); ?>
                                    <?php echo esc_html( $my_experience_block_job_date ); ?>
                                </div>
                            </div>
                            <?php if ( get_sub_field( 'my_experience_block_company' ) ) : ?>
                                <?php
                                    $link = get_sub_field( 'my_experience_block_job_company' );
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <div class="my-experience-block__job-second">
                                    <a href="<?php echo esc_url( $link_url ); ?>" class="my-experience-block__job-company" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                </div>
                            <?php endif; ?>
                            <div class="my-experience-block__job-description">
                                <?php $my_experience_block_job_description = get_sub_field( 'my_experience_block_job_description' ); ?>
                                <?php echo $my_experience_block_job_description; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
