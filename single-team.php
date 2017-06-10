<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header"><?php $designation = esc_html( get_post_meta( get_the_ID(), 'designation', true ) );?>
        <div class="team-ava"><?php
                                    if ( has_post_thumbnail() ) {
                                    ?><?php the_post_thumbnail('full'); ?>
                                    <?php }else{ ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/team_thumb.jpg" />
                                    <?php } ?></div>
        <h1 class="t-title"><?php the_title(); ?><span><?php echo $designation; ?></span></h1>
         <?php
        if ( 'post' === get_post_type() ) : ?>
        <div class="entry-meta"> 
            <?php thomaslawplc_posted_on(); ?>
        </div><!-- .entry-meta -->
        <?php
        endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content team-content">
        
                                    <?php the_content(); ?>
    </div><!-- .entry-content -->
    
</article><!-- #post-## -->
</div>
    </div>
</div>

<?php get_footer(); ?>