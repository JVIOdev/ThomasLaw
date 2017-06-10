<?php

/* Branding */
Redux::setSection( $opt_name , array(
        'icon'      => ' el-icon-smiley',
        'title'     => esc_html__( 'Branding', 'herald' ),
        'desc'     => esc_html__( 'Personalize theme by adding your own images', 'herald' ),
        'fields'    => array(

            array(
                'id'        => 'logo',
                'type'      => 'media',
                'url'       => true,
                'title'     => esc_html__( 'Logo', 'herald' ),
                'subtitle'      => esc_html__( 'Upload your logo image here, or leave empty to show the website title instead.', 'herald' ),
                'default'   => array( 'url' => esc_url( get_template_directory_uri().'/assets/images/logo-th.png' ) ),
            )
        ) )
);


/* Header */
Redux::setSection( $opt_name , array(
        'icon'      => 'el-icon-bookmark',
        'title'     => esc_html__( 'Header', 'herald' ),
        'fields'    => array(
)));




/* Top Bar */
Redux::setSection( $opt_name , array(
        'icon'      => '',
        'title'     => esc_html__( 'Top Bar', 'herald' ),
        'desc'     => esc_html__( 'Modify and style your header top bar', 'herald' ),
        'subsection' => true,
        'fields'    => array(           

            array(
                'id' => 'l_header',
                'type' => 'editor',
                'title' => esc_html__( 'Left text', 'herald' ),                
                'default' => '',
                'args'   => array(
                    'textarea_rows'    => 5,
                    'default_editor' => 'html'
                )
            ),

         array(
                'id' => 'c_header',
                'type' => 'editor',
                'title' => esc_html__( 'Center text', 'herald' ),
                'default' => '',
                'args'   => array(
                    'textarea_rows'    => 5,
                    'default_editor' => 'html'
                )
            ),

         array(
                'id' => 'r_header',
                'type' => 'editor',
                'title' => esc_html__( 'Right text', 'herald' ),
                'default' => '',
                'args'   => array(
                    'textarea_rows'    => 5,
                    'default_editor' => 'html'
                )
         ),

        ) )
);
/* Main header area */
Redux::setSection( $opt_name , array(
        'icon'      => '',
        'title'     => esc_html__( 'Main Area', 'herald' ),
        'desc'     => esc_html__( 'Modify and style your main header area', 'herald' ),
        'subsection' => true,
        'fields'    => array(

           

            array(
                'id' => 'b_header',
                'type' => 'editor',
                'title' => esc_html__( 'Right button link', 'herald' ),
                'default' => '',
                'args'   => array(
                    'textarea_rows'    => 5,
                    'default_editor' => 'html'
                )
         ),



        ) )
);

/* Homepage */
Redux::setSection( $opt_name , array(
        'icon'      => 'el-icon-home',
        'title'     => esc_html__( 'Homepage', 'herald' ),
        'fields'    => array(


        ) )
);
/* Homepage Slider */
Redux::setSection( $opt_name , array(
        'icon'      => '',
        'title'     => esc_html__( 'Slider', 'herald' ),
        'heading' => false,
        'subsection' => true,
        'fields'    => array(
            array(
                'id'        => 's_bg',
                'type'      => 'media',
                'url'       => true,
                'title'     => esc_html__( 'Slider Background', 'herald' ),
                'subtitle'      => esc_html__( 'Upload your image here', 'herald' ),
                'default'   => array( 'url' => esc_url( get_template_directory_uri().'/assets/images/hero-n2.jpg' ) ),
            ),

 array(
                'id' => 'slider_h1',
                'type' => 'text',
                'title' => esc_html__( 'Title', 'herald' ),
                'default' => ''
            ),
  array(
                'id' => 'slider_buttons',
                'type' => 'editor',
                'title' => esc_html__( 'Slider buttons', 'herald' ),
                'default' => '',
                'args'   => array(
                    'textarea_rows'    => 3,
                    'default_editor' => 'html'
                )
         ),
   array(
                'id' => 'slider_mgo',
                'type' => 'text',
                'title' => esc_html__( 'Text for Support box', 'herald' ),
                'default' => ''
            ),

            )));

