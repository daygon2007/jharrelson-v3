<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jonathon_Harrelson_v3
 */

?>
<?php
    if (is_page('intro')){
        // nothing
    }else{ 
?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
                <div class="col-md-4 social-nav">
                    <ul>
                        <li class="col-xs-1"><a href="https://www.facebook.com/jonathon.harrelson" target="_blank" title="My Facebook Page"><i class="fa fa-facebook"></i></a></li>
                        <li class="col-xs-1"><a href="http://www.twitter.com/MrJHarrelson" target="_blank" title="My Twitter Feed"><i class="fa fa-twitter"></i></a></li>
                        <li class="col-xs-1"><a href="https://plus.google.com/+JonathonHarrelson" target="_blank" title="My Google Plus Page"><i class="fa fa-google-plus"></i></a></li>
                        <li class="col-xs-1"><a href="https://www.linkedin.com/in/jonathonharrelson" target="_blank" title="My LinkedIn Profile"><i class="fa fa-linkedin"></i></a></li>
                        <li class="col-xs-1"><a href="https://instagram.com/daygon2007/" target="_blank" title="My Instagram Pictures"><i class="fa fa-instagram"></i></a></li>
                        <li class="col-xs-1"><a href="http://codepen.io/jharrelson/" target="_blank" title="My Playground"><i class="fa fa-codepen"></i></a></li>
                        <li class="col-xs-1"><a href="https://github.com/daygon2007" target="_blank" title="My Repository"><i class="fa fa-github"></i></a></li>
                </ul>
                </div>
                <div class="col-md-4">
                    <a href ="<?php bloginfo('url'); ?>/credits">Special Recognition</a>
                </div>
                <div class="col-md-4">
                    <p>Copyright <?php echo date('Y'); ?> - Jonathon Harrelson</p>
                </div>
        </div>
	</footer><!-- #colophon -->
<?php } ?>
<?php wp_footer(); ?>
<script type='text/javascript' id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:8890/browser-sync/browser-sync-client.2.11.1.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>
