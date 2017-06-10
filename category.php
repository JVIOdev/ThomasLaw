<?php
get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!--<header class="entry-header"><h1 class="t-title"><?php echo single_cat_title( '', false ); ?></h1></header>-->
<div class="entry-content">
<?php if (have_posts()) : ?>   <?php while (have_posts()) : the_post(); ?>
                      <div class="news-post article-post">
          <?php if(has_post_thumbnail()){?>
          <div class="post-gallery thumb hide-thumb">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'home-middle' ); ?></a></div><?php } else { echo''; } ?>
            
    <div class="post-content <?php if(has_post_thumbnail()) : ?>post-space<?php endif; ?>">
        <h2 class="ftitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="post-tags">
            <?php echo get_the_date('j F Y'); ?>                                                
        </div>
        <p><?php echo get_the_excerpt(); ?></p>
        <div class="alignncenter"><a href="<?php the_permalink(); ?>" class="catlink"><i class="fa fa-search"></i>Read more</a></div>
    </div>
    </div>
                
<?php endwhile; ?>
               <?php else : ?>
            <div class="col-md-6"><h4>Sorry, this page is empty!</h4></div>            
<?php endif; ?>              
                

                    
            
<?php if (function_exists("emm_paginate")) {
                emm_paginate();
            } ?>

                </div></div>
                    
            </div></div>
            
            

<?php
get_footer(); ?>