<?php
function render_benefit( $benefit_number, $benefit_title, $benefit_description ) {
	?>
    <div class="benefit">
        <p class="benefit__number"><?= $benefit_number ?></p>
        <h3 class="benefit__title"><?= $benefit_title ?></h3>
        <p class="benefit__description"><?= $benefit_description ?></p>
    </div>
	<?php
}