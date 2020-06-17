<?php 
function bishop_scripts() {
    wp_enqueue_style( 'bishop-slider', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css");
	wp_enqueue_style( 'bishop-style', get_stylesheet_uri());
	wp_style_add_data( 'bishop-style', 'rtl', 'replace' );

    
    wp_enqueue_script( 'bishop-jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js", array(), "", true );
    wp_enqueue_script( 'bishop-slider', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", array("bishop-jquery"), "", true );
	wp_enqueue_script( 'bishop-script', get_template_directory_uri() . '/js/script.js', array("bishop-slider"), "", true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bishop_scripts' );
?>

