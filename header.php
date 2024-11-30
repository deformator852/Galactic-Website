<?php
include_once "components/purple_border_button.php";
include_once "components/scroller.php";
?>
    <!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( "charset" ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head() ?>
    </head>
<body>
<header class="header">
    <div class="site-title">
        <a href="<?= home_url(); ?>"><?php bloginfo( "name" ); ?></a>
    </div>
    <menu>
		<?php wp_nav_menu( [
			"menu"       => "Header menu",
			"container"  => "menu",
			"menu_class" => "header__menu"
		] ); ?>
    </menu>
	<?php
	render_purple_border_button( "Free Strategy", "#" );
	?>
</header>
<?php render_top_scroller(); ?>