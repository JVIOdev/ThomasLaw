<?php get_header(); ?>
    <section id="featured-box">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="fitem">
                        <div class="ficon"><img src="<?php echo tl_get_option('f_icon1'); ?>" alt=""></div>
                        <div class="ftitle"><?php echo tl_get_option('f_title1'); ?></div>
                        <div class="fdesc"><p><?php echo tl_get_option('f_text1'); ?></p>
                        <a href="<?php echo tl_get_option('f_link1'); ?>"><i class="fa fa-search"></i>Learn more</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="fitem">
                        <div class="ficon"><img src="<?php echo tl_get_option('f_icon2'); ?>" alt=""></div>
                        <div class="ftitle"><?php echo tl_get_option('f_title2'); ?></div>
                        <div class="fdesc"><p><?php echo tl_get_option('f_text2'); ?></p>
                        <a href="<?php echo tl_get_option('f_link2'); ?>"><i class="fa fa-search"></i>Learn more</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="fitem">
                        <div class="ficon"><img src="<?php echo tl_get_option('f_icon3'); ?>" alt=""></div>
                        <div class="ftitle"><?php echo tl_get_option('f_title3'); ?></div>
                        <div class="fdesc"><p><?php echo tl_get_option('f_text3'); ?></p>
                        <a href="<?php echo tl_get_option('f_link3'); ?>"><i class="fa fa-search"></i>Learn more</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <section class="hero-slider">
        <ul class="slides">
            <li class="overlay hover-background">
                <!--<div class="background-image-holder">-->
                <div class="blue_bg">                    
                    <!--<img class="background-image" alt="" src="<?php echo tl_get_option('s_bg'); ?>" />-->
                </div>
                <div class="container align-vertical hero-text">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 alignncenter" id="hero-txt">
                            <h1 class="text-white"><?php echo tl_get_option('slider_h1'); ?></h1>
                            <?php echo tl_get_option('slider_buttons'); ?>
                        </div>
                    </div>
                </div>
                <!--end of container-->
            </li>
            <!--end of individual slide-->
        </ul>
    </section>
    <section id="counsellors-box">
        <div class="container">
            <div class="row">
                <h1 class="t-title">The Counsellors</h1>
                    <?php echo do_shortcode('[ourteam col="3" show="2" excerptlength="25"]'); ?>
            </div>
        </div>
    </section>
    <section id="testimonials-box">
        <div class="container">
            <div class="row">
                <h1 class="t-title">Testimonials</h1>
                <div class="col-md-12">
                    <div class="test-q"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/test-q.png" alt=""></div>
                    <?php echo do_shortcode('[testimonials-rotator]'); ?>
                </div>
            </div>
        </div>
    </section>
    <section id="contact-box">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
        <div class="container">
            <div class="row">
                <h1 class="t-title">How Can We Help You?</h1>
                <div class="contact-f">
                    <div class="col-md-6 col-sm-6">
                        <div class="icon-box"><img src="<?php echo tl_get_option('co_icon1'); ?>" alt=""></div>
                        <p><a href="mailto:<?php echo tl_get_option('contact_email'); ?>"><?php echo tl_get_option('contact_email'); ?></a></p>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="icon-box"><img src="<?php echo tl_get_option('co_icon2'); ?>" alt=""></div>
                        <p><?php echo tl_get_option('contact_phone'); ?></p>
                    </div>
                    <!--<div class="col-md-4 col-sm-4">
                        <div class="icon-box"><img src="<?php echo tl_get_option('co_icon3'); ?>" alt=""></div>
                        <p><?php echo tl_get_option('contact_address'); ?></p>
                    </div>-->
                </div>
                <div class="contact-s">
                    <?php echo do_shortcode('[contact-form-7 id="257" title="Contact"]'); ?>                   
                </div>
            </div>
        </div>
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
    </section>
    <script type='text/javascript' src="/wp-content/themes/thomaslawplc/js/map_plugin.js"></script>
    <?php get_footer();