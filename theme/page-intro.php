<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
    
</head>
<body>
    <div id="skrollr-body"></div>
    <div id="start">
	<div class="intro-computer" data-0="transform:scale(1.75,1.75);" data-300="transform:scale(.5,.5); top:0%; opacity:1; z-index:9999;" data-600="top:-100%; opacity:0; z-index:1;">
		<img src="<?php bloginfo(template_directory); ?>/images/intro.png" alt="Jonathon Harrelson desktop background image">
		<div class="logo">
			<img src="<?php bloginfo(template_directory); ?>/images/logo-white.png" alt="Jonathon Harrelson, Front-End Web Developer, Search Engin Optimization Specialist" />
			<blockquote>
				Front-End Web Developer & SEO Specilist
			</blockquote>
            <a href="#" class="ghost button" id="scroll_down">View The Journey</a>
            <a href="<?php bloginfo('url'); ?>/home" class="ghost button">Enter My World</a>
		</div>
	</div>
</div>
<!-- End Start Screen -->

<div id="portfolio-section" data-300="top:100%; opacity:0;" data-600="top:0%; opacity:1;" data-7900="opacity:1; top:0%;" data-8200="top:-100%; opacity:0;">
	<div class="content-area">
		<p data-600="opacity:0;" data-900="opacity:1;" data-1200="opacity:1;" data-1500="opacity:0;">I Create</p>
		<p data-1500="opacity:0;" data-1800="opacity:1;" data-2100="opacity:1;" data-2400="opacity:0;">A Journey</p>
		<p data-2400="opacity:0;" data-2700="opacity:1;" data-3000="opacity:1;" data-3300="opacity:0;">That Makes the end result</p>
		<p data-3300="opacity:0;" data-3600="opacity:1;" data-3900="opacity:1;" data-4200="opacity:0;">more memorable.</p>
		<p data-4200="opacity:0;" data-4500="opacity:1;" data-4800="opacity:1;" data-5100="opacity:0;">This leads to</p>
		<p data-5100="opacity:0;" data-5400="opacity:1;" data-5700="opacity:1;" data-6000="opacity:0;"> better conversion rates</p>
		<p data-6000="opacity:0;" data-6300="opacity:1;" data-6700="opacity:1;" data-7000="opacity:0;"> and a more enjoyable</p>
		<p data-7000="opacity:0;" data-7300="opacity:1;" data-7600="opacity:1;" data-7900="opacity:0;">user experience.</p>
	</div>
</div>
<!-- End Portfolio Section -->
<div id="passion-section" data-8200="display:none;" data-8300="display:block; opacity:1;" data-12300="top:0%;" >
    <h2 class="caps" data-8300="opacity:0;" data-8900="opacity:1;" data-9600="opacity:1;" data-9900="opacity:0;">Web Design and Development is my Passion</h2>
    <h3 data-8600="opacity:0;" data-8900="opacity:1;" data-9600="opacity:1;" data-9900="opacity:0;">I Love Turning this...</h3>
    <h3 data-10500="opacity:0;" data-10800="opacity:1;" data-11100="opacity:1;" data-11400="opacity:0;">Into this...</h3>
    <img src="http://placehold.it/1920x1080?text=Awesome+Site+Image+For+Desktop" data-11400="opacity:0;" data-11700="opacity:1;" data-12700="opacity:1;" data-13000="opacity:0;" class="hidden-sm hidden-xs">
    <img src="http://placehold.it/375x667?text=Awesome+Site+Image+For+Mobile" data-11400="opacity:0;" data-11700="opacity:1;" data-12700="opacity:1;" data-13000="opacity:0;" class="visible-sm visible-xs">
    <h3 data-13000="opacity:0;" data-13300="opacity:1;">Using these programming languages and platforms:</h3>
    
</div>

<div id="contact-section">
	
</div>
<!-- End Contact Section -->
<?php get_footer(); ?>