<?php

class ThemeAssets {
	public function enqueue_assets(): void {
		add_action( "wp_enqueue_scripts", function () {
			wp_enqueue_script( "custom-jquery", get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js' );
			wp_enqueue_script( "mainjs", get_template_directory_uri() . '/assets/js/main.js', array( "custom-jquery" ) );
			if ( is_front_page( "home.php" ) ) {
				wp_enqueue_style( "home_css", get_template_directory_uri() . '/assets/css/home.css' );
			}
			wp_enqueue_style( "Libre Franklin Font", "https://fonts.googleapis.com/css2?family=Khand:wght@300;400;500;600;700&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" );
//			wp_enqueue_style( 'font-awesome-5', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), null );
		} );
	}

	public function register_menus(): void {
		add_action( "after_setup_theme", function () {
			register_nav_menus( [
				"header-menu" => "Header menu"
			] );
		} );
	}


}

$assets = new ThemeAssets();
$assets->enqueue_assets();
$assets->register_menus();
