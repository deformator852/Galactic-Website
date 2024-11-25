<?php
function render_convincing( $title, $description, $button_text, $link ) {
	?>
    <section class="convincing">
        <div class="convincing__content">
            <h2><?= $title ?></h2>
            <p><?= $description ?></p>
			<?php render_purple_background_button( $button_text, $link ); ?>
        </div>
    </section>
	<?php
}