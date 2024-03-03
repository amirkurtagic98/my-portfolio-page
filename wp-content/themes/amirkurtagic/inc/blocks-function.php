<?php
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types(){
    // Check function exists.
    if (function_exists('acf_register_block_type')) {
        // register a About block
        acf_register_block_type(array(
            'name'              => 'About Block',
            'title'             => __('About'),
            'description'       => __('A custom about block.'),
            'render_template'   => 'template-parts/blocks/about-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('home', 'quote'),
        ));

        // register a About homepage block
        acf_register_block_type(array(
            'name'              => 'About Homepage Block',
            'title'             => __('About Homepage'),
            'description'       => __('A custom about homepage block.'),
            'render_template'   => 'template-parts/blocks/about-homepage-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('home', 'quote'),
        ));

        // register a Contact block
        acf_register_block_type(array(
            'name'              => 'Contact Block',
            'title'             => __('Contact'),
            'description'       => __('A custom contact block.'),
            'render_template'   => 'template-parts/blocks/contact-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('home', 'quote'),
        ));

        // register a Featured projects block
        acf_register_block_type(array(
            'name'              => 'Featured projects Block',
            'title'             => __('Featured projects'),
            'description'       => __('A custom featured projects block.'),
            'render_template'   => 'template-parts/blocks/featured-projects-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('home', 'quote'),
        ));

        // register a Landing block
        acf_register_block_type(array(
            'name'              => 'Landing Block',
            'title'             => __('Landing'),
            'description'       => __('A custom landing block.'),
            'render_template'   => 'template-parts/blocks/landing-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('home', 'quote'),
        ));

        // register a My capabilities block
        acf_register_block_type(array(
            'name'              => 'My capabilities Block',
            'title'             => __('My capabilities'),
            'description'       => __('A custom my capabilities block.'),
            'render_template'   => 'template-parts/blocks/my-capabilities-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('home', 'quote'),
        ));

        // register a My experience block
        acf_register_block_type(array(
            'name'              => 'My experience Block',
            'title'             => __('My experience'),
            'description'       => __('A custom my experience block.'),
            'render_template'   => 'template-parts/blocks/my-experience-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('home', 'quote'),
        ));
    }
}
