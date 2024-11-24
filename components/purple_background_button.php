<?php
function render_purple_background_button( $text, $link, $width = "168px", $height = "52px" ) {
	?>
    <a href="<?= $link ?>" class="purple-background-button">
        <div style="width:<?= $width ?>;height: <?= $height ?>"><?= $text ?></div>
    </a>
	<?php
}