<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Thomaslawplc
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
// custom post type for Testimonials
function my_custom_post_testimonials() {
	$labels = array(
		'name'               => __( 'Testimonials','complete'),
		'singular_name'      => __( 'Testimonials','complete'),
		'add_new'            => __( 'Add Testimonials','complete'),
		'add_new_item'       => __( 'Add New Testimonial','complete'),
		'edit_item'          => __( 'Edit Testimonial','complete'),
		'new_item'           => __( 'New Testimonial','complete'),
		'all_items'          => __( 'All Testimonials','complete'),
		'view_item'          => __( 'View Testimonial','complete'),
		'search_items'       => __( 'Search Testimonial','complete'),
		'not_found'          => __( 'No Testimonial found','complete'),
		'not_found_in_trash' => __( 'No Testimonial found in the Trash','complete'), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Testimonials'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Manage Testimonials',
		'public'        => true,
		'menu_icon'		=> 'dashicons-format-quote',
		'menu_position' => null,
		'supports'      => array( 'title', 'editor', 'thumbnail'),
		'has_archive'   => true,
		'exclude_from_search' => true,
	);
	register_post_type( 'testimonials', $args );	
}
add_action( 'init', 'my_custom_post_testimonials' );


// add meta box to testimonials
add_action( 'admin_init', 'my_testimonial_admin_function' );
function my_testimonial_admin_function() {
    add_meta_box( 'testimonial_meta_box',
        'Testimonial Info',
        'display_testimonial_meta_box',
        'testimonials', 'normal', 'high'
    );
}
// add meta box form to doctor
function display_testimonial_meta_box( $testimonial ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
	$companyname = esc_html( get_post_meta( $testimonial->ID, 'companyname', true ) );  
    $possition = esc_html( get_post_meta( $testimonial->ID, 'possition', true ) ); 
	
    ?>
    <table width="100%">
        <tr>
            <td width="20%">Company Name </td>
            <td width="80%"><input size="80" type="text" name="companyname" value="<?php echo $companyname; ?>" /></td>
        </tr> 
        <tr>
            <td width="20%">Designation </td>
            <td width="80%"><input size="80" type="text" name="possition" value="<?php echo $possition; ?>" /></td>
        </tr>       
    </table>
    <?php    
}
// save testimonial meta box form data
add_action( 'save_post', 'add_testimonial_fields_function', 10, 2 );
function add_testimonial_fields_function( $testimonial_id, $testimonial ) {
    // Check post type for testimonials
    if ( $testimonial->post_type == 'testimonials' ) {
        // Store data in post meta table if present in post data
		if ( isset($_POST['companyname']) ) {
            update_post_meta( $testimonial_id, 'companyname', $_POST['companyname'] );
        } 
        if ( isset($_POST['possition']) ) {
            update_post_meta( $testimonial_id, 'possition', $_POST['possition'] );
        }       
    }
}

//[testimonials-rotator show="3"]
//Testimonials function
function testimonials_rotator_output_func( $atts ){
   extract( shortcode_atts( array(
		'show' => '3',
	), $atts ) );
	  extract( shortcode_atts( array( 'show' => $show,), $atts ) );	
	
	$testimonialoutput = '
  <ul class="bxslider">';
	wp_reset_query();
	 $args = array( 'post_type' => 'testimonials', 'posts_per_page' => $show, 'orderby' => 'date', 'order' => 'desc' );
	query_posts( $args );
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
		$companyname = esc_html( get_post_meta( get_the_ID(), 'companyname', true ) );

		$possition = esc_html( get_post_meta( get_the_ID(), 'possition', true ) );
			$testimonialoutput .= '
		   <li>								
				<h3>'.get_the_title().'</h3>
				<p>'.$companyname.', '.$possition.'</p>
				<blockquote>'.get_the_excerpt().'</blockquote>
				<p class="tdesc"><a href="'.get_permalink().'"><i class="fa fa-search"></i>Read more</a></p>
			</li>			  
			';
		endwhile;
		 $testimonialoutput .= '</ul>';
	else:
	  $testimonialoutput = ' 
	  <div class="bxmain rota">
  <ul class="bxslider">
   <li>
    <blockquote>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,</blockquote>
    <div class="testimonial-image"><img width="70px" height="70px" src="'.get_template_directory_uri()."/images/safira.jpg".'"></div>
    <h3>Safira</h3>
    <p>(Quia, CEO)</p>
    </li>
   <li>
    <blockquote>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</blockquote>
    <div class="testimonial-image"><img width="70px" height="70px" src="'.get_template_directory_uri()."/images/alana.jpg".'"></div>
    <h3>Alana</h3>
    <p>(Wirate, PA)</p>
    </li>
   <li>
    <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</blockquote>
    <div class="testimonial-image"><img width="70px" height="70px" src="'.get_template_directory_uri()."/images/sarag.jpg".'"></div>
    <h3>Sara</h3>
    <p>(Yahoo, Manager)</p>
    </li>        
	</ul></div>
	   ';			
	  endif;  
	wp_reset_query();
	return $testimonialoutput;
}
add_shortcode( 'testimonials-rotator', 'testimonials_rotator_output_func' );

