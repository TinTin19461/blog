<?php
/**
 * Radio image custom control for Blogistic
 * 
 * @package Blogistic
 * @since 1.0.0
 */

 class Blogistic_WP_Radio_Image_Control extends WP_Customize_control {
    /**
     * The type of customize control being rendered
     * 
     * @since 1.0.0
     * @access public
     * @var string
     */
    public $type = 'radio-image';
    public $tab = 'general';

    /**
     * Loads the jQuery UI button script and custom scripts/styles
     * 
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function enqueue() {
        wp_enqueue_style( 'blogistic-radio-image-css', get_template_directory_uri() . '/inc/customizer/custom-controls/radio-image/radio-image.css', [], BLOGISTIC_VERSION, 'all' );
        wp_enqueue_script( 'jquery-ui-button' );
        wp_enqueue_script( 'blogistic-radio-image-js', get_template_directory_uri() . '/inc/customizer/custom-controls/radio-image/radio-image.js', ['jquery'], BLOGISTIC_VERSION, true );
    }

      /**
     * Add custom JSON parameters to use in the JS template.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function to_json() {
        parent::to_json();

        // We need to make sure we have the correct image URL.
        foreach ( $this->choices as $value => $args )
            $this->choices[ $value ]['url'] = esc_url( sprintf( $args['url'], get_template_directory_uri(), get_stylesheet_directory_uri() ) );
            $this->json['choices'] = $this->choices;
            $this->json['link']    = $this->get_link();
            $this->json['value']   = $this->value();
            $this->json['id']      = $this->id;
            if( $this->tab ) {
                $this->json['tab'] = $this->tab;
            }
    }

    /**
     * Underscrore JS template to handle the control's output
     * 
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function content_template() { ?>
        <# if ( ! data.choices ) {
            return;
        } #>

        <# if ( data.label ) { #>
            <span class="customize-control-title">{{ data.label }}</span>
        <# } #>

        <# if ( data.description ) { #>
            <span class="description customize-control-description">{{{ data.description }}}</span>
        <# } #>

        <div class="buttonset">
            <# for ( key in data.choices ) { #>
                <input type="radio" value="{{ key }}" name="_customize-{{ data.type }}-{{ data.id }}" id="{{ data.id }}-{{ key }}" {{{ data.link }}} <# if ( key === data.value ) { #> checked="checked" <# } #> />

                <label for="{{ data.id }}-{{ key }}">
                    <span class="screen-reader-text">{{ data.choices[ key ]['label'] }}</span>
                    <span class="blogistic-tooltip-text">{{ data.choices[ key ]['label'] }}</span>
                    <img src="{{ data.choices[ key ]['url'] }}" alt="{{ data.choices[ key ]['label'] }}" />
                </label>
            <# } #>

        </div><!-- .buttonset -->
    <?php }
 }