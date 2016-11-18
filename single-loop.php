<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php if(is_single()): ?>
      <!-- <h4><?php the_date(); ?></h4> -->
    <?php endif ?>

    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>       
  
    <div class="header-post subir" style="background-image: url(<?php echo $url ?>)">          
      <article class="post-title">
        <h2 class="text-center"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
      </article>
    </div>


  <section class="container">
    <div class="row">
      <article class="col-md-8 col-md-offset-2">
        <!-- <?php the_post_thumbnail('large', array(
            'class'=> 'img-responsive'
        )) ?> -->
                
        <p>
          <?php the_content(); ?>
        </p>

      </article>
    </div>
  </section>
    

<?php endwhile; else: ?>
  <p>
  <?php _e('Lo sentimos no hay contenido relacionado a su busqueda.'); ?>
  </p>
<?php endif; ?>