// Testimonial Box
// [testimonials-box col="3" show="3"]

function testimonials_box_func( $atts ) {
   extract( shortcode_atts( array(
		'col' => '3',
		'show' => '3',
	), $atts ) );
	  extract( shortcode_atts( array( 'show' => $show,), $atts ) ); $tstmnl = ''; wp_reset_query(); 

	$tstmnl = '<div class="testimonialrow">';
	$args = array( 'post_type' => 'testimonials', 'posts_per_page' => $show, 'orderby' => 'date', 'order' => 'desc' );
	query_posts( $args );
	$n = 0;
	if ( have_posts() ) {
		while ( have_posts() ) { 
			$n++;
			the_post();
			$companyname = esc_html( get_post_meta( get_the_ID(), 'companyname', true ) );
			$possition = esc_html( get_post_meta( get_the_ID(), 'possition', true ) );
 			
			if( $col == 1 ){
				$tstmnl .= '<div class="tstcols1';
			}elseif( $col == 2 ){
				$tstmnl .= '<div class="tstcols2';
			}elseif( $col == 3 ){
				$tstmnl .= '<div class="tstcols3';
			}elseif( $col == 4 ){
				$tstmnl .= '<div class="tstcols4';
			}
				$tstmnl .= '">';
				
                $tstmnl .= '<div class="testimonial-box"> 
					 <em>'.get_the_content().'</em>
                     </div>
                     <div class="testimonial-inforarea">
                     	<i class="fa fa-user"></i>
<h3>'.get_the_title().',</h3>('.$companyname.','.$possition.')
                     </div>
				';
                $tstmnl .= '</div>
				';
		}
	}else{
		$tstmnl .= '
				<div class="tstcols3"> 
					 <div class="testimonial-box">
						<em>Sed suscipit mauris nec mauris vulputate, a posuere libero ongue. Nam laoreet elit eu erat pulvinar, et efficitur nibh imod. Proin venenatis orci sit amet nisl finibus vehicula. Nam metus lorem, hendrerit quis ante eget lobortis eleneque. Aliquam in ullamcorper quam. Integer euismod ligula in mauris vehicula imperdiet.</em>
					 </div>
					 <div class="testimonial-inforarea">
						<i class="fa fa-user"></i><h3>John,</h3>(Company Name, CEO)
					 </div>
				</div>
				<div class="tstcols3"> 
					 <div class="testimonial-box">
						<em>Sed suscipit mauris nec mauris vulputate, a posuere libero ongue. Nam laoreet elit eu erat pulvinar, et efficitur nibh imod. Proin venenatis orci sit amet nisl finibus vehicula. Nam metus lorem, hendrerit quis ante eget lobortis eleneque. Aliquam in ullamcorper quam. Integer euismod ligula in mauris vehicula imperdiet.</em>
					 </div>
					 <div class="testimonial-inforarea">
						<i class="fa fa-user"></i><h3>Stefen,</h3>(Company Name, Sr.Manager)
					 </div>
				</div>
				<div class="tstcols3"> 
					 <div class="testimonial-box">
						<em>Sed suscipit mauris nec mauris vulputate, a posuere libero ongue. Nam laoreet elit eu erat pulvinar, et efficitur nibh imod. Proin venenatis orci sit amet nisl finibus vehicula. Nam metus lorem, hendrerit quis ante eget lobortis eleneque. Aliquam in ullamcorper quam. Integer euismod ligula in mauris vehicula imperdiet.</em>
					 </div>
					 <div class="testimonial-inforarea">
						<i class="fa fa-user"></i><h3>Sara,</h3>(Company Name, Developer)
					 </div>
				</div>								
				
		';
	}
	wp_reset_query();
	$tstmnl .= '</div>';
    return $tstmnl;
}
add_shortcode( 'testimonials-box', 'testimonials_box_func' );
//

