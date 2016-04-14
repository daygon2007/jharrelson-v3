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
    <div class="loader"></div>
    <div id="start" data-0="display:block;" data-600="display:none">
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

<div id="portfolio-section" data-299="display:none"; data-300="top:100%; opacity:0; display:block;" data-600="top:0%; opacity:1;" data-7900="opacity:1; top:0%;" data-8200="top:-100%; opacity:0;" data-8201="display:none">
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
<div id="passion-section" data-8200="display:none;" data-8300="display:block; opacity:1;" data-12300="top:0%;" data-14800="opacity:1;" data-15100="opacity:0;" data-15101="display:none;" >
    <h2 class="caps" data-8300="opacity:0; display:block;" data-8900="opacity:1;" data-9600="opacity:1;" data-9900="opacity:0;" data-13000="display:none;">Web Design and Development is my Passion</h2>
    <h3 data-8600="opacity:0;  display:block;" data-8900="opacity:1;" data-9600="opacity:1;" data-9900="opacity:0;"  data-13000="display:none;">I Love Turning this...</h3>
    <h3 data-10500="opacity:0; display:block;" data-10800="opacity:1;" data-11100="opacity:1;" data-11400="opacity:0;" data-13000="display:none;">Into this...</h3>
    <img src="http://placehold.it/1920x1080?text=Awesome+Site+Image+For+Desktop" data-11400="opacity:0;" data-11700="opacity:1;" data-12700="opacity:1;" data-13000="opacity:0;" class="hidden-sm hidden-xs">
    <img src="http://placehold.it/375x667?text=Awesome+Site+Image+For+Mobile" data-11400="opacity:0;" data-11700="opacity:1;" data-12700="opacity:1;" data-13000="opacity:0;" class="visible-sm visible-xs">
    <h3 data-13000="opacity:0;" data-13300="opacity:1;" id="programming-languages">Using these programming languages and platforms:</h3>
    <div class="logos container">
        <img src="<?php bloginfo(template_directory); ?>/images/HTML5_Logo_256.png" alt="HTML5 Developer" data-13300="margin-left:75%; opacity:0;" data-13400="margin-left:0; opacity:1">
        <!-- HTML5 Logo -->
        <img src="<?php bloginfo(template_directory); ?>/images/css3.png" alt="CSS3 Developer" data-13400="margin-left:50%; opacity:0;" data-13500="margin-left:0; opacity:1">
        <!-- CSS3 Logo -->
        <img src="<?php bloginfo(template_directory); ?>/images/javascript-logo.png" alt="Javascript Developer" data-13500="margin-left:25%; opacity:0;" data-13600="margin-left:0; opacity:1">
        <!-- Javascript Logo -->
        <img src="<?php bloginfo(template_directory); ?>/images/wordpress-logo.png" alt="WordPress Developer" data-13600="margin-left:5%; opacity:0;" data-13700="margin-left:0; opacity:1">
        <!-- WordPress Logo -->
    </div>
    <div class="logos container">
        <img src="<?php bloginfo(template_directory); ?>/images/modx-logo.png" alt="MODX Developer" data-13800="margin-left:75%; opacity:0;" data-13900="margin-left:0; opacity:1">
        <!-- ModX Logo -->
        <img src="<?php bloginfo(template_directory); ?>/images/php-logo.png" alt="PHP Developer" data-14000="margin-left:50%; opacity:0;" data-14100="margin-left:0; opacity:1">
        <!-- PHP Logo -->
        <img src="<?php bloginfo(template_directory); ?>/images/gulp-logo.png" alt="Gulp Developer" data-14200="margin-left:25%; opacity:0;" data-14300="margin-left:0; opacity:1">
        <!-- Gulp Logo -->
        <img src="<?php bloginfo(template_directory); ?>/images/jekyll-logo.png" alt="Jekyll Developer" data-14400="margin-left:5%; opacity:0;" data-14500="margin-left:0; opacity:1">
        <!-- Gulp Logo -->
    </div>
</div>

<div id="contact-section" data-0="display:none;" data-15100="display:block; opacity:0;" data-15400="opacity:1;">
    <?php echo do_shortcode('[contact-form]'); ?>
</div>
<!-- End Contact Section -->
<?php get_footer(); ?>