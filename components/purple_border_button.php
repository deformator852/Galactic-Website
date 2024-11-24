<?php
function render_purple_border_button( $text, $link, $width = "157px", $height = "48px" ) {
	?>
    <a href="<?= $link ?>" class="purple-border-button">
        <div style="width:<?= $width ?>;height: <?= $height ?>"><?= $text ?></div>
    </a>
	<?php
}