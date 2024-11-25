<?php

//Template Name: Contact
class RenderContactPage {
	public function __construct() {
		?>
        <div id="wrapper">
			<?php get_header(); ?>
            <main class="main">
                <section class="contacts">
                    <div class="contacts__info">
                        <h2 class="contacts__title">Short heading for the Contact Us Section</h2>
                        <div class="contacts__address">
                            <p>ADDRESS: </p>
                            <p>2360 Hood Avenue, San Diego, CA, 92123 </p>
                        </div>
                        <div class="contacts__phone">
                            <p>PHONE: </p>
                            <p>202-555-0188</p>
                        </div>
                        <div class="contacts__email">
                            <p>EMAIL:</p>
                            <p>contact@example.com</p>
                        </div>
                        <div class="contacts__socials">
                            <p>FOLLOW US:</p>
                            <ul></ul>
                        </div>
                    </div>
                    <div class="contacts__form">
                        <form>
                            <div class="contacts__full-name-input">
                                <span>Full Name</span>
                                <input required>
                            </div>
                            <div class="contacts__email-input">
                                <span>Email</span>
                                <input required>
                            </div>
                            <div class="contacts__message-textarea">
                                <span>Message</span>
                                <textarea required></textarea>
                            </div>
                            <button type="submit" class="contacts__submit">Send Message</button>
                        </form>
                    </div>
                </section>
                <!--				render_convincing( "We Will Write a Convincing Call To Action to Engage Your Audience Here", "We will write a sub-headline that introduces your call to action to website visitors here", "Call To Action", "link" );-->
            </main>
			<?php get_footer(); ?>
        </div>
		<?php
	}
}

new RenderContactPage();