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
                render_convincing( "Take Your Business to the Next Level Today!", "Ready to achieve measurable results and grow your online presence?", "Get Started Now", "link" );
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
                    <h2 class="offering__title">SEO Optimization</h2>
                    <p class="offering__description">We help businesses improve search engine rankings, increase organic traffic, and achieve long-term growth with our expert SEO services.</p>
                </div>
                <img class="offering__image" src="https://websitedemos.net/galatic-02/wp-content/uploads/sites/1455/2024/03/services-01.jpg">
            </div>
            <div class="offering__divider"></div>

            <div class="offering">
                <div>
                    <p class="offering__number">02</p>
                    <h2 class="offering__title">Social Media Marketing</h2>
                    <p class="offering__description">Our social media strategies engage your audience, build brand loyalty, and drive conversions across all platforms.</p>
                </div>
                <img class="offering__image" src="https://websitedemos.net/galatic-02/wp-content/uploads/sites/1455/2024/03/services-02.jpg">
            </div>
            <div class="offering__divider"></div>

            <div class="offering">
                <div>
                    <p class="offering__number">03</p>
                    <h2 class="offering__title">PPC Advertising</h2>
                    <p class="offering__description">We create and manage pay-per-click campaigns to maximize your ROI, ensuring the right audience finds your business online.</p>
                </div>
                <img class="offering__image" src="https://websitedemos.net/galatic-02/wp-content/uploads/sites/1455/2024/03/services-03.jpg">
            </div>
            <div class="offering__divider"></div>

            <div class="offering">
                <div>
                    <p class="offering__number">04</p>
                    <h2 class="offering__title">Content Marketing</h2>
                    <p class="offering__description">Our content strategies drive engagement and establish your brand as an authority in your industry by creating valuable, relevant content.</p>
                </div>
                <img class="offering__image" src="https://websitedemos.net/galatic-02/wp-content/uploads/sites/1455/2024/03/services-04.jpg">
            </div>

        </section>
		<?php
	}
}

new RenderOfferingsPage();
