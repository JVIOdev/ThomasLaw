<?php  /* Template Name: Page with map */
/**
 * The template for displaying pages with map
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Thomaslawplc
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->


<section id="contact-box">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    <div id="maps">
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
        <div class="map_container">
            <div id='gmap_canvas'></div>
        </div>
        <div class="container rel_cont">
            <div class="col-lg-4" id="selector_maps">
                <div class="icon-box">
                    <img src="/wp-content/uploads/2017/02/address-icon-blue.png" alt="">
                </div>
                <p><strong>Choose location:</strong></p>
                <select id="adresses_map" class="form-control selectpicker">
                    <option selected value="1750 Tysons Boulevard, Suite 1500<br>Tysons Corner, VA 22102;38.923999075563295,-77.22288127988577">VA, Tysons Corner</option>
                    <option value="5180 Parkstone Drive, Suite 160<br>Chantilly, VA 20151-3827;38.8711265,-77.46439720000001">VA, Chantilly</option>
                </select>
                <div id="selected_address"></div>
            </div>
        </div>
    </div>
    <script type='text/javascript' src="/wp-content/themes/thomaslawplc/js/map_plugin.js"></script>
</section>

<?php
get_footer();
