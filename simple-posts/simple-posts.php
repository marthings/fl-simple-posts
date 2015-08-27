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
        // $this->add_js( 'minigrid', $this->url . 'js/minigrid.js', array(), '', true ); 
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
                                'fields'        => array('grid_size','grid_gutter','grid_spacing')
                            ),
                            'normal'      => array(
                                'fields'        => array('normal_layout','imageleft_size','imageleft_contentsize')
                            ),
                            'list'      => array(
                                'fields'        => array('list_class','list_icon','list_spacing')
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
                    'grid_size_xs'   => array(
                        'type'          => 'select',
                        'label'         => __('Grid size extra small screens', 'fl-simple-posts'),
                        'default'       => '4',
                        'options'       => array(
                            '6'      => __('2 columns', 'fl-simple-posts'),
                            '4'      => __('3 columns', 'fl-simple-posts'),
                            '3'      => __('4 columns', 'fl-simple-posts'),
                        )
                    ),
                    'grid_size_sm'   => array(
                        'type'          => 'select',
                        'label'         => __('Grid size small screens', 'fl-simple-posts'),
                        'default'       => '4',
                        'options'       => array(
                            '6'      => __('2 columns', 'fl-simple-posts'),
                            '4'      => __('3 columns', 'fl-simple-posts'),
                            '3'      => __('4 columns', 'fl-simple-posts'),
                        )
                    ),
                    'grid_size_md'   => array(
                        'type'          => 'select',
                        'label'         => __('Grid size medium screens', 'fl-simple-posts'),
                        'default'       => '4',
                        'options'       => array(
                            '6'      => __('2 columns', 'fl-simple-posts'),
                            '4'      => __('3 columns', 'fl-simple-posts'),
                            '3'      => __('4 columns', 'fl-simple-posts'),
                        )
                    ),
                    'grid_spacing' => array(
                        'type'      => 'text',
                        'label'         => __('Grid spacing', 'fl-simple-posts'),
                        'default'   => '30',
                        'description'   => __('Spacing below posts', 'fl-simple-posts'),
                    ),
                    'posts_per_page' => array(
                        'type'      => 'text',
                        'label'         => __('Posts per page', 'fl-simple-posts'),
                    ),
                    'show_heading'   => array(
                        'type'          => 'select',
                        'label'         => __('Show heading', 'fl-simple-posts'),
                        'default'       => 'no',
                        'options'       => array(
                            'yes'      => __('yes', 'fl-simple-posts'),
                            'no'      => __('no', 'fl-simple-posts'),
                        ),
                        'toggle'        => array(
                            'yes'      => array(
                                'fields'        => array('heading_size')
                            )
                        )
                    ),
                    'heading_size'   => array(
                        'type'          => 'select',
                        'label'         => __('Heading size', 'fl-simple-posts'),
                        'default'       => 'h2',
                        'options'       => array(
                            'h2'      => __('h2', 'fl-simple-posts'),
                            'h3'      => __('h3', 'fl-simple-posts'),
                            'p'      => __('Paragraph', 'fl-simple-posts'),
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
                                'fields'        => array('thumb_size','thumb_spacing')
                            ),
                            'no'      => array()
                        )
                    ),
                    'thumb_size' => array(
                        'type'          => 'photo-sizes',
                        'label'         => __('Photo Sizes', 'fl-builder'),
                        'default'       => 'medium'
                    ),
                    'thumb_spacing' => array(
                        'type'      => 'text',
                        'default'   => '10px',
                        'size'      => '2',
                        'label'         => __('Thumb spacing bottom', 'fl-simple-posts'),
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
                    'list_icon' => array(
                        'type'          => 'icon',
                        'label'         => __( 'List icon', 'fl-builder' ),
                        'show_remove'   => true
                    ),
                    'list_spacing' => array(
                        'type'  => 'text',
                        'label' => __('List spacing', 'fl-simple-posts'),
                        'size'  => '3',
                        'description' => 'Padding in px',
                    ),
                )
            )
        )
    ),
    'content'   => array(
        'title'         => __('Content', 'fl-simple-posts'),
        'file'          => FL_BUILDER_DIR . 'includes/loop-settings.php',
    ),
    'styling'   => array(
        'title'         => __('Post styling', 'fl-simple-posts'),
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => __('Post styling', 'fl-simple-posts'), // Section Title
                'fields'        => array( // Section Fields
                  'border_size' => array(
                    'type'  => 'text',
                    'label' => __('Border width', 'fl-simple-posts'),
                    'description' => 'px',
                    'size'  => '3',
                    'default' => '0',
                  ),
                  'border_color' => array(
                    'type'  => 'color',
                    'label' => __('Border color', 'fl-simple-posts'),
                    'size'  => '3',
                  ),
                  'box_shadow_settings' => array(
                    'type'  => 'text',
                    'label' => __('Box shadow settings', 'fl-simple-posts'),
                    'default' => '0px 0px 0px 0px',
                    'placeholder' => __('0px 1px 3px 0px', 'fl-simple-posts'),
                    'description' => __('Example format', 'fl-simple-posts'),
                  ),
                  'box_shadow' => array(
                    'type'  => 'color',
                    'label' => __('Box shadow', 'fl-simple-posts'),
                    'size'  => '3',
                    'show_reset'  => true,
                  ),
                  'border_radius' => array(
                    'type'  => 'text',
                    'label' => __('Border radius', 'fl-simple-posts'),
                    'size'  => '3',
                    'description' => 'px',
                    'default' => '0',
                  ),
                  'background_color' => array(
                    'type'  => 'color',
                    'label' => __('Background color', 'fl-simple-posts'),
                    'size'  => '3',
                    'default' => 'transparent',
                  ),
                )
              ),
              'padding'       => array( // Section
                  'title'         => __('Padding', 'fl-simple-posts'), // Section Title
                  'fields'        => array( // Section Fields
                    'block_padding_content' => array(
                      'type'  => 'text',
                      'label' => __('Padding content', 'fl-simple-posts'),
                      'size'  => '4',
                      'placeholder' => '0',
                      'default' => '0',
                    ),
                    'block_padding_top' => array(
                      'type'  => 'text',
                      'label' => __('Padding top', 'fl-simple-posts'),
                      'size'  => '4',
                      'placeholder' => '0',
                      'default' => '0',
                    ),
                    'block_padding_bottom' => array(
                      'type'  => 'text',
                      'label' => __('Padding bottom', 'fl-simple-posts'),
                      'size'  => '4',
                      'placeholder' => '0',
                      'default' => '0',
                    ),
                    'block_padding_left' => array(
                      'type'  => 'text',
                      'label' => __('Padding left', 'fl-simple-posts'),
                      'size'  => '4',
                      'placeholder' => '0',
                      'default' => '0',
                    ),
                    'block_padding_right' => array(
                      'type'  => 'text',
                      'label' => __('Padding right', 'fl-simple-posts'),
                      'size'  => '4',
                      'placeholder' => '0',
                      'default' => '0',
                    ),
                  )
                ),
                'margin'       => array( // Section
                    'title'         => __('Margin', 'fl-simple-posts'), // Section Title
                    'fields'        => array( // Section Fields
                      'block_margin_top' => array(
                        'type'  => 'text',
                        'label' => __('Margin top', 'fl-simple-posts'),
                        'size'  => '4',
                        'placeholder' => '0',
                        'default' => '0',
                      ),
                      'block_margin_bottom' => array(
                        'type'  => 'text',
                        'label' => __('Margin bottom', 'fl-simple-posts'),
                        'size'  => '4',
                        'placeholder' => '0',
                        'default' => '0',
                      ),
                      'block_margin_left' => array(
                        'type'  => 'text',
                        'label' => __('Margin left', 'fl-simple-posts'),
                        'size'  => '4',
                        'placeholder' => '0',
                        'default' => '0',
                      ),
                      'block_margin_right' => array(
                        'type'  => 'text',
                        'label' => __('Margin right', 'fl-simple-posts'),
                        'size'  => '4',
                        'placeholder' => '0',
                        'default' => '0',
                      ),
                    )
                  )
            )
    ),
));
