<?php 
	// Archivo para personalizar nuestro tema
	function curso_customize_register($wp_customize){
		// PANEL DE OPCIONES GENERALES
		$wp_customize->add_panel('general',array(
				'priority' => 10,
				'capability' => 'edit_theme_options',
				'title' => __('Opciones Generales', 'jac'),
				'description' => __('Sección para configurar las opciones generales del tema')
			));

		$wp_customize->add_section('curso_generales_section', array(
				'title' => __('Logo','jac'),
				'description' => 'Midificar el logo',
				'priority' => 42,
				'panel' => 'general'
			));

		// Valor por Defecto
		$wp_customize->add_setting('curso_logo', array(
				'default'=> get_template_directory_uri().'/assets/img/logo.png'
			));

		// CONTROL
		$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize,
			'curso_logo',
			array(
				'label' => __('Sube tu logo', 'jac'),
				'section' => 'curso_generales_section',
				'settings' => 'curso_logo',
				'context' => 'Mi context'
				)

			));
		// COLORES TITULOS
		$wp_customize->add_section('curso_generales_colores', array(
				'title' => __('Colores', 'jac'),
				'description' => 'Modificar los colores de las fuentes',
				'priority' => 43,
				'panel' => 'general'
			));

		$wp_customize->add_setting('curso_colores', array(
				'default' => '#2962ff',
				'transport' => 'refresh'
			));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'curso_colores',
			array(
				'label' =>__('Cambio de colores a los titulos' ,'jac'),
				'section' => 'curso_generales_colores',
				'settings' => 'curso_colores',
				'context' => 'Mi context'
				)
			));

		// COLORES DE ENLACES
		
		$wp_customize->add_setting('curso_colores_a', array(
				'default' => '#2962ff',
				'transport' => 'refresh'
			));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'curso_colores_a',
			array(
				'label' =>__('Cambio de colores a las a' ,'jac'),
				'section' => 'curso_generales_colores',
				'settings' => 'curso_colores_a',
				'context' => 'Mi context'
				)
			));

		// LANDING PAGE
		// CARRUSEL
		$wp_customize->add_panel('landing', array(
			'priority'=>11,
			'capability'=> 'edit_theme_options',
			'title'=> __('Personalización del landing', 'jac'),
			'description'=> __('Sección para personalizar el landing', 'jac')
		));

		$wp_customize->add_section('curso_slide_section',array(
			'title'=> __('Slider','jac'),
			'description' => 'Modificar las imagenes del slider',
			'priority' => 42,
			'panel'=>'landing'
		));
		// primera imagen
		$wp_customize->add_setting('curso_slide1',array(
			'default'=> get_template_directory_uri().'/assets/img/slide1.jpg'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 
			'curso_slide1',
			array(
					'label'=> __('Primera image', 'jac'),
					'section'=> 'curso_slide_section',
					'settings' => 'curso_slide1',
					'context'=> 'Mi context'
				)
			));





	}


	function customize_css(){
		?>
		<style type="text/css">
			h1,h2,h3,h4,h5,h6{
				color: <?php echo get_theme_mod("curso_colores");?>
			}
			a {
				color: <?php echo get_theme_mod("curso_colores_a");?>
			}

		</style>
		<?php
	}

	add_action('wp_head', 'customize_css');
	add_action('customize_register','curso_customize_register');
 ?>


