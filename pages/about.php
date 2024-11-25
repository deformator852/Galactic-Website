<?php
//Template Name: About
include_once COMPONENTS_PATH . "benefit.php";
include_once COMPONENTS_PATH . "convincing.php";
include_once COMPONENTS_PATH . "purple_background_button.php";

class RenderAboutPage {
	public function __construct() {
		?>
        <div id="wrapper">
			<?php get_header(); ?>
            <main class="main">
				<?php
				$this->introduction_to_business();
				$this->company_goals();
				render_convincing( "We Will Write a Convincing Call To Action to Engage Your Audience Here", "We will write a sub-headline that introduces your call to action to website visitors here", "Call To Action", "link" );
				?>
            </main>
			<?php get_footer(); ?>
        </div>
		<?php
	}

	public function introduction_to_business() {
		?>
        <section class="introduction-to-business">
            <div class="introduction-to-business__title">
                <p>For this part, we will write an additional introduction of yourself or your business. This can
                    tell
                    about how you helped clients achieve their desired results.
                </p>
            </div>
            <div class="introduction-to-business__instructions">
                <div class="introduction-to-business__instruction">For this part, we will write an additional
                    introduction of yourself or your business. This can be about your company history, success
                    stories,
                    or the product or services you offer.
                </div>
                <div class="introduction-to-business__instruction">For this part, we will write an additional
                    introduction of yourself or your business. This can be about your company history, success
                    stories,
                    or the product or services you offer. It can also tell about how you helped clients achieve
                    their
                    desired results.
                </div>
            </div>
            <img class="introduction-to-business__image"
                 src="https://websitedemos.net/galatic-02/wp-content/uploads/sites/1455/2024/03/features.jpg">
            <div class="introduction-to-business__benefits">
				<?php render_benefit( "01", "Benefit 1", "In this part, we will write about the benefits users derive from choosing your company product or services." ); ?>
				<?php render_benefit( "02", "Benefit 2", "In this part, we will write about the benefits users derive from choosing your company product or services." ); ?>
				<?php render_benefit( "03", "Benefit 3", "In this part, we will write about the benefits users derive from choosing your company product or services." ); ?>
            </div>
        </section>
		<?php
	}

	public function company_goals() {
		?>
        <section class="company-goals">
            <div class="company-goals__wrapper">
                <div class="company-goals__vision">
                    <div><h3>Our Vision</h3></div>
                    <div>
                        <p>For this section, we will tell readers about your company vision and long-term goals. We
                            will
                            describe the success you’re aiming for in a clear and concise way.
                        </p>
                    </div>
                </div>
                <div class="company-goals__divider"></div>
                <div class="company-goals__mission">
                    <div><h3>Our Mission</h3></div>
                    <div>
                        <p>For this section, we will write about your company mission. This can be about the impact you
                            aim to make and the values that drive your efforts.
                        </p>
                    </div>
                </div>
            </div>
        </section>
		<?php
	}
}

new RenderAboutPage();