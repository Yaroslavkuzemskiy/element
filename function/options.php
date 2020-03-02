<?php 
add_action('acf/init', 'register_acf_options_pages');	
	function register_acf_options_pages() {
    // Check function exists.
    if( !function_exists('acf_add_options_page') )
        return;
    // register options page.
    $option_page = acf_add_options_page(array(
        'page_title'    => ' General Settings',
        'menu_title'    => ' Options',
        
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
	
}
