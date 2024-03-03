<?php

/**
 * Featured Projects Block.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

?>

<section class="featured-projects-block" id="work">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="featured-projects-block__header-title">
                    <?php $featured_projects_block_header_title = get_field( 'featured_projects_block_header_title' ); ?>
	                <?php echo esc_html( $featured_projects_block_header_title ); ?>
                </div>
                <div class="featured-projects-block__header-description">
                    <?php $featured_projects_block_header_description = get_field( 'featured_projects_block_header_description' ); ?>
                    <?php echo $featured_projects_block_header_description; ?>
                </div>
            </div>
        </div>
        <?php if ( have_rows( 'featured_projects_block_projects' ) ) : ?>
            <?php while ( have_rows( 'featured_projects_block_projects' ) ) :
                the_row(); ?>
                <div class="featured-projects-block__project">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="featured-projects-block__image-frame">
                                <?php if ( get_sub_field( 'featured_projects_block_tag' ) ) : ?>
                                    <div class="featured-projects-block__tag">
                                        <?php $featured_projects_block_project_tag = get_sub_field( 'featured_projects_block_project_tag' ); ?>
                                        <?php echo esc_html( $featured_projects_block_project_tag ); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="featured-projects-block__image">
                                    <?php $featured_projects_block_project_image = get_sub_field( 'featured_projects_block_project_image' ); ?>
                                    <img src="<?php echo esc_url( $featured_projects_block_project_image['url'] ); ?>" alt="<?php echo esc_attr( $featured_projects_block_project_image['alt'] ); ?>" />
                                </div> 
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex">
                            <div class="featured-projects-block__project-info">
                                <div class="featured-projects-block__project-title">
                                    <?php $featured_projects_block_project_title = get_sub_field( 'featured_projects_block_project_title' ); ?>
                                    <?php echo esc_html( $featured_projects_block_project_title ); ?>
                                </div>
                                <div class="featured-projects-block__project-description">
                                    <?php $featured_projects_block_project_description = get_sub_field( 'featured_projects_block_project_description' ); ?>
                                    <?php echo $featured_projects_block_project_description; ?>
                                </div>
                                <div class="featured-projects-block__project-table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th><?php esc_html_e( 'Project Info', 'amirkurtagic' ); ?></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ( get_sub_field( 'featured_projects_block_client' ) ) : ?>
                                                <tr>
                                                    <td><?php esc_html_e( 'Client', 'amirkurtagic' ); ?></td>
                                                    <td>
                                                        <?php $featured_projects_block_project_client = get_sub_field( 'featured_projects_block_project_client' ); ?>
                                                        <?php echo esc_html( $featured_projects_block_project_client ); ?>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                            <tr>
                                                <td><?php esc_html_e( 'Year', 'amirkurtagic' ); ?></td>
                                                <td>
                                                    <?php $featured_projects_block_project_year = get_sub_field( 'featured_projects_block_project_year' ); ?>
                                                    <?php echo $featured_projects_block_project_year; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?php esc_html_e( 'Role', 'amirkurtagic' ); ?></td>
                                                <td>
                                                    <?php $featured_projects_block_project_role = get_sub_field( 'featured_projects_block_project_role' ); ?>
                                                    <?php echo esc_html( $featured_projects_block_project_role ); ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="featured-projects-block__project-links">
                                    <?php
                                        $link = get_sub_field( 'featured_projects_block_project_link_1' );
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a href="<?php echo esc_url( $link_url ); ?>" class="link" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?> <?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/arrow-yellow.svg"); ?></a>
                                    <?php if ( get_sub_field( 'featured_projects_block_link_2' ) ) : ?>
                                        <?php
                                            $link = get_sub_field( 'featured_projects_block_project_link_2' );
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                        <a href="<?php echo esc_url( $link_url ); ?>" class="link" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?> <?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/github-yellow.svg"); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