/* Homepage Featured */
Redux::setSection( $opt_name , array(
        'icon'      => '',
        'title'     => esc_html__( 'Featured boxes', 'herald' ),
        'heading' => false,
        'subsection' => true,
        'fields'    => array(
             array(
                'id'        => 'f_icon1',
                'type'      => 'media',
                'url'       => true,
                'title'     => esc_html__( 'Icon for first block', 'herald' ),
                'subtitle'      => esc_html__( 'Upload your image here', 'herald' ),
                'default'   => array( 'url' => esc_url( get_template_directory_uri().'/assets/images/consumer-law-icon.png' ) ),
            ),
             array(
                'id' => 'f_title1',
                'type' => 'text',
                'title' => esc_html__( 'Title for first block', 'herald' ),
                'default' => ''
            ),

 array(
                'id' => 'f_text1',
                'type' => 'editor',
                'title' => esc_html__( 'Text for first block', 'herald' ),                
                'default' => '',
                'args'   => array(
                    'textarea_rows'    => 5,
                    'default_editor' => 'html'
                )
            ),

 array(
                'id' => 'f_link1',
                'type' => 'text',
                'title' => esc_html__( 'Link for first block', 'herald' ),
                'default' => ''
            ),

        array(
                'id'        => 'f_icon2',
                'type'      => 'media',
                'url'       => true,
                'title'     => esc_html__( 'Icon for second block', 'herald' ),
                'subtitle'      => esc_html__( 'Upload your image here', 'herald' ),
                'default'   => array( 'url' => esc_url( get_template_directory_uri().'/assets/images/civil-litigation-icon.png' ) ),
            ),
             array(
                'id' => 'f_title2',
                'type' => 'text',
                'title' => esc_html__( 'Title for second block', 'herald' ),
                'default' => ''
            ),

 array(
                'id' => 'f_text2',
                'type' => 'editor',
                'title' => esc_html__( 'Text for second block', 'herald' ),                
                'default' => '',
                'args'   => array(
                    'textarea_rows'    => 5,
                    'default_editor' => 'html'
                )
            ),

 array(
                'id' => 'f_link2',
                'type' => 'text',
                'title' => esc_html__( 'Link for second block', 'herald' ),
                'default' => ''
            ),

 array(
                'id'        => 'f_icon3',
                'type'      => 'media',
                'url'       => true,
                'title'     => esc_html__( 'Icon for third block', 'herald' ),
                'subtitle'      => esc_html__( 'Upload your image here', 'herald' ),
                'default'   => array( 'url' => esc_url( get_template_directory_uri().'/assets/images/business-law-icon.png' ) ),
            ),
             array(
                'id' => 'f_title3',
                'type' => 'text',
                'title' => esc_html__( 'Title for third block', 'herald' ),
                'default' => ''
            ),

 array(
                'id' => 'f_text3',
                'type' => 'editor',
                'title' => esc_html__( 'Text for third block', 'herald' ),                
                'default' => '',
                'args'   => array(
                    'textarea_rows'    => 5,
                    'default_editor' => 'html'
                )
            ),

 array(
                'id' => 'f_link3',
                'type' => 'text',
                'title' => esc_html__( 'Link for third block', 'herald' ),
                'default' => ''
            ),
            )));

/* Homepage Video */
Redux::setSection( $opt_name , array(
        'icon'      => '',
        'title'     => esc_html__( 'Video Section', 'herald' ),
        'heading' => false,
        'subsection' => true,
        'fields'    => array(
 array(
                'id'        => 'v_bg',
                'type'      => 'media',
                'url'       => true,
                'title'     => esc_html__( 'Video Background', 'herald' ),
                'subtitle'      => esc_html__( 'Upload your image here', 'herald' ),
                'default'   => array( 'url' => esc_url( get_template_directory_uri().'/assets/images/video-bg.jpg' ) ),
            ),
   array(
                'id' => 'v_link',
                'type' => 'text',
                'title' => esc_html__( 'Video link background', 'herald' ),
                'default' => ''
            ),
  array(
                'id' => 'video_link',
                'type' => 'text',
                'title' => esc_html__( 'Video link', 'herald' ),
                'default' => ''
            ),
            )));

