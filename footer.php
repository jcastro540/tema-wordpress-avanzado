	<?php wp_footer(); ?>
	<footer>
		<section class="container">
			<hr>
			<div class="row">
				<article class="col-md-6">
					<?php 
						$menuFooter = array(
							'theme_location' => 'footer-menu',
							'menu_id' => 'menu-footer',
							'menu_class'=> 'list-inline',
							'depth' => 2 
						);
					 ?>
					<?php wp_nav_menu($menuFooter); ?>
				</article>
				<article class="col-md-6">
					<ul class="list-inline text-right">
						<li>
							<a href="">
								<span class="fa-stack fa-lg">
								  <i class="fa fa-square-o fa-stack-2x"></i>
								  <i class="fa <?php echo get_theme_mod('nosotros_icono1');?> fa-stack-1x"></i>
								</span>
							</a>
						</li>
						<li>
							<a href="">
								<span class="fa-stack fa-lg">
								  <i class="fa fa-square-o fa-stack-2x"></i>
								  <i class="fa fa-twitter fa-stack-1x"></i>
								</span>
							</a>
						</li>
						<li>
							<a href="">
								<span class="fa-stack fa-lg">
								  <i class="fa fa-square-o fa-stack-2x"></i>
								  <i class="fa fa-instagram fa-stack-1x"></i>
								</span>
							</a>
						</li>
					</ul>
				</article>
			</div>
		</section>
	</footer>

</body>
</html>