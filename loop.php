<div id="timeline">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php if(is_single()): ?>
        <h4><?php the_date(); ?></h4>
      <?php endif ?>
      <div class="row"  > 
        <article class="col-sm-12 publication-item">
          <div class="">
            <!-- <?php the_post_thumbnail('large', array(
                'class'=> 'img-responsive'
            )) ?> -->
            
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            
            <a href='<?php the_permalink();?>'>
            
              <div class="header-post" style="background-image: url(<?php echo $url ?>)">          
                <article class="post-title">
                  <h2 class="text-center"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                </article>
              </div>
            </a>

            
            
            <p>
              <?php the_excerpt(); ?>
            </p>

          </div>
        </article>
      </div>

  <?php endwhile; else: ?>
    <p>
    <?php _e('Lo sentimos no hay contenido relacionado a su busqueda.'); ?>
    </p>
  <?php endif; ?>
  
</div>

