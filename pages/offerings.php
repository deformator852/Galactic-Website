<?php
//Template Name:Offerings
include_once COMPONENTS_PATH . "convincing.php";
include_once COMPONENTS_PATH . "purple_background_button.php";

class RenderOfferingsPage {
	public function __construct() {
		?>
        <div id="wrapper">
			<?php get_header(); ?>
            <main class="main">
				<?php
				$this->offerings();
				render_convincing( "We Will Write a Convincing Call To Action to Engage Your Audience Here", "We will write a sub-headline that introduces your call to action to website visitors here", "Call To Action", "link" );
				?>
            </main>
			<?php get_footer(); ?>
        </div>
		<?php
	}

	public function offerings() {
		?>
        <section class="offerings">
            <div class="offering">
                <div>
                    <p class="offering__number">01</p>
                    <h2 class="offering__title">Offering 1</h2>
                    <p class="offering__description">This section will highlight specific details about your core
                        offering. We will write about what
                        your offering is and how your company uses it to help users achieve their desired goals.
                    </p>
                </div>
                <img class="offering__image"
                     src="https://websitedemos.net/galatic-02/wp-content/uploads/sites/1455/2024/03/services-01.jpg">
            </div>
            <div class="offering__divider"></div>
            <div class="offering">
                <div>
                    <p class="offering__number">02</p>
                    <h2 class="offering__title">Offering 2</h2>
                    <p class="offering__description">This section will highlight specific details about your core
                        offering. We will write about what
                        your offering is and how your company uses it to help users achieve their desired goals.
                    </p>
                </div>
                <img class="offering__image"
                     src="https://websitedemos.net/galatic-02/wp-content/uploads/sites/1455/2024/03/services-02.jpg">
            </div>
            <div class="offering__divider"></div>
            <div class="offering">
                <div>
                    <p class="offering__number">03</p>
                    <h2 class="offering__title">Offering 3</h2>
                    <p class="offering__description">This section will highlight specific details about your core
                        offering. We will write about what
                        your offering is and how your company uses it to help users achieve their desired goals.
                    </p>
                </div>
                <img class="offering__image"
                     src="https://websitedemos.net/galatic-02/wp-content/uploads/sites/1455/2024/03/services-03.jpg">
            </div>
            <div class="offering__divider"></div>
            <div class="offering">
                <div>
                    <p class="offering__number">04</p>
                    <h2 class="offering__title">Offering 4</h2>
                    <p class="offering__description">This section will highlight specific details about your core
                        offering. We will write about what
                        your offering is and how your company uses it to help users achieve their desired goals.
                    </p>
                </div>
                <img class="offering__image"
                     src="https://websitedemos.net/galatic-02/wp-content/uploads/sites/1455/2024/03/services-04.jpg">
            </div>
        </section>
		<?php
	}
}

new RenderOfferingsPage();
