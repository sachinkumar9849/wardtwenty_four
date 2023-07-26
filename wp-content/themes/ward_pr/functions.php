<?php register_nav_menus(
    array('primary-menu'=>'Top Menu')
)
?>
<?php
add_theme_support('post-thumbnails');



function creatework_posttype() {
  
    register_post_type( 'work',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'काम' ),
                'singular_name' => __( 'work' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'work'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'creatework_posttype' );


function createpublication_posttype() {
  
    register_post_type( 'publication',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'प्रकाशन' ),
                'singular_name' => __( 'publication' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'publication'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createpublication_posttype' );


function createteam_posttype() {
  
    register_post_type( 'team',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'टाेली' ),
                'singular_name' => __( 'team' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'team'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createteam_posttype' );



function createnews_posttype() {
  
    register_post_type( 'news',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'समाचार' ),
                'singular_name' => __( 'news' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'news'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createnews_posttype' );

function createnotice_posttype() {
  
    register_post_type( 'notice',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'सूचना' ),
                'singular_name' => __( 'notice' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'notice'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createnotice_posttype' );



function createtole_posttype() {
  
    register_post_type( 'tole',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'टोल' ),
                'singular_name' => __( 'tole' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'tole'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createtole_posttype' );



function creatediscover_posttype() {
  
    register_post_type( 'discover',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Discover' ),
                'singular_name' => __( 'discover' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'discover'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'creatediscover_posttype' );

function createtestimonial_posttype() {
  
    register_post_type( 'testimonial',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Testimonial' ),
                'singular_name' => __( 'testimonial' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'testimonial'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createtestimonial_posttype' );
?>