<?php
/**
 * @package phan-wordpress-stubs
 */

/**
 */
class WP_Widget {
	/**
	 * @param string                                                                        $id_base
	 * @param string                                                                        $name
	 * @param array{classname?: string, description?: string, show_instance_in_rest?: bool} $widget_options {
	 *     @type string $classname
	 *     @type string $description
	 *     @type bool   $show_instance_in_rest
	 * }
	 * @param array{height?: int, width?: int, id_base?: int|string}                        $control_options {
	 *     @type int        $height
	 *     @type int        $width
	 *     @type int|string $id_base
	 * }
	 */
	public function __construct( $id_base, $name, $widget_options = array(), $control_options = array() ) {
	}

	/**
	 * @param array $args {
	 *     @type string after_title
	 *     @type string after_widget
	 *     @type string before_title
	 *     @type string before_widget
	 *     @type string class
	 *     @type string description
	 *     @type string id
	 *     @type string name
	 *     @type string widget_id
	 *     @type string widget_name
	 * }
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
	}
}
