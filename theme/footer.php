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
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jonathon-harrelson-v3' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'jonathon-harrelson-v3' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'jonathon-harrelson-v3' ), 'jonathon-harrelson-v3', '<a href="http://jonathon-harrelson.com" rel="designer">Jonathon Harrelson</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php } ?>
<?php wp_footer(); ?>
<script type='text/javascript' id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:8890/browser-sync/browser-sync-client.2.11.1.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>
