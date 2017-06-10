<?php
/**
 * Template Name: Page "Thank you"
 */
?>
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Thomaslawplc
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css" rel="stylesheet">
<?php wp_head(); ?>
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/cropped-Thomas-Law-Logo-PNG-32x32.png" sizes="32x32" />
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/cropped-Thomas-Law-Logo-PNG-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/images/cropped-Thomas-Law-Logo-PNG-180x180.png" />
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/cropped-Thomas-Law-Logo-PNG-270x270.png" />
</head>

<body <?php body_class(); ?>>
	<div class="loader">
            <div class="spinner">
              <div class="double-bounce1"></div>
              <div class="double-bounce2"></div>
            </div>
        </div>
	 <div class="mobileMenu-shadow"></div>
    <div class="mobileMenu" id="mobileMenu">
        <div class="mclose"><button class="mobile-close mobile-toggler"><a href="#" class="closeb"></a></button></div>
        <?php wp_nav_menu( array( 'container_class' => 'mmenu', 'menu_class' => 'rmenu', 'theme_location' => 'primary' ) ); ?>
        <ul class="social-circle social-mobile">
            <span>Follow us:</span>
            <li class=""><a href="<?php echo tl_get_option('yolink'); ?>"><i class="fa fa-youtube-play"></i></a></li>
            <li class=""><a href="<?php echo tl_get_option('inlink'); ?>"><i class="fa fa-linkedin"></i></a></li>
            <li class=""><a href="<?php echo tl_get_option('facelink'); ?>"><i class="fa fa-facebook"></i></a></li>            
            <li class=""><a href="<?php echo tl_get_option('twilink'); ?>"><i class="fa fa-twitter"></i></a></li>
        </ul>
    </div>
<!--HEADER STARTS-->
<div class="nav-container">
        <div class="top-bar overlay-bar">
            <div class="container"> <div class="header-box">
                <div class="row utility-menu">
                    <div class="col-sm-12">
                        <div class="utility-inner clearfix">                            
                <span class="alignnleft hide-sm ul"><?php if( $ad = tl_get_option('l_header') ): ?><?php echo $ad; ?><?php endif; ?></span> 
                <span class="emltp alignncenter hide-sm"><?php if( $ad = tl_get_option('c_header') ): ?><?php echo $ad; ?><?php endif; ?></span>                
                <span class="alignnright ur"><?php if( $ad = tl_get_option('r_header') ): ?><?php echo $ad; ?><?php endif; ?></span>                            
                        </div>
                    </div>
                </div>
                <!--end of row-->
                <div class="row nav-menu">
                    <div class="col-sm-12">
                        <div class="header-block">
                            <div id="topmenus" class="navbar">                              
                            <?php
        $logo = tl_get_option('logo');
        $brand = !empty($logo) ? '<img class="logo logo-light" src="'.esc_url( $logo ).'" alt="'.esc_attr(get_bloginfo( 'name' )).'" >' : get_bloginfo( 'name' );    ?>    
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logoblock"><?php echo $brand; ?></a>                                                           
                                
                <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
                <span class="alignnright hide-md appblock"><?php if( $ad = tl_get_option('b_header') ): ?><?php echo $ad; ?><?php endif; ?></span>
                <div class="mobile-toggle">
                        <div id="nav-icon3" class="mobile-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                </div>
                
                </div>
                                <!--MENU END-->
                            
                            
                        </div>
                        <!--end of row-->
                        
                    </div>
                </div></div>
                <!--end of container-->
        </div>
        </div>
    </div>
<!--HEADER-->
<div class="">
	      <div class="page_head-thank"></div>
	</div>
<div id="thank-block">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Thank you!</h1>
				 <div id="hero-socs">
                                <div class="talk-bubble tri-right round right-top">
                                    <div class="talktext">
                                        <p>We will be in touch<br>shortly.</p>
                                    </div>
                                </div>
                                <div class="avatara"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/m-thomas-help.jpg" alt=""></div>                              
                 </div>
                 <a href="javascript: history.go(-1)" class="prevarrow">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/back.png" alt="">
            </a>
                 <ul class="social-circle social-thank"><span>Follow us:</span><li class=""><a href="https://www.youtube.com/channel/UCt1Z9EKUuGDk7ubGYmWJ1Hw" class="gp sbutton">Google Plus</a></li><li class=""><a href="http://www.linkedin.com/profile/view?id=margeaux-thomas-22a25261" class="ldw sbutton">LinkedIn</a></li><li class=""><a href="http://www.facebook.com/thomaslawplc" class="fb sbutton">Facebook</a></li><li class=""><a href="https://twitter.com/thomaslawplc" class="tw sbutton">Twitter</a></li></ul>
			
			</div>
			
		</div>
	</div>
</div>

<?php
get_footer();