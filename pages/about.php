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
                render_convincing( "Take Your Business to the Next Level Today!", "Ready to achieve measurable results and grow your online presence?", "Get Started Now", "link" );
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
                <p>At Galactic, we help businesses achieve growth with customized strategies. From increasing local visibility for small businesses to refining digital strategies for large brands, our approach delivers measurable success.</p>
            </div>
            <div class="introduction-to-business__instructions">
                <div class="introduction-to-business__instruction">
                    With a focus on client success, we've helped small businesses grow locally and assisted larger brands in refining their online presence. Our services, from SEO to social media marketing, are designed to meet the unique needs of each client, ensuring they achieve their goals and stand out in a competitive digital landscape.
                </div>
                <div class="introduction-to-business__instruction">
                    We deliver customized marketing solutions that help businesses, whether small or large, reach their goals. Our approach, including SEO and social media strategies, is built to drive measurable results and elevate your brand in the digital space.
                </div>

            </div>
            <img class="introduction-to-business__image"
                 src="https://websitedemos.net/galatic-02/wp-content/uploads/sites/1455/2024/03/features.jpg">
            <div class="introduction-to-business__benefits">
              <?php render_benefit( "01", "Tailored Strategies", "We design customized marketing plans to address your business’s unique goals and challenges, ensuring maximum impact and relevance." ); ?>
              <?php render_benefit( "02", "Proven Results", "With a data-driven approach, we’ve consistently delivered measurable outcomes, from increased website traffic to higher conversion rates." ); ?>
              <?php render_benefit( "03", "Expert Support", "Our team of seasoned professionals provides guidance and solutions tailored to your evolving needs, offering full support throughout your journey." ); ?>
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
                        <p>Our vision is to help businesses succeed in the digital world by offering innovative marketing strategies. We strive to be a trusted partner, enabling long-term growth and enhancing online presence in a dynamic digital landscape.</p>
                    </div>
                </div>
                <div class="company-goals__divider"></div>
                <div class="company-goals__mission">
                    <div><h3>Our Mission</h3></div>
                    <div>
                        <p>Our mission is to drive digital growth for businesses by delivering innovative marketing solutions. We value long-term success, transparency, and strong client relationships in an ever-evolving digital world.</p>                    </div>
                </div>
            </div>
        </section>
		<?php
	}
}

new RenderAboutPage();