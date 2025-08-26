<?php $this->suspensionRedirect($view); ?>
<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />

	<?php $this->helpers->seo($view); ?>
	<link rel="icon" href="public/images/favicon.png" type="image/x-icon">
	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<link href="<?php //echo URL; 
				?>public/styles/style.css" rel="stylesheet">
	<link href="<?php //echo URL; 
				?>public/styles/suspension.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<link rel="stylesheet" href="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.css" media="screen" />
	<?php $this->helpers->analytics(); ?>

	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CMontserrat:400,700,900%7CLato:700" rel="stylesheet">

</head>

<body <?php $this->helpers->bodyClasses($view); ?>>
	<?php $this->checkSuspensionHeader(); ?>
	<header>
		<div id="header">
			<div class="row">
				<!-- <a href="home" class="h-logo"><img src="public/images/common/logo.jpg" alt="Logo"></a> -->
				<nav>
					<div class="logo">Roldan Prado</div>
					<div class="burger" id="burger">
						<div></div>
						<div></div>
						<div></div>
					</div>
					<!-- <a href="#" id="pull"><strong>MENU</strong></a> -->
					<ul id="menu">
						<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
						<li <?php $this->helpers->isActiveMenu("about"); ?>><a href="<?php echo URL ?>about#content">ABOUT US</a></li>
						<li <?php $this->helpers->isActiveMenu("services"); ?>><a href="<?php echo URL ?>services#content">SERVICES</a></li>
						<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a href="<?php echo URL ?>gallery#content">GALLERY</a></li>
						<li <?php $this->helpers->isActiveMenu("testimonials"); ?>><a href="<?php echo URL ?>testimonials#content">TESTIMONIALS</a></li>
						<li <?php $this->helpers->isActiveMenu("reviews"); ?>><a href="<?php echo URL ?>reviews#content">REVIEWS</a></li>
						<li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="<?php echo URL ?>contact#content">CONTACT US</a></li>
						<li <?php $this->helpers->isActiveMenu("privacy-policy"); ?>><a href="<?php echo URL ?>privacy-policy#content">PRIVACY POLICY</a></li>
					</ul>
				</nav>
				<div class="socials">
					<a href="<?php $this->info('fb_link') ?>" target="_blank">f</a>
					<a href="<?php $this->info('gp_link') ?>" target="_blank">g</a>
					<!-- <a href="<?php $this->info('in_link') ?>" target="_blank">i</a> -->
					<a href="<?php $this->info('tt_link') ?>" target="_blank">l</a>
					<a href="<?php $this->info('yt_link') ?>" target="_blank">x</a>
					<a href="<?php $this->info('rs_link') ?>" target="_blank">r</a>
				</div>
			</div>
		</div>
	</header>

	<!-- <?php //if($view == "home"):
			?> -->
	<div id="banner">
		<div class="row">

		</div>
	</div>
	<!-- <?php //endif; 
			?> -->