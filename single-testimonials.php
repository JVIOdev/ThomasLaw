<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding:30px 0">
            <div class="test-q" style="width: 100%;display: inline-block;"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/test-q.png" alt=""></div>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( have_posts() ) :
        while ( have_posts() ) : the_post(); $companyname = esc_html( get_post_meta( get_the_ID(), 'companyname', true ) ); $possition = esc_html( get_post_meta( get_the_ID(), 'possition', true ) );?>        
        <h3 class="t-title"><?php the_title(); ?></h1>
            <p><?php echo $companyname?>, <?php echo $possition; ?></p>
            <blockquote><?php the_content(); ?></blockquote>    
</article><!-- #post-## -->
<?php endwhile; endif;  
    wp_reset_query(); ?>
</div>
    </div>
</div>

<?php get_footer(); ?>