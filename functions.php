 <?php
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_style( 'style-boot', get_template_directory_uri() . '/assest/css/bootstrap.min.css' );
    wp_enqueue_script( 'script-name', get_template_directory_uri() . 'assest/js/bootstrap.bundle.min.js', array(), '1.0.0', true );

    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'nav menu'=>'tm',
        'footer menu'=> 'Footer Bar',
    ));
    register_sidebar( array(
		'name'          => 'topleft' ,
		'id'            => 'topleft',
		'after_widget'  => '',
		'before_widget'  => '',
		
	) );
    register_sidebar( array(
		'name'          => 'topright' ,
		'id'            => 'topright',
		'after_widget'  => '',
		'before_widget'  => '',
		
	) );
    register_sidebar( array(
		'name'          => 'topright1' ,
		'id'            => 'topright1',
		'after_widget'  => '',
		'before_widget'  => '',
		
	) );
    register_sidebar( array(
		'name'          => 'sarc' ,
		'id'            => 'sarc',
		'after_widget'  => '',
		'before_widget'  => '',
		
	) );
    register_sidebar( array(
		'name'          => 'baner' ,
		'id'            => 'baner',
		'after_widget'  => '',
		'before_widget'  => '',
		
	) );
    register_sidebar( array(
		'name'          => 'list1' ,
		'id'            => 'list1',
		'after_widget'  => '',
		'before_widget'  => '',
		
	) );
    register_sidebar( array(
		'name'          => 'img1' ,
		'id'            => 'img1',
		'after_widget'  => '',
		'before_widget'  => '',
		
	) );
    register_sidebar( array(
		'name'          => 'img5' ,
		'id'            => 'img5',
		'after_widget'  => '',
		'before_widget'  => '',
		
	) );
    register_sidebar( array(
		'name'          => 'img6' ,
		'id'            => 'img6',
		'after_widget'  => '',
		'before_widget'  => '',
		
	) );
    register_sidebar( array(
		'name'          => 'sarc2' ,
		'id'            => 'sarc2',
		'after_widget'  => '',
		'before_widget'  => '',
		
	) );
    register_sidebar( array(
		'name'          => 'vidoe' ,
		'id'            => 'vidoe',
		'after_widget'  => '',
		'before_widget'  => '',
		
	) );

 ?>