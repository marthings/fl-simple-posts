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
            'name'          => __('Simple Posts', 'fl-simple-posts'),
            'description'   => __('A plugin to list posts with a certain template.', 'fl-simple-posts'),
            'category'		=> __('Advanced Modules', 'fl-simple-posts'),
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
        'title'         => __('General', 'fl-simple-posts'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => __('Post type', 'fl-simple-posts'), // Section Title
                'fields'        => array( // Section Fields
                    'template'   => array(
                        'type'          => 'select',
                        'label'         => __('Select template', 'fl-simple-posts'),
                        'default'       => 'normal',
                        'options'       => array(
                            'grid'      => __('grid', 'fl-simple-posts'),
                            'normal'      => __('normal', 'fl-simple-posts'),
                            'list'      => __('list', 'fl-simple-posts'),
                        ),
                        'toggle'        => array(
                            'grid'      => array(
                                'fields'        => array('grid_size')
                            ),
                            'normal'      => array(
                                'fields'        => array('normal_layout')
                            ),
                            'list'      => array(
                                'fields'        => array('list_class')
                            )
                        )
                    ),
                    'normal_layout'   => array(
                        'type'          => 'select',
                        'label'         => __('Layout', 'fl-simple-posts'),
                        'default'       => 'imageover',
                        'options'       => array(
                            'imageover'      => __('Image over heading', 'fl-simple-posts'),
                            'imageleft'      => __('Image to left', 'fl-simple-posts'),
                        ),
                        'toggle'        => array(
                            'imageleft'      => array(
                                'fields'        => array('imageleft_size', 'imageleft_contentsize')
                            )
                        )
                    ),
                    'imageleft_size' => array(
                        'type'      => 'text',
                        'label'         => __('Image size', 'fl-simple-posts'),
                        'default'   => '30',
                        'description'   => __('Width in %', 'fl-simple-posts'),
                    ),
                    'imageleft_contentsize' => array(
                        'type'      => 'text',
                        'label'         => __('Content size', 'fl-simple-posts'),
                        'default'   => '70',
                        'description'   => __('Width in %', 'fl-simple-posts'),
                    ),
                    'grid_size'   => array(
                        'type'          => 'select',
                        'label'         => __('Grid size', 'fl-simple-posts'),
                        'default'       => '4',
                        'options'       => array(
                            '6'      => __('2 columns', 'fl-simple-posts'),
                            '4'      => __('3 columns', 'fl-simple-posts'),
                            '3'      => __('4 columns', 'fl-simple-posts'),
                        )
                    ),
                    'posts_per_page' => array(
                        'type'      => 'text',
                        'label'         => __('Posts per page', 'fl-simple-posts'),
                    ),
                    'heading_size'   => array(
                        'type'          => 'select',
                        'label'         => __('Heading size', 'fl-simple-posts'),
                        'default'       => 'h2',
                        'options'       => array(
                            'h2'      => __('h2', 'fl-simple-posts'),
                            'h3'      => __('h3', 'fl-simple-posts'),
                            'none'      => __('none', 'fl-simple-posts'),
                        )
                    ),
                    'show_thumbnail'   => array(
                        'type'          => 'select',
                        'label'         => __('Show thumbnail', 'fl-simple-posts'),
                        'default'       => 'no',
                        'options'       => array(
                            'yes'      => __('yes', 'fl-simple-posts'),
                            'no'      => __('no', 'fl-simple-posts'),
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
                        'label'         => __('Thumbnail size', 'fl-simple-posts'),
                        'default'       => 'thumbnail',
                        'options'       => array(
                            'thumbnail'      => __('thumbnail', 'fl-simple-posts'),
                            'medium'      => __('medium', 'fl-simple-posts'),
                            'large'      => __('large', 'fl-simple-posts'),
                            'custom'      => __('custom', 'fl-simple-posts'),
                        ),
                        'toggle'        => array(
                            'custom'      => array(
                                'fields'        => array('custom_thumb')
                            )
                        )
                    ),
                    'custom_thumb' => array(
                        'type'      => 'text',
                        'default'       => '',
                        'label'         => __('Your size', 'fl-simple-posts'),
                    ),
                    'show_category'   => array(
                        'type'          => 'select',
                        'label'         => __('Show categories', 'fl-simple-posts'),
                        'default'       => 'no',
                        'options'       => array(
                            'yes'      => __('yes', 'fl-simple-posts'),
                            'no'      => __('no', 'fl-simple-posts'),
                        )
                    ),
                    'show_date'   => array(
                        'type'          => 'select',
                        'label'         => __('Show date', 'fl-simple-posts'),
                        'default'       => 'no',
                        'options'       => array(
                            'yes'      => __('yes', 'fl-simple-posts'),
                            'no'      => __('no', 'fl-simple-posts'),
                        )
                    ),
                    'show_author'   => array(
                        'type'          => 'select',
                        'label'         => __('Show author', 'fl-simple-posts'),
                        'default'       => 'no',
                        'options'       => array(
                            'yes'      => __('yes', 'fl-simple-posts'),
                            'no'      => __('no', 'fl-simple-posts'),
                        )
                    ),
                    'show_content'   => array(
                        'type'          => 'select',
                        'label'         => __('Show content', 'fl-simple-posts'),
                        'default'       => 'yes',
                        'options'       => array(
                            'full'      => __('full', 'fl-simple-posts'),
                            'excerpt'      => __('excerpt', 'fl-simple-posts'),
                            'nothing'      => __('nothing', 'fl-simple-posts'),
                        )
                    ),
                    'show_readmore'   => array(
                        'type'          => 'select',
                        'label'         => __('Show read more', 'fl-simple-posts'),
                        'default'       => 'yes',
                        'options'       => array(
                            'yes'      => __('yes', 'fl-simple-posts'),
                            'no'      => __('no', 'fl-simple-posts'),
                        )
                    ),
                    'list_class'   => array(
                        'type'          => 'text',
                        'label'         => __('List class', 'fl-simple-posts'),
                        'default'       => '',
                    ),
                )
            )
        )
    ),
    'content'   => array(
        'title'         => __('Content', 'fl-simple-posts'),
        'file'          => FL_BUILDER_DIR . 'includes/loop-settings.php',
    )
));
