<?php
function linksTheme() {

wp_enqueue_style( 'basestyle', get_template_directory_uri(  ) .'/css/base.css', array(), 1.0 );
wp_enqueue_style( 'style', get_template_directory_uri(  ) .'/css/style.css', array(), 1.0 );

wp_enqueue_script('skiplink',  get_template_directory_uri(  ) . '/js/nav.js', array(), '1.0', true);

}
// for calling scripts or connecting with all pages 
add_action('wp_enqueue_scripts', 'linksTheme');
//for unable menus in WPbackoffice
register_nav_menu( 'principle', 'principle Menu' );
register_nav_menu( 'mentionLegal', 'Secondary menu' );
register_nav_menu( 'SocialMedia', 'Social media menu' );


//activate image at the side bar 
add_theme_support( 'post-thumbnails' );

// formating for images 
add_image_size( 'imgthumbnailActuality', 400, 260, true );
add_image_size( 'imgthumbnailStudent', 220, 220, true );
add_image_size( 'imgthumbnailFormation', 617, 260, true );
add_image_size( 'imgthumbnailAcutalitesLinked', 1088, 785, true );
add_image_size( 'imgthumbnailstudentLinked', 400, 400, true );
add_image_size( 'flashIcon', 22, 22, true );
add_image_size( 'socialIcon', 56, 56, true );

//for students CPT

function capitaine_register_post_types() {
	
    // CPT Portfolio
    $labels = array(
        'name' => __('Students'),
        'all_items' => 'LES ETUDIANTS ',  // affiché dans le sous menu
        'singular_name' => 'Students',
        'add_new_item' => 'add student ',
        'edit_item' => 'Modify the student',
        'menu_name' => 'Students'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail', 'excerpt' ),
        'menu_position' => 2, 
        'menu_icon' => 'dashicons-universal-access',
	);

	register_post_type( 'students', $args );
}
add_action( 'init', 'capitaine_register_post_types' ); // Le hook init lance la fonction

//for formation CPT
function custom_post_types(){
	
    // CPT Portfolio
    $labels = array(
        'name' => __('Formation'),
        'all_items' => 'LA FORMATION ',  // affiché dans le sous menu
        'singular_name' => 'Formation',
        'add_new_item' => 'add new formation ',
        'edit_item' => 'Modify the diploma',
        'menu_name' => 'Formation'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail', 'excerpt' ),
        'menu_position' => 2, 
        'menu_icon' => 'dashicons-welcome-learn-more',
	);

	register_post_type( 'formation', $args );
}
add_action( 'init', 'custom_post_types' ); // Le hook init lance la fonction


// to add options of ACF in archive for fetching fields
function formation_acf_pages() {
    if(function_exists('acf_add_options_page')) {
      acf_add_options_sub_page(array(
        'page_title'      => 'Formation Archive Settings', /* Use whatever title you want */
        
        'parent_slug'     => 'edit.php?post_type=formation', /* Change "services" to fit your situation */
        'capability' => 'manage_options'
      ));
    }
  }
  add_action('init', 'formation_acf_pages');

  function students() {
    if(function_exists('acf_add_options_page')) {
      acf_add_options_sub_page(array(
        'page_title'      => 'Students archive settings', /* Use whatever title you want */
        
        'parent_slug'     => 'edit.php?post_type=students', /* Change "services" to fit your situation */
        'capability' => 'manage_options'
      ));
    }
  }
  add_action('init', 'students');



  if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

// for adding images in social menu bar 
 
add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects( $items, $args ) {
	
	// loop
	foreach( $items as &$item ) {
		
		// vars
		$icon = get_field('image_social', $item);
		
		
		// append icon
		if( $icon ) {
			
			$item->title .= '<li class="menu-item">
           '.wp_get_attachment_image( $icon , 'socialIcon') .' 
          
            </li>';
			
		}
		
	}
	
	
	// return
	return $items;
	
}






