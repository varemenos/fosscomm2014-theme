<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<section>
				<h1>FOSSCOMM 2014 <span class="only_desktop">-</span> Λαμία</h1>
				<h2>2-4 Μαίου 2014, Στον χώρο του Τ.Ε.Ι. Στερεάς Ελλάδας</h2>
				<p class="half-width">Το FOSSCOMM (Free and Open Source Software Communities Meeting) είναι ένα ετήσιο συνέδριο για το Ελεύθερο και Ανοιχτό Λογισμικό. Οργανώνεται απο τις Ελληνικές κοινότητες Ελεύθερου και Ανοιχτού Λογισμικού σε διαφορετική πόλη κάθε χρόνο ενώ υπεύθυνη για την συγκέντρωση υποψηφιοτήτων για την διεξαγωγή του επόμενου Fosscomm και για την ανάθεσή του είναι η ομάδα FOSSCOMM.</p>
				<p class="half-width">Το 2014 το FOSSCOMM διοργανώνεται από την <a href="http://linuxteam.teilam.gr">Ομάδα Linux & Ελεύθερου λογισμικού του ΤΕΙ Στερεάς Ελλάδας</a> με την στήριξη των τμημάτων <a href="http://eln.teiste.gr">Ηλεκτρονικών Μηχανικών ΤΕ</a> και <a href="http://www.inf.teilam.gr">Μηχανικών Πληροφορικής ΤΕ</a> και απευθύνεται σε όσους ενδιαφέρονται για το Ελεύθερο Λογισμικό/Λογισμικό Ανοιχτού Κώδικα, ανεξάρτητα από το επίπεδο γνώσεων που διαθέτουν στην χρήση λογισμικών και υπολογιστών.</p>
				<p class="full-width">Η συμμετοχή στo FOSSCOMM είναι ελεύθερη και δωρεάν και όλα τα έξοδα διεξαγωγής καλύπτονται από δωρεές και χορηγίες. Η διοργάνωση γίνεται αποκλειστικά από εθελοντές.</p>
			</section>

			<hr style="margin: 3rem 0;">

			<section id="blog" class="clearfix">
				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
						get_template_part( 'content', 'post' );
					endwhile;
				?>
			</section>
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
get_footer();