//custom post type for Our Team
function my_custom_post_team() {
	$labels = array(
		'name'               => __( 'Our Team', 'complete' ),
		'singular_name'      => __( 'Our Team', 'complete' ),
		'add_new'            => __( 'Add New', 'complete' ),
		'add_new_item'       => __( 'Add New Team Member', 'complete' ),
		'edit_item'          => __( 'Edit Team Member', 'complete' ),
		'new_item'           => __( 'New Member', 'complete' ),
		'all_items'          => __( 'All Members', 'complete' ),
		'view_item'          => __( 'View Members', 'complete' ),
		'search_items'       => __( 'Search Team Members', 'complete' ),
		'not_found'          => __( 'No Team members found', 'complete' ),
		'not_found_in_trash' => __( 'No Team members found in the Trash', 'complete' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Our Team'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Manage Team',
		'public'        => true,
		'menu_position' => null,
		'menu_icon'		=> 'dashicons-groups',
		'supports'      => array( 'title', 'editor', 'thumbnail' ),
		'rewrite' => array('slug' => 'our-team'),
		'has_archive'   => true,
		'exclude_from_search' => true,
	);
	register_post_type( 'team', $args );
}
add_action( 'init', 'my_custom_post_team' );

// add meta box to team
add_action( 'admin_init', 'my_team_admin_function' );
function my_team_admin_function() {
    add_meta_box( 'team_meta_box',
        'Member Info',
        'display_team_meta_box',
        'team', 'normal', 'high'
    );
}
// add meta box form to team
function display_team_meta_box( $team ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $designation = esc_html( get_post_meta( $team->ID, 'designation', true ) );
	
    $facebook = get_post_meta( $team->ID, 'facebook', true );
	$facebooklink = esc_url( get_post_meta( $team->ID, 'facebooklink', true ) );

    $twitter = get_post_meta( $team->ID, 'twitter', true );
	$twitterlink = esc_url( get_post_meta( $team->ID, 'twitterlink', true ) );

	$googleplus = get_post_meta( $team->ID, 'googleplus', true );
	$googlepluslink = esc_url( get_post_meta( $team->ID, 'googlepluslink', true ) );	

    $linkedin = get_post_meta( $team->ID, 'linkedin', true );
	$linkedinlink = esc_url( get_post_meta( $team->ID, 'linkedinlink', true ) );

    $pinterest = get_post_meta( $team->ID, 'pinterest', true );
	$pinterestlink = get_post_meta( $team->ID, 'pinterestlink', true );
    ?>
    <table width="100%">
        <tr>
            <td width="20%">Designation </td>
            <td width="80%"><input type="text" name="designation" value="<?php echo $designation; ?>" /></td>
        </tr>
        <tr>
            <td width="20%">Social link 1</td>
            <td width="40%"><input type="text" name="facebook" value="<?php echo $facebook; ?>" /></td>
            <td width="40%"><input style="width:500px;" type="text" name="facebooklink" value="<?php echo $facebooklink; ?>" /></td>
        </tr>
        <tr>
            <td width="20%">Social Link 2</td>
            <td width="40%"><input type="text" name="twitter" value="<?php echo $twitter; ?>" /></td>
            <td width="40%"><input style="width:500px;" type="text" name="twitterlink" value="<?php echo $twitterlink; ?>" /></td>
        </tr>
        <tr>
            <td width="20%">Social Link 3</td>
            <td width="40%"><input type="text" name="googleplus" value="<?php echo $googleplus; ?>" /></td>
            <td width="40%"><input style="width:500px;" type="text" name="googlepluslink" value="<?php echo $googlepluslink; ?>" /></td>
        </tr>
        <tr>
            <td width="20%">Social Link 4</td>
            <td width="40%"><input type="text" name="linkedin" value="<?php echo $linkedin; ?>" /></td>
            <td width="40%"><input style="width:500px;" type="text" name="linkedinlink" value="<?php echo $linkedinlink; ?>" /></td>
        </tr>        
        <tr>
            <td width="20%">Social Link 5</td>
            <td width="40%"><input type="text" name="pinterest" value="<?php echo $pinterest; ?>" /></td>
            <td width="40%"><input style="width:500px;" type="text" name="pinterestlink" value="<?php echo $pinterestlink; ?>" /></td>
        </tr>
        <tr>
        	<td width="100%" colspan="3"><label style="font-size:12px;"><strong>Note:</strong> Icon name should be in lowercase without space. More social icons can be found at: http://fortawesome.github.io/Font-Awesome/icons/</label> </td>
        </tr>
    </table>
    <?php    
}
// save team meta box form data
add_action( 'save_post', 'add_team_fields_function', 10, 2 );
function add_team_fields_function( $team_id, $team ) {
    // Check post type for testimonials
    if ( $team->post_type == 'team' ) {
        // Store data in post meta table if present in post data
        if ( isset($_POST['designation']) ) {
            update_post_meta( $team_id, 'designation', $_POST['designation'] );
        }
        if ( isset($_POST['facebook']) ) {
            update_post_meta( $team_id, 'facebook', $_POST['facebook'] );
        }
		if ( isset($_POST['facebooklink']) ) {
            update_post_meta( $team_id, 'facebooklink', $_POST['facebooklink'] );
        }
        if ( isset($_POST['twitter']) ) {
            update_post_meta( $team_id, 'twitter', $_POST['twitter'] );
        }
		if ( isset($_POST['twitterlink']) ) {
            update_post_meta( $team_id, 'twitterlink', $_POST['twitterlink'] );
        }
        if ( isset($_POST['googleplus']) ) {
            update_post_meta( $team_id, 'googleplus', $_POST['googleplus'] );
        }
		if ( isset($_POST['googlepluslink']) ) {
            update_post_meta( $team_id, 'googlepluslink', $_POST['googlepluslink'] );
        }		
        if ( isset($_POST['linkedin']) ) {
            update_post_meta( $team_id, 'linkedin', $_POST['linkedin'] );
        }
		if ( isset($_POST['linkedinlink']) ) {
            update_post_meta( $team_id, 'linkedinlink', $_POST['linkedinlink'] );
        }
		if ( isset($_POST['pinterest']) ) {
            update_post_meta( $team_id, 'pinterest', $_POST['pinterest'] );
        }
		if ( isset($_POST['pinterestlink']) ) {
            update_post_meta( $team_id, 'pinterestlink', $_POST['pinterestlink'] );
        }
    }
}

// Shortcode Our Team
// [ourteam col="4" show="4" excerptlength="25"]

function ourteam_func( $atts ) {
   extract( shortcode_atts( array(
		'col' => '3',
		'show' => '3',
		'excerptlength' => '25',
	), $atts ) );
	  extract( shortcode_atts( array( 'show' => $show,), $atts ) ); $ourtm = ''; wp_reset_query(); 
	  
	$ourtm = '';
	$args = array( 'post_type' => 'team', 'posts_per_page' => $show, 'post__not_in' => get_option('sticky_posts'), 'orderby' => 'date', 'order' => 'asc' );
	query_posts( $args );
	$n = 0;
	if ( have_posts() ) {


				$ourtm .= '<div class="teamflex">';


		while ( have_posts() ) { 
			$n++;
			the_post();
			$designation = esc_html( get_post_meta( get_the_ID(), 'designation', true ) );
			
			$facebook = get_post_meta( get_the_ID(), 'facebook', true );
			$facebooklink = get_post_meta( get_the_ID(), 'facebooklink', true );
			
			$twitter = get_post_meta( get_the_ID(), 'twitter', true );
			$twitterlink = get_post_meta( get_the_ID(), 'twitterlink', true );
			
			$googleplus = get_post_meta( get_the_ID(), 'googleplus', true );
			$googlepluslink = get_post_meta( get_the_ID(), 'googlepluslink', true );
			
			$linkedin = get_post_meta( get_the_ID(), 'linkedin', true );
			$linkedinlink = get_post_meta( get_the_ID(), 'linkedinlink', true );
			
			$pinterest = get_post_meta( get_the_ID(), 'pinterest', true );
			$pinterestlink = get_post_meta( get_the_ID(), 'pinterestlink', true );			

			if( $col == 1 ){
				$ourtm .= '<div class="col-md-12 col-center';
			}elseif( $col == 2 ){
				$ourtm .= '<div class="col-md-4 col-sm-4';
			}elseif( $col == 3 ){
				$ourtm .= '<div class="col-md-4 col-sm-4';
			}elseif( $col == 4 ){
				$ourtm .= '<div class="col-md-3';
			}
 
				$ourtm .= '">';
 
			$ourtm .= '<div class="c-item">
			<a href="'.get_permalink().'" title="'.get_the_title().'">'.( (get_the_post_thumbnail( get_the_ID(), 'thumbnail') != '') ? get_the_post_thumbnail( get_the_ID(), 'full') : '<img src="'.get_template_directory_uri().'/images/team_thumb.jpg" />' ).'<div class="blur"></div>';
                $ourtm .= '<div class="caption"><div class="caption-text"><h1>'.get_the_title().'</h1>';                
					if( $designation != '' ){
                    $ourtm .= '<p>'.$designation.'</p>';
					}                    
                $ourtm .= '</div></div></a></div></div>
				';
		}

				$ourtm .= '</div>';

	}else{
		$ourtm .= '<div class="cols4">
    <div class="team-thumb"><a title="Zahera" href="#"><img width="270" height="270" sizes="(max-width: 270px) 100vw, 270px" alt="zahera" class="attachment-full size-full wp-post-image" src="'.get_template_directory_uri().'/images/zahera.jpg"></a></div>
<div class="team-infobox"><h3><a href="#">Zahera</a></h3><span>(HR)</span><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel tempor sem. Vestibulum suscipit faucibus sem ut porta. Integer ut justo euismod, auctor turpis et</p><div class="social-icons"><a target="_blank" title="linkedin" href="#"><i class="fa fa-linkedin fa-lg"></i></a><a target="_blank" title="twitter" href="#"><i class="fa fa-twitter fa-lg"></i></a><a target="_blank" title="facebook" href="#"><i class="fa fa-facebook fa-lg"></i></a><a target="_blank" title="tumblr" href="#"><i class="fa fa-tumblr fa-lg"></i></a><a target="_blank" title="google-plus" href="#"><i class="fa fa-google-plus fa-lg"></i></a></div></div></div><div class="cols4"><div class="team-thumb"><a title="Alex" href="#"><img width="270" height="270" sizes="(max-width: 270px) 100vw, 270px" alt="Alex" class="attachment-full size-full wp-post-image" src="'.get_template_directory_uri().'/images/alex.jpg"></a></div><div class="team-infobox"><h3><a href="#">Alex</a></h3><span>(CEO)</span><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel tempor sem. Vestibulum suscipit faucibus sem ut porta. Integer ut justo euismod, auctor turpis et</p><div class="social-icons"><a target="_blank" title="linkedin" href="#"><i class="fa fa-linkedin fa-lg"></i></a><a target="_blank" title="twitter" href="#"><i class="fa fa-twitter fa-lg"></i></a><a target="_blank" title="facebook" href="#"><i class="fa fa-facebook fa-lg"></i></a><a target="_blank" title="tumblr" href="#"><i class="fa fa-tumblr fa-lg"></i></a><a target="_blank" title="google-plus" href="#"><i class="fa fa-google-plus fa-lg"></i></a></div></div></div><div class="cols4"><div class="team-thumb"><a title="Sara" href="#"><img width="270" height="270" sizes="(max-width: 270px) 100vw, 270px" alt="Alex" class="attachment-full size-full wp-post-image" src="'.get_template_directory_uri().'/images/sara.jpg"></a></div><div class="team-infobox"><h3><a href="#">Sara</a></h3><span>(CCO)</span><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel tempor sem. Vestibulum suscipit faucibus sem ut porta. Integer ut justo euismod, auctor turpis et</p>
<div class="social-icons"><a target="_blank" title="linkedin" href="#"><i class="fa fa-linkedin fa-lg"></i></a><a target="_blank" title="twitter" href="#"><i class="fa fa-twitter fa-lg"></i></a><a target="_blank" title="facebook" href="#"><i class="fa fa-facebook fa-lg"></i></a><a target="_blank" title="tumblr" href="#"><i class="fa fa-tumblr fa-lg"></i></a><a target="_blank" title="google-plus" href="#"><i class="fa fa-google-plus fa-lg"></i></a></div></div></div><div class="cols4">
<div class="team-thumb"><a title="Mark" href="#"><img width="270" height="270" sizes="(max-width: 270px) 100vw, 270px" alt="Mark" class="attachment-full size-full wp-post-image" src="'.get_template_directory_uri().'/images/mark.jpg"></a></div><div class="team-infobox"><h3><a href="#">Mark</a></h3><span>(Manager)</span><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel tempor sem. Vestibulum suscipit faucibus sem ut porta. Integer ut justo euismod, auctor turpis et</p><div class="social-icons"><a target="_blank" title="linkedin" href="#"><i class="fa fa-linkedin fa-lg"></i></a><a target="_blank" title="twitter" href="#"><i class="fa fa-twitter fa-lg"></i></a><a target="_blank" title="facebook" href="#"><i class="fa fa-facebook fa-lg"></i></a><a target="_blank" title="tumblr" href="#"><i class="fa fa-tumblr fa-lg"></i></a><a target="_blank" title="google-plus" href="#"><i class="fa fa-google-plus fa-lg"></i></a></div>
    </div>
  </div>
  ';
	}
	wp_reset_query();
	
	$ourtm .= '';
    return $ourtm;
}
add_shortcode( 'ourteam', 'ourteam_func' );



function wwd_func( $atts ) {
   extract( shortcode_atts( array(), $atts ) );
	  extract( shortcode_atts( array( 'show' => $show,), $atts ) );

	$wwdtm .= '<section id="featured-box">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="fitem">
                        <div class="ficon"><img src="'.tl_get_option("f_icon1").'" alt=""></div>
                        <div class="ftitle">'.tl_get_option("f_title1").'</div>
                        <div class="fdesc"><p>'.tl_get_option("f_text1").'</p>
                        <a href="'.tl_get_option('f_link1').'"><i class="fa fa-search"></i>Learn more</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="fitem">
                        <div class="ficon"><img src="'.tl_get_option("f_icon2").'" alt=""></div>
                        <div class="ftitle">'.tl_get_option("f_title2").'</div>
                        <div class="fdesc"><p>'.tl_get_option("f_text2").'</p>
                        <a href="'.tl_get_option('f_link2').'"><i class="fa fa-search"></i>Learn more</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="fitem">
                        <div class="ficon"><img src="'.tl_get_option("f_icon3").'" alt=""></div>
                        <div class="ftitle">'.tl_get_option("f_title3").'</div>
                        <div class="fdesc"><p>'.tl_get_option("f_text3").'</p>
                        <a href="'.tl_get_option('f_link3').'"><i class="fa fa-search"></i>Learn more</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>';
    return $wwdtm;
}
add_shortcode( 'wwdo', 'wwd_func' );

function con_func( $atts ) {
   extract( shortcode_atts( array(), $atts ) );
	  extract( shortcode_atts( array( 'show' => $show,), $atts ) );

	$contm .= '<div class="contact-f">
                <div class="col-md-4 col-sm-4">
                    <div class="icon-box"><img src="'.tl_get_option('co_icon1').'" alt=""></div>
                    <p><a href="mailto:'.tl_get_option('contact_email').'">'.tl_get_option('contact_email').'</a></p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="icon-box"><img src="'.tl_get_option('co_icon2').'" alt=""></div>
                    <p>'.tl_get_option('contact_phone').'</p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="icon-box"><img src="'.tl_get_option('co_icon3').'" alt=""></div>
                    <p>'.tl_get_option('contact_address').'</p>
                </div>
            </div>';
    return $contm;
}
add_shortcode( 'condo', 'con_func' );