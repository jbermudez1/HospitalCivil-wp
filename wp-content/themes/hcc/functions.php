<?php
	// activa imagenes destacadas
	add_theme_support('post-thumbnails');

// sidebar
	function sidebar_main() {
		register_sidebar(
			array (
				'id' => 'sidebar-main',
				'name' => 'servicios',
				'description' => 'Sección central de servicios'
				)
			);
	}
add_action('widgets_init', 'sidebar_main');