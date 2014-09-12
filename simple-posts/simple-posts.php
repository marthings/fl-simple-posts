<?php

/**
 * @class FLMwipostsModule
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
            'dir'           => FL_MODULE_EXAMPLES_DIR . 'simple-posts/',
            'url'           => FL_MODULE_EXAMPLES_URL . 'simple-posts/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ));

        /**
         * Use these methods to enqueue css and js already
         * registered or to register and enqueue your own.
         */
        // Already registered
        $this->add_css('font-awesome');
        $this->add_js('jquery-bxslider');

        // Register and enqueue your own
        $this->add_css('example-lib', $this->url . 'css/example-lib.css');
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
        $settings->textarea_field .= ' - this text was appended in the update method.';

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
                        'label'         => __('Select post', 'fl-builder'),
                        'default'       => 'normal',
                        'options'       => array(
                            'grid'      => __('grid', 'fl-builder'),
                            'normal'      => __('normal', 'fl-builder'),
                        )
                    ),
                    'posts_per_page' => array(
                        'type'      => 'text',
                        'label'         => __('Posts per page', 'fl-builder'),
                    )
                )
            )
        )
    ),
    'include'       => array( // Tab
        'title'         => __('Include', 'fl-builder'), // Tab title
        'file'          => FL_MODULE_EXAMPLES_DIR . 'simple-posts/includes/settings-example.php'
    ),
    'content'   => array(
        'title'         => __('Content', 'fl-builder'),
        'file'          => FL_BUILDER_DIR . 'includes/loop-settings.php',
    )
));
