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
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css" rel="stylesheet">
<?php wp_head(); ?>
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/cropped-Thomas-Law-Logo-PNG-32x32.png" sizes="32x32" />
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/cropped-Thomas-Law-Logo-PNG-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/images/cropped-Thomas-Law-Logo-PNG-180x180.png" />
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/cropped-Thomas-Law-Logo-PNG-270x270.png" />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
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


<!--Slider START-->
    <?php if (is_home() && is_front_page()) { ?>
    <div class="main-container">
        <section id="video-box" class="vbox">
            <style>
                @media screen and (max-width:1023px){
                    .vbox {
                        background: url(<?php echo tl_get_option('v_bg'); ?>) 70% 0% no-repeat;
                        -webkit-background-size: cover;
                        background-size: cover;}
                    }
                    video#bgVideo {
                        position: absolute;
                        top: 0px; 
                        left: 0px; 
                        min-width: 100%; 
                        min-height: 100%;
                        z-index: -1;
                    }
                }
            </style>
            <div class="video-overlay"></div>
            <video id="bgVideo" class="hide-sm" autoplay muted loop poster="<?php echo tl_get_option('v_bg'); ?>">
                <source src="<?php echo tl_get_option('v_link'); ?>" type="video/mp4">
            </video>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="t-title">Legal counsel, who gets you, gets to work, <br>and gets results.</h1>
                        <!--<h1 class="t-title">About the Founder</h1>-->
                        <a href="#" class="btn btn-primary btn-white video" data-video="<?php echo tl_get_option('video_link'); ?>" data-toggle="modal" data-target="#videoModal"><i class="fa fa-play"></i>WATCH VIDEO</a>
                        <a href="" onclick="Calendly.showPopupWidget('https://calendly.com/mthomas-3');return false;" class="btn btn-primary btn-filled">Schedule a consultation</a>
                        <div class="col-md-6 col-md-offset-6 alignnright" id="hero-soc" style="visibility: hidden;">
                            <a href="#contact-box">
                                <div class="talk-bubble tri-right round right-top">
                                    <div class="talktext">
                                        <p><?php echo tl_get_option('slider_mgo'); ?></p>
                                    </div>
                                </div>
                                <div class="avatara"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/m-thomas-help.jpg" alt=""></div>
                            </a>                                
                        </div>                        
                    </div>
                </div>
            </div>
        </section>
    </div>

                        <!-- MODAL -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-video">
                    <div class="videowrapper">
                        <iframe width="100%" height="366" src="" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main_badges">
    <div class="col-lg-12 rated_title">Rated by</div>
    <div class="col-lg-4 avvo">
        <a rel="me" target="_blank" href="https://www.avvo.com/attorneys/22102-va-diana-thomas-1822279.html"><svg class="avvo-badge" id="js-avvo-badge-rating" style="enable-background:new 0 0 280 220; height: 120px; width: 155px;" version="1.1" viewbox="0 0 280 220" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px"><style type="text/css">@font-face{font-family:'Circular-Bold';src:url("https://assets.avvo.com/avvo-ui/0.20.5/fonts/avvo_ui/circular/circular_bold.woff") format("woff")}.avvo-badge .st0{fill:#153860 !important}.avvo-badge .st1{fill:#010101 !important}.avvo-badge .st2{fill:#15467A !important}.avvo-badge .st3{fill:#FFFFFF !important}.avvo-badge .st4{fill:none !important}.avvo-badge .st5{fill:#F89838 !important}.avvo-badge .st6{fill:#ED514C !important}.avvo-badge .st7{font-family:'Circular-Bold', Avenir Next, Avenir, Century Gothic, sans-serif !important;font-weight:bold !important}.avvo-badge .st8{font-size:20px !important}.avvo-badge .st9{letter-spacing:-1px !important}.avvo-badge .st10{font-family:'Circular-Bold', Avenir Next, Avenir, Century Gothic, sans-serif !important;font-size:14px}.avvo-badge .st11{font-size:65px !important}.avvo-badge .st12{text-anchor:middle !important}.avvo-badge .st13{fill:#969696 !important}.avvo-badge .st14{display:none !important}</style><g><g><g><polygon class="st0" points="82.612,160.003 1.433,160.003 20.448,142.715 1.433,125.206 82.612,125.206"></polygon><polygon class="st1" points="82.628,159.993 32.616,145.386 32.616,110.589 82.628,125.195"></polygon></g><g><polygon class="st2" points="192.651,160.003 273.831,160.003 254.816,142.715 273.831,125.206 192.651,125.206"></polygon><polygon class="st1" points="192.635,159.993 242.646,145.386 242.646,110.589 192.635,125.195"></polygon></g></g><g><path class="st3" d="M136.336,206.992c-17.217-6.189-52.512-18.813-72.559-25.983l-9.092-3.252V18.147l83.005-11.762l82.89,11.764 v159.607l-2.651,0.949c-9.44,3.38-57.609,20.627-78.883,28.287l-1.354,0.487L136.336,206.992z"></path><path class="st2" d="M137.689,10.425l78.889,11.196c0,35.66,0,153.319,0,153.319c-17.826,6.381-59.655,21.363-78.889,28.289 c-19.263-6.925-61.152-21.903-79.005-28.288c0,0,0-117.659,0-153.319L137.689,10.425 M137.69,2.345l-1.123,0.159L57.562,13.7 l-6.878,0.975v6.946V174.94v5.635l5.306,1.898l5.289,1.892c19.626,7.019,56.156,20.084,73.703,26.392l2.709,0.974l2.708-0.975 c18.259-6.574,58.171-20.872,78.875-28.283l5.304-1.899v-5.633V21.621v-6.945l-6.876-0.976L138.814,2.504L137.69,2.345 L137.69,2.345z"></path></g><g><path class="st3" d="M216.579,21.62l-78.889-11.196L58.685,21.62c0,35.66,0,153.319,0,153.319 c17.853,6.385,59.742,21.363,79.005,28.288c19.234-6.926,61.063-21.907,78.889-28.288 C216.579,174.94,216.579,57.281,216.579,21.62z"></path></g><g><path class="st2" d="M132.166,34.841c0-1.085-0.842-1.916-1.856-1.916c-1.015,0-1.839,0.831-1.839,1.916 c0,1.085,0.824,1.9,1.839,1.9C131.324,36.741,132.166,35.927,132.166,34.841 M125.738,34.841c0-2.509,2.063-4.494,4.588-4.494 c2.509,0,4.572,1.985,4.572,4.494c0,2.493-2.063,4.477-4.572,4.477C127.801,39.318,125.738,37.334,125.738,34.841 M117.558,38.845 l-0.773-8.361h2.904l0.395,5.19c0,0.068,0.052,0.119,0.138,0.034c1.083-0.899,1.907-2.697,2.234-5.224h2.955 c-0.206,3.918-3.265,8.802-7.27,8.802C117.867,39.285,117.592,39.183,117.558,38.845 M107.952,38.845l-0.773-8.361h2.904 l0.395,5.19c0,0.068,0.051,0.119,0.137,0.034c1.083-0.899,1.908-2.697,2.234-5.224h2.956c-0.206,3.918-3.265,8.802-7.27,8.802 C108.26,39.285,107.986,39.183,107.952,38.845 M99.1,34.722h3.334l-0.257-3.408c0-0.102-0.086-0.119-0.172-0.034 C101.146,32.009,100.097,33.23,99.1,34.722 M102.624,37.233H97.64c-0.343,0.645-0.653,1.323-0.91,2.001h-3.215 c1.667-4.698,6.548-11.175,10.501-11.65c0.584-0.068,0.928,0.068,0.963,0.526l0.996,11.124h-3.196L102.624,37.233z"></path><g><path class="st2" d="M141.668,34.827h-0.905v4.264h-2.552V27.639h4.539c2.261,0,3.715,1.551,3.715,3.586 c0,1.551-0.856,2.73-2.261,3.231l2.326,4.636h-2.811L141.668,34.827z M142.265,32.63c1.05,0,1.615-0.581,1.615-1.389 c0-0.856-0.565-1.389-1.615-1.389h-1.502v2.778H142.265z"></path><path class="st2" d="M149.277,34.456l1.89-0.291c0.436-0.065,0.581-0.275,0.581-0.549c0-0.468-0.404-0.872-1.179-0.872 c-0.856,0-1.325,0.581-1.373,1.179l-2.132-0.436c0.097-1.147,1.163-2.665,3.521-2.665c2.601,0,3.554,1.454,3.554,3.101v3.925 c0,0.63,0.081,1.163,0.097,1.244h-2.213c-0.016-0.065-0.081-0.355-0.081-0.905c-0.42,0.678-1.195,1.131-2.261,1.131 c-1.761,0-2.778-1.163-2.778-2.439C146.903,35.457,147.953,34.649,149.277,34.456z M151.748,35.942v-0.355l-1.518,0.242 c-0.517,0.081-0.905,0.323-0.905,0.888c0,0.42,0.275,0.824,0.953,0.824C151.005,37.541,151.748,37.185,151.748,35.942z"></path><path class="st2" d="M158.421,31.064h1.567v2.148h-1.567v3.004c0,0.662,0.355,0.84,0.888,0.84c0.258,0,0.501-0.048,0.646-0.081 v2.035c-0.097,0.048-0.501,0.226-1.276,0.226c-1.664,0-2.681-0.985-2.681-2.584v-3.441h-1.421v-2.148h0.404 c0.84,0,1.244-0.565,1.244-1.308v-1.034h2.197V31.064z"></path><path class="st2" d="M162.298,27.171c0.808,0,1.454,0.646,1.454,1.438c0,0.791-0.646,1.438-1.454,1.438 c-0.775,0-1.421-0.646-1.421-1.438C160.877,27.817,161.523,27.171,162.298,27.171z M161.087,39.091v-8.028h2.455v8.028H161.087z"></path><path class="st2" d="M167.5,39.091h-2.455v-8.028h2.374v0.921c0.436-0.759,1.421-1.131,2.245-1.131 c2.019,0,2.924,1.438,2.924,3.198v5.04h-2.455v-4.62c0-0.791-0.42-1.389-1.308-1.389c-0.808,0-1.325,0.598-1.325,1.405V39.091z"></path><path class="st2" d="M175.61,38.93c0.162,0.775,0.808,1.341,1.728,1.341c1.228,0,1.987-0.598,1.987-2.051v-0.372 c-0.291,0.436-0.985,0.905-2.148,0.905c-2.132,0-3.731-1.68-3.731-3.909c0-2.116,1.535-3.925,3.731-3.925 c1.308,0,2.003,0.581,2.229,1.001v-0.856h2.342v7.026c0,2.31-1.292,4.313-4.297,4.313c-2.31,0-3.78-1.421-4.006-2.859 L175.61,38.93z M179.342,34.843c0-1.098-0.791-1.777-1.712-1.777c-0.921,0-1.728,0.678-1.728,1.777s0.743,1.777,1.728,1.777 C178.631,36.62,179.342,35.942,179.342,34.843z"></path></g></g><rect class="st2" height="34.841" width="210.276" x="32.494" y="110.567"></rect><g><path class="st2" d="M92.309,161.886v10.404h-2.502v-10.404h-4.032v-2.357H96.34v2.357H92.309z"></path><path class="st2" d="M99.725,163.164c0.66,0,1.275,0.117,1.845,0.351c0.57,0.234,1.062,0.559,1.477,0.973s0.738,0.909,0.972,1.484 c0.234,0.576,0.352,1.206,0.352,1.891c0,0.684-0.117,1.311-0.352,1.881c-0.233,0.57-0.558,1.065-0.972,1.485 s-0.906,0.746-1.477,0.98c-0.569,0.234-1.185,0.351-1.845,0.351s-1.275-0.116-1.845-0.351c-0.57-0.234-1.062-0.561-1.477-0.98 c-0.413-0.42-0.737-0.915-0.972-1.485s-0.351-1.197-0.351-1.881c0-0.685,0.116-1.314,0.351-1.891 c0.234-0.575,0.559-1.07,0.972-1.484c0.414-0.414,0.906-0.738,1.477-0.973C98.45,163.281,99.065,163.164,99.725,163.164z M99.725,170.382c0.288,0,0.57-0.054,0.846-0.162c0.276-0.107,0.517-0.267,0.721-0.477s0.369-0.471,0.495-0.783 c0.126-0.312,0.188-0.678,0.188-1.098s-0.062-0.786-0.188-1.099c-0.126-0.312-0.291-0.572-0.495-0.782s-0.444-0.369-0.721-0.478 c-0.275-0.107-0.558-0.162-0.846-0.162s-0.57,0.055-0.846,0.162c-0.276,0.108-0.517,0.268-0.72,0.478 c-0.205,0.21-0.369,0.471-0.495,0.782c-0.126,0.312-0.189,0.679-0.189,1.099s0.063,0.786,0.189,1.098 c0.126,0.312,0.29,0.573,0.495,0.783c0.203,0.21,0.443,0.369,0.72,0.477C99.155,170.328,99.437,170.382,99.725,170.382z"></path><path class="st2" d="M105.809,175.71v-12.276h2.321v1.08c0.204-0.348,0.54-0.647,1.009-0.899c0.468-0.252,1.037-0.378,1.71-0.378 c0.647,0,1.224,0.117,1.728,0.351c0.504,0.234,0.933,0.559,1.287,0.972c0.354,0.414,0.621,0.9,0.801,1.458 c0.181,0.559,0.271,1.168,0.271,1.827c0,0.673-0.1,1.294-0.297,1.863c-0.198,0.57-0.48,1.062-0.847,1.476 s-0.807,0.738-1.322,0.973c-0.517,0.233-1.087,0.351-1.711,0.351c-0.611,0-1.137-0.105-1.574-0.314 c-0.438-0.21-0.766-0.465-0.981-0.766v4.284H105.809z M112.576,167.862c0-0.792-0.213-1.404-0.639-1.836 c-0.427-0.433-0.945-0.648-1.558-0.648c-0.312,0-0.6,0.058-0.863,0.171c-0.265,0.114-0.498,0.276-0.702,0.486 s-0.363,0.468-0.478,0.773c-0.114,0.307-0.171,0.657-0.171,1.054c0,0.396,0.057,0.747,0.171,1.053s0.273,0.567,0.478,0.783 s0.438,0.381,0.702,0.495c0.264,0.114,0.552,0.171,0.863,0.171c0.612,0,1.131-0.219,1.558-0.657 C112.364,169.27,112.576,168.654,112.576,167.862z"></path><path class="st2" d="M128.146,169.374h-5.184l-1.062,2.916h-2.628l4.896-12.762h2.88l4.86,12.762h-2.7L128.146,169.374z M123.79,167.106h3.527l-1.764-4.824L123.79,167.106z"></path><path class="st2" d="M135.473,163.434h1.781v2.124h-1.781v3.708c0,0.385,0.087,0.651,0.261,0.802 c0.174,0.149,0.435,0.225,0.783,0.225c0.144,0,0.287-0.006,0.432-0.018c0.144-0.012,0.246-0.03,0.306-0.055v1.98 c-0.107,0.048-0.272,0.096-0.495,0.144c-0.222,0.048-0.507,0.072-0.854,0.072c-0.864,0-1.548-0.24-2.052-0.72 c-0.504-0.48-0.757-1.152-0.757-2.017v-4.122h-1.602v-2.124h0.45c0.468,0,0.812-0.135,1.035-0.404 c0.222-0.271,0.333-0.604,0.333-0.999v-1.242h2.16V163.434z"></path><path class="st2" d="M141.737,163.434h1.781v2.124h-1.781v3.708c0,0.385,0.086,0.651,0.26,0.802 c0.174,0.149,0.436,0.225,0.783,0.225c0.145,0,0.287-0.006,0.432-0.018s0.246-0.03,0.307-0.055v1.98 c-0.107,0.048-0.273,0.096-0.496,0.144c-0.221,0.048-0.506,0.072-0.854,0.072c-0.865,0-1.549-0.24-2.053-0.72 c-0.504-0.48-0.756-1.152-0.756-2.017v-4.122h-1.602v-2.124h0.449c0.469,0,0.812-0.135,1.035-0.404 c0.223-0.271,0.334-0.604,0.334-0.999v-1.242h2.16V163.434z"></path><path class="st2" d="M148.989,163.164c0.66,0,1.275,0.117,1.846,0.351c0.57,0.234,1.062,0.559,1.477,0.973 s0.738,0.909,0.971,1.484c0.234,0.576,0.352,1.206,0.352,1.891c0,0.684-0.117,1.311-0.352,1.881 c-0.232,0.57-0.557,1.065-0.971,1.485s-0.906,0.746-1.477,0.98s-1.186,0.351-1.846,0.351s-1.275-0.116-1.844-0.351 c-0.57-0.234-1.062-0.561-1.477-0.98s-0.738-0.915-0.973-1.485s-0.35-1.197-0.35-1.881c0-0.685,0.115-1.314,0.35-1.891 c0.234-0.575,0.559-1.07,0.973-1.484s0.906-0.738,1.477-0.973C147.714,163.281,148.329,163.164,148.989,163.164z M148.989,170.382 c0.289,0,0.57-0.054,0.846-0.162c0.277-0.107,0.518-0.267,0.721-0.477c0.205-0.21,0.369-0.471,0.496-0.783 c0.125-0.312,0.188-0.678,0.188-1.098s-0.062-0.786-0.188-1.099c-0.127-0.312-0.291-0.572-0.496-0.782 c-0.203-0.21-0.443-0.369-0.721-0.478c-0.275-0.107-0.557-0.162-0.846-0.162c-0.287,0-0.57,0.055-0.846,0.162 c-0.275,0.108-0.516,0.268-0.719,0.478c-0.205,0.21-0.369,0.471-0.496,0.782c-0.125,0.312-0.189,0.679-0.189,1.099 s0.064,0.786,0.189,1.098c0.127,0.312,0.291,0.573,0.496,0.783c0.203,0.21,0.443,0.369,0.719,0.477 C148.419,170.328,148.702,170.382,148.989,170.382z"></path><path class="st2" d="M160.473,165.81c-0.24-0.047-0.479-0.071-0.719-0.071c-0.312,0-0.607,0.042-0.883,0.126 s-0.516,0.222-0.719,0.414c-0.205,0.191-0.369,0.447-0.496,0.765c-0.125,0.318-0.189,0.717-0.189,1.197v4.05h-2.393v-8.856h2.32 v1.314c0.133-0.288,0.305-0.524,0.514-0.711c0.211-0.186,0.432-0.327,0.666-0.423s0.469-0.162,0.703-0.198 c0.232-0.036,0.445-0.054,0.639-0.054c0.096,0,0.188,0.003,0.279,0.009c0.09,0.006,0.182,0.015,0.277,0.027V165.81z"></path><path class="st2" d="M164.11,172.29h-2.395v-8.856h2.322v1.099c0.275-0.456,0.65-0.792,1.125-1.008 c0.475-0.217,0.951-0.324,1.432-0.324c0.551,0,1.027,0.093,1.43,0.279c0.402,0.186,0.736,0.435,1,0.746 c0.264,0.312,0.459,0.685,0.584,1.116c0.127,0.433,0.189,0.889,0.189,1.368v5.58h-2.395v-5.166c0-0.504-0.129-0.924-0.387-1.26 s-0.674-0.504-1.25-0.504c-0.529,0-0.938,0.177-1.225,0.53c-0.287,0.354-0.432,0.79-0.432,1.306V172.29z"></path><path class="st2" d="M179.716,169.752c-0.107,0.384-0.279,0.747-0.514,1.089s-0.52,0.64-0.855,0.892s-0.729,0.453-1.178,0.603 c-0.451,0.15-0.945,0.225-1.486,0.225c-0.611,0-1.193-0.104-1.744-0.314c-0.553-0.21-1.039-0.519-1.459-0.927 s-0.754-0.906-0.998-1.494c-0.246-0.588-0.369-1.254-0.369-1.998c0-0.708,0.119-1.351,0.359-1.926 c0.24-0.576,0.561-1.065,0.963-1.468c0.402-0.401,0.867-0.714,1.395-0.936s1.074-0.333,1.639-0.333 c1.379,0,2.453,0.408,3.223,1.224c0.768,0.816,1.15,1.938,1.15,3.366c0,0.168-0.006,0.327-0.018,0.478 c-0.012,0.149-0.018,0.236-0.018,0.261h-6.336c0.012,0.288,0.08,0.555,0.207,0.801c0.125,0.246,0.287,0.459,0.486,0.639 c0.197,0.181,0.428,0.321,0.693,0.424c0.264,0.102,0.545,0.152,0.846,0.152c0.562,0,1.004-0.126,1.322-0.378 s0.549-0.576,0.693-0.972L179.716,169.752z M177.483,166.854c-0.012-0.217-0.057-0.43-0.135-0.64s-0.197-0.396-0.359-0.558 s-0.367-0.294-0.613-0.396c-0.246-0.102-0.537-0.152-0.873-0.152c-0.312,0-0.588,0.054-0.828,0.162 c-0.24,0.107-0.443,0.246-0.611,0.413c-0.168,0.169-0.297,0.354-0.387,0.559s-0.141,0.408-0.152,0.612H177.483z"></path><path class="st2" d="M181.679,175.782l2.088-4.608l-3.762-7.74h2.682l2.357,5.185l2.178-5.185h2.557l-5.562,12.349H181.679z"></path></g><rect class="st4" height="47.524" width="141" x="66.567" y="49.875"></rect><text class="st6 st7 st11 st12" id="js-avvo-rating" transform="matrix(1 0 0 1 72.0684 96.9355)" x="66.567">10.0</text><text class="st3 st10 st12" x="50%" y="134" style="font-size: 14px !important;">Diana Margeaux Thomas</text></g></svg></a><script type="text/javascript">(function(context) {if(context.Avvo) return;function alertContents(httpRequest) {if(httpRequest.readyState == 4) {if((httpRequest.status == 200) || (httpRequest.status == 0)) {var payload = JSON.parse(httpRequest.responseText);if(!payload.avvo_rating) { return; }document.getElementById("js-avvo-rating").textContent = payload.avvo_rating}}}function send_with_ajax(the_url) {var httpRequest = new XMLHttpRequest();httpRequest.onreadystatechange = function() {alertContents(httpRequest);};httpRequest.open("GET", the_url, true);httpRequest.send(null);}send_with_ajax("https://www.avvo.com/attorney-badges/v3/lawyers/avvo-rating/1822279");})(window);</script>
    </div>
    <div class="col-lg-4 avvo_cca">
        <a rel="me" target="_blank" href="https://www.avvo.com/attorneys/22102-va-diana-thomas-1822279.html"><svg class="avvo-badge" id="js-avvo-badge-client-choice-2017" style="enable-background:new 0 0 273.75 199.375; height: 120px; width: 155px;" version="1.1" viewbox="0 0 273.75 199.375" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px"><style type="text/css">@font-face{font-family:'Circular-Bold';src:url("https://assets.avvo.com/avvo-ui/0.20.5/fonts/avvo_ui/circular/circular_bold.woff") format("woff")}.avvo-badge .st0{fill:#153860 !important}.avvo-badge .st1{fill:#010101 !important}.avvo-badge .st2{fill:#15467A !important}.avvo-badge .st3{fill:#FFFFFF !important}.avvo-badge .st4{fill:none !important}.avvo-badge .st5{fill:#F89838 !important}.avvo-badge .st6{fill:#ED514C !important}.avvo-badge .st7{font-family:'Circular-Bold', Avenir Next, Avenir, Century Gothic, sans-serif !important;font-weight:bold !important}.avvo-badge .st8{font-size:20px !important}.avvo-badge .st9{letter-spacing:-1px !important}.avvo-badge .st10{font-family:'Circular-Bold', Avenir Next, Avenir, Century Gothic, sans-serif !important;font-size:14px}.avvo-badge .st11{font-size:65px !important}.avvo-badge .st12{text-anchor:middle !important}.avvo-badge .st13{fill:#969696 !important}.avvo-badge .st14{display:none !important}</style><g><g><g><polygon class="st0" points="81.928,159.03 0.749,159.03 19.764,141.741 0.749,124.233 81.928,124.233"></polygon><polygon class="st1" points="81.944,159.019 31.932,144.413 31.932,109.616 81.944,124.221"></polygon></g><g><polygon class="st2" points="191.967,159.03 273.146,159.03 254.132,141.741 273.146,124.233 191.967,124.233"></polygon><polygon class="st0" points="191.967,159.03 273.146,159.03 254.132,141.741 273.146,124.233 191.967,124.233"></polygon><polygon class="st1" points="191.951,159.019 241.962,144.413 241.962,109.616 191.951,124.221"></polygon></g></g><g><rect class="st3" height="191" width="169" x="52.448" y="4.201"></rect><path class="st2" d="M217.448,8.201v183h-161v-183H217.448 M225.448,0.201h-8h-161h-8v8v183v8h8h161h8v-8v-183V0.201 L225.448,0.201z"></path></g><rect class="st2" height="34.841" width="210.276" x="31.81" y="109.594"></rect><text class="st3 st10 st12" x="50%" y="133" style="font-size: 14px !important;">Diana Margeaux Thomas</text><g><g><g><path class="st5" d="M187.036,164.922c0-0.264,0.2-0.428,0.6-0.492l5.377-0.782l2.41-3.874c0.136-0.293,0.311-0.44,0.525-0.44 c0.214,0,0.389,0.147,0.525,0.44l2.41,3.874l5.377,0.782c0.4,0.064,0.6,0.228,0.6,0.492c0,0.158-0.093,0.329-0.278,0.515 l-3.888,3.792l0.921,5.356c0.007,0.05,0.01,0.122,0.01,0.214c0,0.149-0.038,0.276-0.112,0.38 c-0.075,0.103-0.184,0.156-0.327,0.156c-0.136,0-0.279-0.043-0.428-0.129l-4.809-2.527l-4.809,2.527 c-0.158,0.086-0.3,0.129-0.428,0.129c-0.15,0-0.263-0.053-0.337-0.156c-0.075-0.104-0.113-0.231-0.113-0.38 c0-0.043,0.007-0.115,0.022-0.214l0.921-5.356l-3.899-3.792C187.125,165.244,187.036,165.072,187.036,164.922z"></path></g></g><g><g><path class="st5" d="M157.536,164.922c0-0.264,0.2-0.428,0.6-0.492l5.377-0.782l2.41-3.874c0.136-0.293,0.311-0.44,0.525-0.44 c0.214,0,0.389,0.147,0.525,0.44l2.41,3.874l5.377,0.782c0.4,0.064,0.6,0.228,0.6,0.492c0,0.158-0.093,0.329-0.278,0.515 l-3.888,3.792l0.921,5.356c0.007,0.05,0.01,0.122,0.01,0.214c0,0.149-0.038,0.276-0.112,0.38 c-0.075,0.103-0.184,0.156-0.327,0.156c-0.136,0-0.279-0.043-0.428-0.129l-4.809-2.527l-4.809,2.527 c-0.158,0.086-0.3,0.129-0.428,0.129c-0.15,0-0.263-0.053-0.337-0.156c-0.075-0.104-0.113-0.231-0.113-0.38 c0-0.043,0.007-0.115,0.022-0.214l0.921-5.356l-3.899-3.792C157.625,165.244,157.536,165.072,157.536,164.922z"></path></g></g><g><g><path class="st5" d="M128.036,164.922c0-0.264,0.2-0.428,0.6-0.492l5.377-0.782l2.41-3.874c0.136-0.293,0.311-0.44,0.525-0.44 c0.214,0,0.389,0.147,0.525,0.44l2.41,3.874l5.377,0.782c0.4,0.064,0.6,0.228,0.6,0.492c0,0.158-0.093,0.329-0.278,0.515 l-3.888,3.792l0.921,5.356c0.007,0.05,0.01,0.122,0.01,0.214c0,0.149-0.038,0.276-0.112,0.38 c-0.075,0.103-0.184,0.156-0.327,0.156c-0.136,0-0.279-0.043-0.428-0.129l-4.809-2.527l-4.809,2.527 c-0.158,0.086-0.3,0.129-0.428,0.129c-0.15,0-0.263-0.053-0.337-0.156c-0.075-0.104-0.113-0.231-0.113-0.38 c0-0.043,0.007-0.115,0.022-0.214l0.921-5.356l-3.899-3.792C128.125,165.244,128.036,165.072,128.036,164.922z"></path></g></g><g><g><path class="st5" d="M98.536,164.922c0-0.264,0.2-0.428,0.6-0.492l5.377-0.782l2.41-3.874c0.136-0.293,0.311-0.44,0.525-0.44 c0.214,0,0.389,0.147,0.525,0.44l2.41,3.874l5.377,0.782c0.4,0.064,0.6,0.228,0.6,0.492c0,0.158-0.093,0.329-0.278,0.515 l-3.888,3.792l0.921,5.356c0.007,0.05,0.01,0.122,0.01,0.214c0,0.149-0.038,0.276-0.112,0.38 c-0.075,0.103-0.184,0.156-0.327,0.156c-0.136,0-0.279-0.043-0.428-0.129l-4.809-2.527l-4.809,2.527 c-0.158,0.086-0.3,0.129-0.428,0.129c-0.15,0-0.263-0.053-0.338-0.156c-0.075-0.104-0.113-0.231-0.113-0.38 c0-0.043,0.007-0.115,0.022-0.214l0.921-5.356l-3.899-3.792C98.625,165.244,98.536,165.072,98.536,164.922z"></path></g></g><g><g><path class="st5" d="M69.036,164.922c0-0.264,0.2-0.428,0.6-0.492l5.377-0.782l2.41-3.874c0.136-0.293,0.311-0.44,0.525-0.44 c0.214,0,0.389,0.147,0.525,0.44l2.41,3.874l5.377,0.782c0.4,0.064,0.6,0.228,0.6,0.492c0,0.158-0.093,0.329-0.278,0.515 l-3.888,3.792l0.921,5.356c0.007,0.05,0.01,0.122,0.01,0.214c0,0.149-0.038,0.276-0.112,0.38 c-0.075,0.103-0.184,0.156-0.327,0.156c-0.136,0-0.279-0.043-0.428-0.129l-4.809-2.527l-4.809,2.527 c-0.158,0.086-0.3,0.129-0.428,0.129c-0.15,0-0.263-0.053-0.338-0.156c-0.075-0.104-0.113-0.231-0.113-0.38 c0-0.043,0.007-0.115,0.022-0.214l0.921-5.356l-3.899-3.792C69.125,165.244,69.036,165.072,69.036,164.922z"></path></g></g></g><g><path class="st2" d="M157.565,34.975c3.209,0,5.847-2.572,5.847-5.803c0-3.253-2.638-5.825-5.847-5.825 c-3.231,0-5.868,2.572-5.868,5.825C151.696,32.403,154.334,34.975,157.565,34.975 M129.694,34.931 c5.122,0,9.034-6.33,9.298-11.408h-3.781c-0.418,3.275-1.472,5.605-2.858,6.77c-0.11,0.11-0.176,0.044-0.176-0.044l-0.505-6.726 h-3.715l0.989,10.837C128.991,34.799,129.342,34.931,129.694,34.931 M141.981,34.931c5.121,0,9.034-6.33,9.297-11.408h-3.78 c-0.418,3.275-1.473,5.605-2.858,6.77c-0.11,0.11-0.176,0.044-0.176-0.044l-0.505-6.726h-3.715l0.989,10.837 C141.278,34.799,141.629,34.931,141.981,34.931 M121.342,24.556c0.11-0.11,0.219-0.088,0.219,0.044l0.33,4.418h-4.265 C118.902,27.084,120.242,25.501,121.342,24.556 M157.543,31.634c-1.297,0-2.352-1.055-2.352-2.462 c0-1.407,1.056-2.484,2.352-2.484c1.297,0,2.374,1.077,2.374,2.484C159.917,30.579,158.84,31.634,157.543,31.634 M122.331,34.865 h4.088l-1.275-14.419c-0.044-0.593-0.484-0.769-1.231-0.682c-5.056,0.616-11.298,9.012-13.43,15.101h4.11 c0.33-0.879,0.725-1.758,1.165-2.594h6.374L122.331,34.865z"></path></g><text transform="matrix(1 0 0 1 65.8555 66.2344)"><tspan class="st6 st7 st8 st9 st12" x="71" y="0">Clients' Choice</tspan><tspan class="st6 st7 st8 st9 st12 js-avvo-badge-year" x="71" y="28">Award 2017</tspan></text></g></svg></a>        
    </div>
    <div class="col-lg-4 super_lawyers">
        <div id="super_lawyers_badge" style="margin:0; padding:0; line-height:1; font-size:1em; font:100 0.8em/1em 'Arial',sans-serif; position:relative; outline:none; border:none;">
            <div id="large_super_lawyers_badge" style="height:180px; width:200px; background-image:url('https://d22sy6g45ur8ee.cloudfront.net/shared/badge/lawyer/basic/large_gray-white.png'); text-align:center; outline:none; border:none; line-height:1; font-size:100%">
                <table width="200px" border="0" cellpadding="0" cellspacing="0" frame="void" rules="none" summary="" dir="ltr" style="margin: 0; padding:0; outline:none; border: none;">
                    <tr align="center" char="" charoff="" valign="bottom" style="height:85px; vertical-align:bottom; margin: 0; padding:0; outline:none; border: none;">
                        <td align="center" colspan="1" rowspan="1" valign="bottom" style="margin: 0; padding:0; outline:none; border: none;">
                            <a href="http://www.superlawyers.com/redir?r=http://profiles.superlawyers.com/virginia/mclean/lawyer/d-margeaux-thomas/f34a7533-1f53-4e00-85e8-7e2a791469a3.html&amp;c=gray-white&amp;i=f34a7533-1f53-4e00-85e8-7e2a791469a3" rel="nofollow" style="height:75px; width:150px; display:block; text-decoration:none; margin:0; padding:0; text-align:center; outline:none; border:none;">&#160;</a>
                        </td>
                    </tr>
                    <tr align="center" char="" charoff="" valign="middle" style="margin: 0; padding:0; line-height: 1; font-size: 100%; outline:none; border: none;">
                        <td style="height:0px; vertical-align:middle; margin: 0; padding:0 10px; line-height: 1; font-size: 100%; outline:none; border:none;" valign="middle" align="center" colspan="1" rowspan="1">
                            <a href="http://www.superlawyers.com/redir?r=http://profiles.superlawyers.com/virginia/mclean/lawyer/d-margeaux-thomas/f34a7533-1f53-4e00-85e8-7e2a791469a3.html&amp;c=gray-white&amp;i=f34a7533-1f53-4e00-85e8-7e2a791469a3" alt="View the profile of Virginia Business Litigation Attorney D. Margeaux Thomas" title="View the profile of Virginia Business Litigation Attorney D. Margeaux Thomas" style=" height:40px; width:150px; display:block; text-decoration:none; margin:0; padding:0; line-height:1; text-align:center; font-family:arial,sans-serif; color:rgb(102,102,102); font-size:18px; font-weight:bold; outline:none; border:none;">D. Margeaux Thomas</a>
                        </td>
                    </tr>
                    <tr align="center" char="" charoff="" valign="bottom" style="margin: 0; padding:0; line-height: 1; font-size: 100%; outline:none; border: none;">
                        <td style="height:53px; vertical-align:bottom; margin: 0; padding:0; line-height: 1; font-size: 100%; outline:none; border: none;" valign="bottom" align="center" colspan="1" rowspan="1">
                            <a href="http://www.superlawyers.com/redir?r=http://www.superlawyers.com/about/selection_process.html&amp;c=basic_large_gray-white_badge&amp;i=home_page" alt="Visit the official website of Super Lawyers" title="Visit the official website of Super Lawyers" style="height:33px; width:150px; display:block; text-decoration:none; margin:0; padding:0; line-height:1.3; font-size:14px; outline:none; border:none; color:rgb(255,255,255); text-transform:uppercase;">Selected in 2017<br/><span style="font-size:11px;">Thomson Reuters</span>&#160;</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<?php } elseif (is_category()) {
