<?php

/**
 * @class FLSimplePostsModule
 */
class FLSimplePostsModule extends FLBuilderModule {

    /**
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Simple Posts', 'fl-builder'),
            'description'   => __('An example for coding new modules.', 'fl-builder'),
            'category'		=> __('Advanced Modules', 'fl-builder'),
            'dir'           => FL_SIMPLE_POSTS_DIR . 'simple-posts/',
            'url'           => FL_SIMPLE_POSTS_URL . 'simple-posts/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ));

        /**
         * Use these methods to enqueue css and js already
         * registered or to register and enqueue your own.
         */
        // Already registered
        $this->add_css('font-awesome');

        // Register and enqueue your own
        $this->add_js('example-lib', $this->url . 'js/example-lib.js', array(), '', true);
    }

    /**
     * Use this method to work with settings data before
     * it is saved. You must return the settings object.
     *
     * @method update
     * @param $settings {object}
     */
    public function update($settings)
    {
        return $settings;
    }

    /**
     * This method will be called by the builder
     * right before the module is deleted.
     *
     * @method delete
     */
    public function delete()
    {

    }

    /**
     * Add additional methods to this class for use in the
     * other module files such as preview.php, frontend.php
     * and frontend.css.php.
     *
     *
     * @method example_method
     */
    public function example_method()
    {

    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('FLSimplePostsModule', array(
    'general'       => array( // Tab
        'title'         => __('General', 'fl-builder'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => __('Post type', 'fl-builder'), // Section Title
                'fields'        => array( // Section Fields
                    'template'   => array(
                        'type'          => 'select',
                        'label'         => __('Select template', 'fl-builder'),
                        'default'       => 'normal',
                        'options'       => array(
                            'grid'      => __('grid', 'fl-builder'),
                            'normal'      => __('normal', 'fl-builder'),
                            'portfolio'      => __('portfolio', 'fl-builder'),
                        )
                    ),
                    'posts_per_page' => array(
                        'type'      => 'text',
                        'label'         => __('Posts per page', 'fl-builder'),
                    ),
                    'offset' => array(
                        'type'      => 'text',
                        'default'       => '10',
                        'label'         => __('Offset', 'fl-builder'),
                    ),
                    'heading_size'   => array(
                        'type'          => 'select',
                        'label'         => __('Heading size', 'fl-builder'),
                        'default'       => 'h2',
                        'options'       => array(
                            'h2'      => __('h2', 'fl-builder'),
                            'h3'      => __('h3', 'fl-builder'),
                        )
                    ),
                    'show_thumbnail'   => array(
                        'type'          => 'select',
                        'label'         => __('Show thumbnail', 'fl-builder'),
                        'default'       => 'no',
                        'options'       => array(
                            'yes'      => __('yes', 'fl-builder'),
                            'no'      => __('no', 'fl-builder'),
                            'custom'      => __('custom thumbnail size', 'fl-builder'),
                        ),
                        'toggle'        => array(
                            'yes'      => array(
                                'fields'        => array('thumb_size')
                            ),
                            'no'      => array()
                        )
                    ),
                    'thumb_size'   => array(
                        'type'          => 'select',
                        'label'         => __('Thumbnail size', 'fl-builder'),
                        'default'       => 'thumbnail',
                        'options'       => array(
                            'thumbnail'      => __('thumbnail', 'fl-builder'),
                            'medium'      => __('medium', 'fl-builder'),
                            'large'      => __('large', 'fl-builder'),
                        )
                    ),
                    'show_category'   => array(
                        'type'          => 'select',
                        'label'         => __('Show categories', 'fl-builder'),
                        'default'       => 'no',
                        'options'       => array(
                            'yes'      => __('yes', 'fl-builder'),
                            'no'      => __('no', 'fl-builder'),
                        )
                    ),
                    'show_date'   => array(
                        'type'          => 'select',
                        'label'         => __('Show date', 'fl-builder'),
                        'default'       => 'no',
                        'options'       => array(
                            'yes'      => __('yes', 'fl-builder'),
                            'no'      => __('no', 'fl-builder'),
                        )
                    ),
                    'show_author'   => array(
                        'type'          => 'select',
                        'label'         => __('Show author', 'fl-builder'),
                        'default'       => 'no',
                        'options'       => array(
                            'yes'      => __('yes', 'fl-builder'),
                            'no'      => __('no', 'fl-builder'),
                        )
                    ),
                    'show_excerpt'   => array(
                        'type'          => 'select',
                        'label'         => __('Show excerpt', 'fl-builder'),
                        'default'       => 'yes',
                        'options'       => array(
                            'yes'      => __('yes', 'fl-builder'),
                            'no'      => __('no', 'fl-builder'),
                        )
                    )
                )
            )
        )
    ),
    'content'   => array(
        'title'         => __('Content', 'fl-builder'),
        'file'          => FL_BUILDER_DIR . 'includes/loop-settings.php',
    )
));
