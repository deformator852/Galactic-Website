<?php //Template Name:Home
include_once "components/purple_background_button.php";
include_once "components/learn_more.php";

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
				?>
            </main>
			<?php get_footer(); ?>
        </div>
		<?php
	}

	public function brief_business_describing() {
		?>
        <section class="brief-business-describing">
            <div class="brief-business-describing__prefix">PREFIX DESCRIBING WHAT YOUR BUSINESS DOES WILL BE HERE</div>
            <h1 class="brief-business-describing__headline">We Will Write a Headline Highlighting Your Business
                Offerings Here</h1>
            <div class="brief-business-describing__describe">
                We will write a persuasive introduction for you or your company. This can be about your products,
                offerings, or simply why you exist.
            </div>
			<?php render_purple_background_button( "Call to action", "link" ); ?>
            <div class="divider"></div>
        </section>
		<?php
	}

	public function describe_offering() {
		?>
        <section class="describe-offering">
            <div class="describe-offering__headline-block">
                <h2>Headline Describing Your Offerings Will Be Here</h2>
				<?php render_purple_border_button( "View all", "link", "125px", "56px" ); ?>
            </div>
            <div class="describe-offering__offers-list">
                <div class="offer">
                    <img class="offer__image"
                         src="https://websitedemos.net/galatic-02/wp-content/uploads/sites/1455/2024/03/our-services-01.jpg">
                    <h3 class="offer__title">Offering 1</h3>
                    <p class="offer__description">This section will highlight specific details about a particular
                        service you offer. We will write about what this offering is and how your company uses it to
                        help clients or users achieve their desired goals.</p>
					<?php render_learn_more( "link" ); ?>
                </div>
                <div class="offer">
                    <img class="offer__image"
                         src="https://websitedemos.net/galatic-02/wp-content/uploads/sites/1455/2024/03/our-services-02.jpg">
                    <h3 class="offer__title">Offering 2</h3>
                    <p class="offer__description">This section will highlight specific details about a particular
                        service you offer. We will write about what this offering is and how your company uses it to
                        help clients or users achieve their desired goals.</p>
					<?php render_learn_more( "link" ); ?>
                </div>
                <div class="offer">
                    <img class="offer__image"
                         src="https://websitedemos.net/galatic-02/wp-content/uploads/sites/1455/2024/03/our-services-03.jpg">
                    <h3 class="offer__title">Offering 3</h3>
                    <p class="offer__description">This section will highlight specific details about a particular
                        service you offer. We will write about what this offering is and how your company uses it to
                        help clients or users achieve their desired goals.</p>
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
                        <h2>Short Headline for Company About Section Will Be Here</h2>
                        <p>In this part, we will introduce you or your business to website visitors. We’ll write about
                            you,
                            your organization, the products or services you offer, and why your company exists.
                        </p><br>
                        <p> For this part, we will write an additional introduction of yourself or your business. This
                            can
                            tell about how you helped clients achieve their desired results.</p>
						<?php render_learn_more( "link" ); ?>
                    </div>
                </div>
                <div class="about-section__benefits">
                    <div class="benefit">
                        <p class="benefit__number">01</p>
                        <h3 class="benefit__title">Benefit 1</h3>
                        <p class="benefit__description">In this part, we will write about the benefits users derive from
                            choosing your company product or services.</p>
                    </div>
                    <div class="benefit">
                        <p class="benefit__number">02</p>
                        <h3 class="benefit__title">Benefit 2</h3>
                        <p class="benefit__description">In this part, we will write about the benefits users derive from
                            choosing your company product or services.</p>
                    </div>
                    <div class="benefit">
                        <p class="benefit__number">03</p>
                        <h3 class="benefit__title">Benefit 3</h3>
                        <p class="benefit__description">In this part, we will write about the benefits users derive from
                            choosing your company product or services.</p>
                    </div>
                </div>
            </div>
        </section>
		<?php
	}

	public function describe_propositions() {
		?>
        <section class="describe-propositions">
            <div class="describe-propositions__headline">
                <h2>Headline Describing Your Unique Value Propositions Will Be Here</h2>
                <ul>
                    <li>
                        <span class="describe-propositions__mark">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512"
                                 xmlns="http://www.w3.org/2000/svg"><path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>
                        </span>
                        <div>
                            <h3>Unique Value Proposition 1 </h3>
                            <p>In this part, we will write about what makes your business unique and the value people
                                get
                                from using your products or services over competitors. </p>
                        </div>
                    </li>
                    <li>
                        <span class="describe-propositions__mark">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512"
                                 xmlns="http://www.w3.org/2000/svg"><path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>
                        </span>
                        <div>
                            <h3>
                                Unique Value Proposition 2 </h3>
                            <p> In this part, we will write about what makes your business unique and the value people
                                get
                                from using your products or services over competitors. </p>
                        </div>
                    </li>
                    <li>
                         <span class="describe-propositions__mark">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512"
                                 xmlns="http://www.w3.org/2000/svg"><path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>
                        </span>
                        <div>
                            <h3>Unique Value Proposition 3 </h3>
                            <p>In this part, we will write about what makes your business unique and the value people
                                get
                                from using your products or services over competitors. </p>
                        </div>
                    </li>
                </ul>
            </div>
            <img class="describe-propositions__image"
                 src="https://websitedemos.net/galatic-02/wp-content/uploads/sites/1455/2024/03/why-choose-us.jpg">
        </section>
		<?php
	}
}

new RenderHomePage()
?>