$cat = get_the_category();
?> 
<!--Slider END-->
<div class="">
    <div class="page_head page_head_bg inner_page">
        <header class="entry-header">
            <h1 class="t-title"><?php  echo $cat[0]->cat_name; ?></h1>
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                <?php if(function_exists('bcn_display')) {
                    bcn_display();
                }?>
            </div>
            <a href="javascript: history.go(-1)" class="prevarrow"> <img src="http://thomaslawplc.com/wp-content/themes/thomaslawplc/assets/images/back.png" alt=""> </a>
        </header>
    </div>
</div>

<?php } elseif (is_page_template( 'credit_repair_landing.php' )) {
?> 
<!--Slider END-->
<div class="row">
    <div class="page_head page_head_bg credit_repair_landing_page">
        <header class="entry-header">
            <div class="title_header">
                <h1 class="t-title">Don’t let credit errors get you down</h1>
                <p>You have options and rights. The attorneys at Thomas Law can help you fix your credit report.</p>
                <a href="" id="show_pop_ebook_header" class="popmake-e_book btn btn-primary btn-filled">CLAIM YOUR FREE GUIDE: HOW TO FIGHT BACK</a>
            </div>
        </header>
    </div>
</div>

<?php } elseif (is_page_template( 'military_landing.php' )) {
?> 
<!--Slider END-->
<div class="row">
    <div class="page_head page_head_bg military_landing_page">
        <header class="entry-header">
            <div class="title_header">
                <h1 class="t-title">Don’t Lose Your Career to a Bad Credit Report</h1>
                <p>Don’t let inaccurate and unfair credit reporting get you down. You have options and rights. The attorneys at Thomas Law can help you fix your credit report.</p>
                <a href="" id="show_pop_ebook_header" class="popmake-e_book btn btn-primary btn-filled">CLAIM YOUR FREE GUIDE: HOW TO FIGHT BACK</a>
            </div>
        </header>
    </div>
</div>
     
<?php } else { ?> 
<!--Slider END-->
<div class="">
    <div class="page_head page_head_bg inner_page">
        <header class="entry-header">
            <?php the_title( '<h1 class="t-title">', '</h1>' ); ?>
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                <?php if(function_exists('bcn_display')) {
                    bcn_display();
                }?>
            </div>
            <a href="javascript: history.go(-1)" class="prevarrow"> <img src="http://thomaslawplc.com/wp-content/themes/thomaslawplc/assets/images/back.png" alt=""> </a>
        </header>
    </div>
</div>
<?php } ?>