<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<h2>Sponsors</h2>

			<ul id="sponsors">
				<li>
					<a href="http://www.ellak.gr" target="_blank"><img src="/wp-content/themes/fosscomm2014/img/eellak100.png" alt="ΕΛ/ΛΑΚ"></a>
				</li>
				<li>
					<a href="http://www.citrix.com" target="_blank"><img src="/wp-content/themes/fosscomm2014/img/citrix.png" alt="Citrix"></a>
				</li>
				<li>
					<a href="http://www.ots.gr" target="_blank"><img src="/wp-content/themes/fosscomm2014/img/ots.png" alt="Citrix"></a>
				</li>
				<li>
					<a href="http://www.agnadi-syros.gr/" target="_blank"><img src="/wp-content/themes/fosscomm2014/img/agnadi.png" alt="Agnadi-Syros"></a>
				</li>
				<li>
					<a href="http://www.enatv.gr/" target="_blank"><img src="/wp-content/themes/fosscomm2014/img/ena.png" alt="Ena TV"></a>
				</li>
				<li>
					<a href="http://eln.teiste.gr" target="_blank"><img src="/wp-content/themes/fosscomm2014/img/eln.png" alt="Ηλεκτρονικών Μηχανικών ΤΕ"></a>
				</li>
				<li>
					<a href="http://www.inf.teilam.gr" target="_blank"><img src="/wp-content/themes/fosscomm2014/img/inf.png" alt="Μηχανικών Πληροφορικής ΤΕ"></a>
				</li>
			</ul>
			<div class="site-info">
				<p>Created by <a href="http://adonisk.com">Adonis K.</a></p>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
	<script src="<?php echo get_stylesheet_directory_uri();?>/js/script.js"></script>
</body>
</html>
