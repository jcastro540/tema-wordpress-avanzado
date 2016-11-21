<?php 
/*
Template Name: Front Page
*/
get_header();
?>

<section class="carrusel">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active" style="background-image: url(<?php echo get_theme_mod('curso_slide1');?>)">	      
	      <div class="carousel-caption">
	        <h1><?php echo get_theme_mod('curso_texto_slide1') ?></h1>
	        <a href="<?php echo get_theme_mod('curso_enlace_slide1') ?>" class="btn btn-info btn-lg" target="_blank">Comprar!!!</a>
	      </div>
	    </div>
	    <div class="item" style="background-image: url(<?php echo get_theme_mod('curso_slide2');?>)">
	      <img src="..." alt="...">
	      <div class="carousel-caption">
	        <h2><?php echo get_theme_mod('curso_texto_slide2') ?></h2>
	      </div>
	    </div>

	    <div class="item" style="background-image: url(<?php echo get_theme_mod('curso_slide3');?>)">
	      <img src="..." alt="...">
	      <div class="carousel-caption">
	        <h2><?php echo get_theme_mod('curso_texto_slide3') ?></h2>
	      </div>
	    </div>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</section>

<section class="container">
	<h2 class="about">Nosotros</h2>
	<hr class="header-line">
	<div class="clearfix"></div>
	
	<div class="row">
		<article class="col-md-4">
			<div class="img-nosotros" style="background-image: url(<?php echo get_theme_mod('nosotros_img1');?>);">
				<div class="social">
					<ul class="list-inline text-center social-net">
						<li>
							<a href="" class="btn btn-info btn-social">
								<i class="fa fa-2x fa-facebook"></i>
							</a>
						</li>
						<li>
							<a href="" class="btn btn-info btn-social">
								<i class="fa fa-2x fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="" class="btn btn-info btn-social">
								<i class="fa fa-2x fa-instagram"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<h3><?php echo get_theme_mod('nosotros_titulo1');?></h3>
			<p>Bio</p>
			<hr class="header-line">
			<div class="clearfix"></div>
			<p><?php echo get_theme_mod('nosotros_parrafo1');?></p>
			
		</article>
		<article class="col-md-4">
			<div class="img-nosotros" style="background-image: url(http://placehold.it/300x300);">
				<div class="social">
					<ul class="list-inline text-center social-net">
						<li>
							<a href="" class="btn btn-info btn-social">
								<i class="fa fa-2x <?php echo get_theme_mod('nosotros_icono1');?>"></i>
							</a>
						</li>
						<li>
							<a href="" class="btn btn-info btn-social">
								<i class="fa fa-2x fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="" class="btn btn-info btn-social">
								<i class="fa fa-2x fa-instagram"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<h3>Titulo</h3>
			<p>Bio</p>
			<hr class="header-line">
			<div class="clearfix"></div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et asperiores adipisci voluptas porro aperiam fugiat cupiditate deleniti explicabo eveniet possimus.</p>
		</article>
		<article class="col-md-4">
			<div class="img-nosotros" style="background-image: url(http://placehold.it/300x300);">
				<div class="social">
					<ul class="list-inline text-center social-net">
						<li>
							<a href="" class="btn btn-info btn-social">
								<i class="fa fa-2x fa-facebook"></i>
							</a>
						</li>
						<li>
							<a href="" class="btn btn-info btn-social">
								<i class="fa fa-2x fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="" class="btn btn-info btn-social">
								<i class="fa fa-2x fa-instagram"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<h3>Titulo</h3>
			<p>Bio</p>
			<hr class="header-line">
			<div class="clearfix"></div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et asperiores adipisci voluptas porro aperiam fugiat cupiditate deleniti explicabo eveniet possimus.</p>
		</article>
	</div>
</section>

<?php get_footer(); ?>