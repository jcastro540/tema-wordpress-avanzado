<?php get_header(); ?>
	<section class="container mt40">
		<div class="row">
			<article class="col-md-10 col-md-offset-1">
				<h2>Los posts de: <?php the_author(); ?></h2>
				<?php if(get_the_author_meta()): ?>
					<div class="row">
						<article class="col-md-6">
							<?php echo get_avatar(get_the_author_meta('email'),$size='220') ?>
						</article>
						<article class="col-md-6">
							<?php get_the_author_meta('description') ?>
						</article>
					</div>
				<?php endif ?>
				<?php rewind_posts(); ?>

				<?php get_template_part('loop'); ?>
			</article>
		</div>
	
			  <!-- PAGINACION -->
  <?php if ($wp_query->max_num_pages >1): ?>
	<?php
	global $wp_query;

	$big = 999999999; // need an unlikely integer

		$args = array(
			'base'         => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format'       => '?page=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'end_size'     => 1,
			'mid_size'     => 2,
			'prev_next'    => True,
			'prev_text'    => __('« Anterior'),
			'next_text'    => __('Siguiente »'),
			'type'         => 'list',
			'add_args'     => False,
			'add_fragment' => '',
			'before_page_number' => '',
			'after_page_number' => ''
		);
	?>

	<div class="row">
		<article class="col-md-11 col-md-offset-1">
			<?php $paginacion = paginate_links( $args ); ?>
			<?php echo str_replace("<ul class='page-numbers'>",'<ul class="pagination">',$paginacion); ?>
		</article>
	</div>
	<?php endif ?>


	</section>


<?php get_footer(); ?>
