<div id="content">
<section id="about" class="resume-section">
    <h2>About Me</h2>
    <p><strong>Roldan Sapitula Prado</strong></p>
    <p>Enthusiastic and detail-driven web developer with solid expertise in JavaScript, HTML, CSS, and modern frameworks. Adept at creating responsive, user-centric websites and interactive digital experiences. Dedicated to continuous learning and growth within a collaborative and innovative team environment.</p>
  </section>

  <section id="skills" class="resume-section">
    <h2>Technical Skills</h2>
    <ul>
      <li>WordPress Development (custom themes, plugins, responsive design)</li>
      <li>Email troubleshooting (SMTP, contact forms)</li>
      <li>Custom Post Types (CPTs)</li>
      <li>WooCommerce setup and management</li>
      <li>Page Builders: Elementor Pro, Divi, SiteOrigin, Gutenberg, WPBakery</li>
      <li>Squarespace, Shopify, Wix</li>
      <li>HTML, CSS, JavaScript, PHP</li>
      <li>Adobe Photoshop, Premiere, Canva, Figma</li>
    </ul>
  </section>

  <section id="experience" class="resume-section">
    <h2>Experience</h2>
    <p><strong>Web Developer / Programmer</strong> — Dream Webworks Creations Inc. (Aug 2020 – Jun 2025)</p>
    <ul>
      <li>Design, develop, and maintain dynamic, user-friendly websites tailored to client requirements.</li>
      <li>Implement both front-end and back-end functionalities, including theme customization and plugin integration.</li>
      <li>Collaborate with cross-functional teams to deliver high-quality web solutions.</li>
      <li>Conduct regular website testing, debugging, and troubleshooting.</li>
    </ul>
  </section>

  <section id="education" class="resume-section">
    <h2>Education</h2>
    <p><strong>Bachelor of Science in Information Technology</strong>, University of Baguio (2017 – 2021)</p>
    <p><strong>Associate in Computer Technology</strong>, Polytechnic College of La Union (2010 – 2013)</p>
  </section>

  <section id="contact" class="resume-section">
    <h2>Contact Information</h2>
    <p><strong>Phone:</strong> +63 976 050 7326</p>
    <p><strong>Email:</strong> pradoroldan00@gmail.com</p>
    <p><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/roldan-prado-a70893209/" target="_blank">linkedin.com/in/roldan-prado</a></p>
  </section>
	<div id="about">
		<div class="row flex">
				
		</div>
	</div>

	<div id="welcome">
		<div class="row flex">
				
		</div>
	</div>

	<div id="contact">
		<div class="row ">
			<h2></h2>
			<form action="sendContactForm" method="post"  class="sends-email ctc-form" >
				<div class="flex">
					<label><span class="ctc-hide">Name</span>
						<input type="text" name="name" placeholder="Name">
					</label>
					<label><span class="ctc-hide">Email</span>
						<input type="text" name="email" placeholder="Email">
					</label>
					<label><span class="ctc-hide">Phone</span>
						<input type="text" name="phone" placeholder="Phone">
					</label>
				</div>
				<label><span class="ctc-hide">Message</span>
					<textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
				</label>
				<label for="g-recaptcha-response"><span class="ctc-hide">Recaptcha</span></label>
				<div class="g-recaptcha"></div>
				<label>
					<input type="checkbox" name="consent" class="consentBox">I hereby consent to having this website store my submitted information so that they can respond to my inquiry.
				</label><br>
				<?php if( $this->siteInfo['policy_link'] ): ?>
				<label>
					<input type="checkbox" name="termsConditions" class="termsBox"/> I hereby confirm that I have read and understood this website's <a href="<?php $this->info("policy_link"); ?>" target="_blank">Privacy Policy.</a>
				</label>
				<?php endif ?>
				<button type="submit" class="ctcBtn btn" disabled>Submit Form</button>
			</form>
		</div>
	</div>

</div>
