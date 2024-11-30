<?php //Template Name:Home
include_once COMPONENTS_PATH . "purple_background_button.php";
include_once COMPONENTS_PATH . "learn_more.php";
include_once COMPONENTS_PATH . "benefit.php";
include_once COMPONENTS_PATH . "convincing.php";

class RenderHomePage {
	public function __construct() {
		?>
        <div id="wrapper">
			<?php get_header(); ?>
            <main class="main">
				<?php
				$this->brief_business_describing();
				$this->describe_offering();
				$this->about_section();
				$this->describe_propositions();
				$this->testimonials();
				render_convincing( "Take Your Business to the Next Level Today!", "Ready to achieve measurable results and grow your online presence?", "Get Started Now", "link" );
				?>
            </main>
			<?php get_footer(); ?>
        </div>
		<?php
	}

	public function brief_business_describing() {
		?>
        <section class="brief-business-describing">
            <div class="brief-business-describing__prefix">Digital Marketing Agency</div>
            <h1 class="brief-business-describing__headline">Grow Your Brand Online with Proven Strategies</h1>
            <div class="brief-business-describing__describe">
                At Galactic, we exist to help businesses thrive in the digital landscape. Our tailored marketing strategies are designed to increase visibility, drive engagement, and deliver measurable results. From SEO to social media management, we’re here to transform your online presence into a powerful growth engine
            </div>
			<?php render_purple_background_button( "Claim strategy", "link" ); ?>
            <div class="divider"></div>
        </section>
		<?php
	}

	public function describe_offering() {
		?>
        <section class="describe-offering">
            <div class="describe-offering__headline-block">
                <h2>Digital Marketing Solutions for Your Business</h2>
				<?php render_purple_border_button( "View all", "link", "125px", "56px" ); ?>
            </div>
            <div class="describe-offering__offers-list">
                <div class="offer">
                    <img class="offer__image"
                         src="https://websitedemos.net/galatic-02/wp-content/uploads/sites/1455/2024/03/our-services-01.jpg">
                    <h3 class="offer__title">SEO Optimization</h3>
                    <p class="offer__description">Boost your website’s visibility with our expert SEO services. We help clients rank higher on search engines, attract quality traffic.</p>
					<?php render_learn_more( "link" ); ?>
                </div>
                <div class="offer">
                    <img class="offer__image"
                         src="https://websitedemos.net/galatic-02/wp-content/uploads/sites/1455/2024/03/our-services-02.jpg">
                    <h3 class="offer__title">Social Media Marketing</h3>
                    <p class="offer__description">Engage your audience with impactful campaigns. We create strategies that build brand loyalty, increase reach, and drive conversions.</p>
					<?php render_learn_more( "link" ); ?>
                </div>
                <div class="offer">
                    <img class="offer__image"
                         src="https://websitedemos.net/galatic-02/wp-content/uploads/sites/1455/2024/03/our-services-03.jpg">
                    <h3 class="offer__title">PPC Advertising</h3>
                    <p class="offer__description">Maximize your ROI with targeted ad campaigns. We optimize ads to deliver measurable results and achieve your marketing goals.</p>
					<?php render_learn_more( "link" ); ?>
                </div>
            </div>
        </section>
		<?php
	}

	public function about_section() {
		?>
        <section class="about-section">
            <div class="about-section__content">
                <div class="about-section__headline">
                    <img class="about-section__headline-image"
                         src="https://websitedemos.net/galatic-02/wp-content/uploads/sites/1455/2024/03/about-us.jpg">
                    <div class="about-section__headline-description">
                        <h2>Your Partner in Digital Success</h2>
                        <p>At Galactic, we help businesses grow by offering tailored digital marketing services that deliver measurable results. Whether it’s improving your online visibility or increasing engagement, we’re here to guide you every step of the way.</p><br>
                        <p>Over the years, we’ve empowered numerous clients to achieve their goals, from boosting sales to building stronger customer relationships. Let us help you succeed in the digital space.</p>
						<?php render_learn_more( "link" ); ?>
                    </div>
                </div>
                <div class="about-section__benefits">
					<?php render_benefit( "01", "Tailored Strategies", "We design customized marketing plans to address your business’s unique goals and challenges, ensuring maximum impact and relevance." ); ?>
					<?php render_benefit( "02", "Proven Results", "With a data-driven approach, we’ve consistently delivered measurable outcomes, from increased website traffic to higher conversion rates." ); ?>
					<?php render_benefit( "03", "Expert Support", "Our team of seasoned professionals provides guidance and solutions tailored to your evolving needs, offering full support throughout your journey." ); ?>
                </div>
            </div>
        </section>
		<?php
	}

	public function describe_propositions() {
		?>
        <section class="describe-propositions">
            <div class="describe-propositions__headline">
                <h2>Why Choose Us: The Value We Bring to Your Business</h2>
                <ul>
                    <li>
                        <span class="describe-propositions__mark">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512"
                                 xmlns="http://www.w3.org/2000/svg"><path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>
                        </span>
                        <div>
                            <h3>Personalized Solutions</h3>
                            <p>We don’t believe in one-size-fits-all. Our strategies are tailored to align with your specific goals and industry needs, ensuring maximum effectiveness.</p>
                        </div>
                    </li>
                    <li>
                        <span class="describe-propositions__mark">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512"
                                 xmlns="http://www.w3.org/2000/svg"><path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>
                        </span>
                        <div>
                            <h3>Data-Driven Results</h3>
                            <p>Every decision we make is backed by analytics and market research, guaranteeing measurable outcomes and a strong return on investment.</p>
                        </div>
                    </li>
                    <li>
                         <span class="describe-propositions__mark">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512"
                                 xmlns="http://www.w3.org/2000/svg"><path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>
                        </span>
                        <div>
                            <h3>Dedicated Expertise</h3>
                            <p>With years of experience and a passion for innovation, our team is committed to delivering exceptional service and helping your business stand out.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <img class="describe-propositions__image"
                 src="https://websitedemos.net/galatic-02/wp-content/uploads/sites/1455/2024/03/why-choose-us.jpg">
        </section>
		<?php
	}

	public function testimonials() {
		?>
        <section class="testimonials">
            <div class="testimonials__content">
                <h2 class="testimonials__title">
                    What Our Clients Are Saying
                </h2>
                <div>
                    <div class="testimonial">
                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-quote-left" viewBox="0 0 512 512"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                        </svg>
                        <p class="testimonial__text">"This agency completely transformed our online presence! Thanks to their expertise, our traffic and sales have soared beyond expectations."
                        </p>
                        <div class="testimonial__author">
                            <img src="https://websitedemos.net/galatic-02/wp-content/uploads/sites/1455/2024/03/testimonial-01.jpg"
                                 class="testimonial__author-image">
                            <p class="testimonial__author-name">
                                Jane Doe, Business Owner
                            </p>
                        </div>
                    </div>
                    <div class="testimonial">
                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-quote-left" viewBox="0 0 512 512"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                        </svg>
                        <p class="testimonial__text"> "Professional, innovative, and results-driven—working with them was one of the best decisions for our brand. Their tailored strategies helped us reach a wider audience, improve engagement, and ultimately boost our revenue."</p>
                        <div class="testimonial__author">
                            <img src="https://websitedemos.net/galatic-02/wp-content/uploads/sites/1455/2024/03/testimonial-02.jpg"
                                 class="testimonial__author-image">
                            <p class="testimonial__author-name">
                                John Smith, Marketing Manager
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<?php
	}

}

new RenderHomePage()
?>