/* Homepage Contact */
Redux::setSection( $opt_name , array(
        'icon'      => '',
        'title'     => esc_html__( 'Contact section', 'herald' ),
        'heading' => false,
        'subsection' => true,
        'fields'    => array(
             array(
                'id'        => 'co_icon1',
                'type'      => 'media',
                'url'       => true,
                'title'     => esc_html__( 'Icon for email', 'herald' ),
                'subtitle'      => esc_html__( 'Upload your image here', 'herald' ),
                'default'   => array( 'url' => esc_url( get_template_directory_uri().'/assets/images/email-icon.png' ) ),
            ),
 array(
                'id' => 'contact_email',
                'type' => 'text',
                'title' => esc_html__( 'Contact email', 'herald' ),
                'default' => ''
            ),
 array(
                'id'        => 'co_icon2',
                'type'      => 'media',
                'url'       => true,
                'title'     => esc_html__( 'Icon for phone', 'herald' ),
                'subtitle'      => esc_html__( 'Upload your image here', 'herald' ),
                'default'   => array( 'url' => esc_url( get_template_directory_uri().'/assets/images/phone-icon.png' ) ),
            ),
  array(
                'id' => 'contact_phone',
                'type' => 'text',
                'title' => esc_html__( 'Contact phone', 'herald' ),
                'default' => ''
            ),
  array(
                'id'        => 'co_icon3',
                'type'      => 'media',
                'url'       => true,
                'title'     => esc_html__( 'Icon for address', 'herald' ),
                'subtitle'      => esc_html__( 'Upload your image here', 'herald' ),
                'default'   => array( 'url' => esc_url( get_template_directory_uri().'/assets/images/address-icon.png' ) ),
            ),
   array(
                'id' => 'contact_address',
                'type' => 'text',
                'title' => esc_html__( 'Contact address', 'herald' ),
                'default' => ''
            ),

            )));

/* Single Post */
Redux::setSection( $opt_name , array(
        'icon'      => 'el-icon-pencil',
        'title'     => esc_html__( 'Single Post', 'herald' ),
        'heading' => false,
        'fields'    => array(


        ) )
);
/* Page */
Redux::setSection( $opt_name ,  array(
        'icon'      => 'el-icon-file-edit',
        'title'     => esc_html__( 'Page', 'herald' ),
        'desc'     => esc_html__( 'Manage default settings for your pages', 'herald' ),
        'fields'    => array(

           
        ) )
);

/* Categories */
Redux::setSection( $opt_name ,  array(
        'icon'      => 'el-icon-folder',
        'title'     => esc_html__( 'Category Template', 'herald' ),
        'desc'     => esc_html__( 'Manage settings for the category templates. Note: these are global category settings, you can optionally modify these settings for each individual category.', 'herald' ),
        'fields'    => array(

            
        ) )
);




/* Footer */

