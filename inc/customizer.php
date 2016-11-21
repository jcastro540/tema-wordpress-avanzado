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

		// Segunda imagen
		$wp_customize->add_setting('curso_slide2',array(
			'default'=> get_template_directory_uri().'/assets/img/slide2.jpg'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 
			'curso_slide2',
			array(
				'label'=> __('Segunda image', 'jac'),
				'section'=> 'curso_slide_section',
				'settings' => 'curso_slide2',
				'context'=> 'Mi context'
			)
		));

		// Tercera imagen
		$wp_customize->add_setting('curso_slide3',array(
			'default'=> get_template_directory_uri().'/assets/img/slide3.jpg'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 
			'curso_slide3',
			array(
				'label'=> __('Tercera image', 'jac'),
				'section'=> 'curso_slide_section',
				'settings' => 'curso_slide3',
				'context'=> 'Mi context'
			)
		));

		// CONTENIDO DEL SLIDER
		//primer Slide

		$wp_customize->add_setting('curso_texto_slide1',array(
			'default'=> 'Texto del primer Slide'
		));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 
			'curso_texto_slide1',
			array(
				'label'=> __('Texto del primer slide', 'jac'),
				'section'=> 'curso_slide_section',
				'settings' => 'curso_texto_slide1',
				'context'=> 'Mi context'
			)
		));
		//Enlace
		$wp_customize->add_setting('curso_enlace_slide1',array(
			'default'=> 'http://josecastro.com.ve'
		));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 
			'curso_enlace_slide1',
			array(
				'label'=> __('Enlace del primer boton', 'jac'),
				'section'=> 'curso_slide_section',
				'settings' => 'curso_enlace_slide1',
				'context'=> 'Mi context'
			)
		));

		//Segundo Slide
		$wp_customize->add_setting('curso_texto_slide2',array(
			'default'=> 'Texto del segundo Slide'
		));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 
			'curso_texto_slide2',
			array(
				'label'=> __('Texto del segundo slide', 'jac'),
				'section'=> 'curso_slide_section',
				'settings' => 'curso_texto_slide2',
				'context'=> 'Mi context'
			)
		));

		//Tercer Slide
		$wp_customize->add_setting('curso_texto_slide3',array(
			'default'=> 'Texto del tercer Slide'
		));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 
			'curso_texto_slide3',
			array(
				'label'=> __('Texto del tercer slide', 'jac'),
				'section'=> 'curso_slide_section',
				'settings' => 'curso_texto_slide3',
				'context'=> 'Mi context'
			)
		));

		// SECCION DE NOSOTROS
		$wp_customize->add_section('curso_landing_nosotros', array(
				'title' => __('Nosotros','jac'),
				'description' => 'Personalizar la sección de Nostros',
				'priority' => 46,
				'panel' => 'landing'
			));
			// PRIMER BLOQUE
		$wp_customize->add_setting('nosotros_img1',array(
			'default'=> 'http://placehold.it/480x480'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 
			'nosotros_img1',
			array(
				'label'=> __('Primera Imagen', 'jac'),
				'section'=> 'curso_landing_nosotros',
				'settings' => 'nosotros_img1',
				'context'=> 'Mi context'
			)
		));
		// titulo del primer bloque
		$wp_customize->add_setting('nosotros_titulo1',array(
			'default'=> 'Carlota'
		));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 
			'nosotros_titulo1',
			array(
				'label'=> __('Primer Titulo', 'jac'),
				'section'=> 'curso_landing_nosotros',
				'settings' => 'nosotros_titulo1',
				'context'=> 'Mi context'
			)
		));

		// parrafo del primer bloque
		$wp_customize->add_setting('nosotros_parrafo1',array(
			'default'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit beatae similique laborum doloribus, aliquid provident!'
		));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 
			'nosotros_parrafo1',
			array(
				'label'=> __('Primer Parrafo', 'jac'),
				'section'=> 'curso_landing_nosotros',
				'settings' => 'nosotros_parrafo1',
				'type'       => 'textarea',
				'context'=> 'Mi context'
			)
		));

		// primer icono del primer bloque
		$wp_customize->add_setting('nosotros_icono1',array(
			'default'=> 'fa-facebook'
		));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 
			'nosotros_icono1',
			array(
				'label'=> __('Primer icono', 'jac'),
				'section'=> 'curso_landing_nosotros',
				'settings' => 'nosotros_icono1',
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