Redux::setSection( $opt_name , array(
        'icon'      => 'el-icon-bookmark-empty',
        'title'     => esc_html__( 'Footer', 'herald' ),
        'desc'     => esc_html__( 'Manage options for your footer area', 'herald' ),
        'fields'    => array(
             
             array(
                'id' => 'footer_c1',
                'type' => 'editor',
                'title' => esc_html__( 'Content 1', 'herald' ),                
                'default' => '',
                'args'   => array(
                    'textarea_rows'    => 5,
                    'default_editor' => 'html'
                )
            ),

          array(
                'id' => 'footer_c2',
                'type' => 'editor',
                'title' => esc_html__( 'Content 2', 'herald' ),                
                'default' => '',
                'args'   => array(
                    'textarea_rows'    => 5,
                    'default_editor' => 'html'
                )
            ),  

           array(
                'id' => 'footer_c3',
                'type' => 'editor',
                'title' => esc_html__( 'Content 3', 'herald' ),                
                'default' => '',
                'args'   => array(
                    'textarea_rows'    => 5,
                    'default_editor' => 'html'
                )
            ),

            array(
                'id' => 'footer_c4',
                'type' => 'editor',
                'title' => esc_html__( 'Content 4', 'herald' ),                
                'default' => '',
                'args'   => array(
                    'textarea_rows'    => 5,
                    'default_editor' => 'html'
                )
            ),

            array(
                'id' => 'footer_copyright',
                'type' => 'editor',
                'title' => esc_html__( 'Copyright', 'herald' ),
                'subtitle' => esc_html__( 'Specify the copyright text to show at the bottom of the website', 'herald' ),
                'default' =>  __( 'Copyright 2016 © The Thomas Law Office PLC | All Rights Reserved | Legal Disclaimer', 'herald' ),
                'args'   => array(
                    'textarea_rows'    => 3  ,
                    'default_editor' => 'html'                          )
            ),

           


        ) )
);
/* Additional code */

Redux::setSection( $opt_name, array(
        'icon'      => 'el-icon-css',
        'title' => esc_html__( 'Additional Code', 'herald' ),
        'desc' =>  esc_html__( 'Modify the default styling of the theme by adding custom CSS or JavaScript code. Note: These options are for advanced users only, so use it with caution.', 'herald' ),
        'fields' => array(


            array(
                'id'       => 'additional_css',
                'type'     => 'ace_editor',
                'title'    => esc_html__( 'Additional CSS', 'herald' ),
                'subtitle' => esc_html__( 'Use this field to add CSS code and modify the default theme styling', 'herald' ),
                'mode'     => 'css',
                'theme'    => 'monokai',
                'default'  => ''
            ),

            array(
                'id'       => 'additional_js',
                'type'     => 'ace_editor',
                'title'    => esc_html__( 'Additional JavaScript', 'herald' ),
                'subtitle' => esc_html__( 'Use this field to add JavaScript code', 'herald' ),
                'desc' => esc_html__( 'Note: Please use clean execution JavaScript code without "script" tags', 'herald' ),
                'mode'     => 'javascript',
                'theme'    => 'monokai',
                'default'  => ''
            ),

            array(
                'id'       => 'ga',
                'type'     => 'ace_editor',
                'title'    => esc_html__( 'Google Analytics tracking code', 'herald' ),
                'subtitle' => esc_html__( 'Paste your Google Analytics tracking code (or any other JavaScript related tracking code)', 'herald' ),
                'desc' => esc_html__( 'Note: Please use code with "script" tags included', 'herald' ),
                'mode'     => 'text',
                'theme'    => 'monokai',
                'default'  => ''
            )
        ) )
);

/* Misc. */
Redux::setSection( $opt_name , array(
        'icon'      => 'el-icon-wrench',
        'title'     => esc_html__( 'Other', 'bg' ),
        'desc'     => esc_html__( 'Other settings', 'bg' ),
        'fields'    => array(

         array(
                'id'          => 'facelink',
                'type'        => 'text',
                'title'       => __( 'Facebook link', 'bg' ),
                'placeholder' => 'https://facebook.com',
            ),
            array(
                'id'          => 'twilink',
                'type'        => 'text',
                'title'       => __( 'Twitter link', 'bg' ),
                'placeholder' => 'https://twitter.com',
            ),
            array(
                'id'          => 'yolink',
                'type'        => 'text',
                'title'       => __( 'Youtube link', 'bg' ),
                'placeholder' => 'https://youtube.com',
            ),
            array(
                'id'          => 'inlink',
                'type'        => 'text',
                'title'       => __( 'Linkedin link', 'bg' ),
                'placeholder' => 'https://linkedin.com',
            ),

            array(
                'id' => 'scroll_to_top',
                'type' => 'switch',
                'title' => esc_html__( 'Enable scroll to top button?', 'bg' ),
                'default' => false
            ),           

                        

        )
    )
);




?>
