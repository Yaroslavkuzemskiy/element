<?php 
add_theme_support( 'post-thumbnails' ); // для всех типов постов  featured image
add_theme_support( 'title-tag' );  // добавляем title

add_action('wp_enqueue_scripts', 'my_styles');
   
function my_styles(){
wp_enqueue_style('main', get_stylesheet_directory_uri().'/assets/css/style.css');
            
wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', 'jquery', null, true);    
wp_enqueue_script('next', 'https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyD83vRYSa60_3o7eJdkuF2R3UsPCyfhm70', 'jquery', null, true); 
wp_enqueue_script('next', 'https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.2/lottie.min.js', 'jquery', null, true);                 
wp_enqueue_script('global', get_stylesheet_directory_uri().'/assets/js/global.js', 'jquery', null, true);

        }

//Options
require get_template_directory() . '/function/options.php';

//menu
require get_template_directory() . '/function/menu.php';

//Taxonomy Services
require get_template_directory() . '/function/taxonomy_services.php';

//Taxonomy Team
require get_template_directory() . '/function/tem.php';

//Taxonomy Data Centers
require get_template_directory() . '/function/data.php';



//Taxonomy Careers
require get_template_directory() . '/function/careers.php';

//Taxonomy Solution
require get_template_directory() . '/function/solution.php';


function get_author_full_name_by_id($author)
{
    $user_info = get_userdata($author);
    $nickname = $user_info->display_name;
    $full_name = $user_info->first_name . ' ' . $user_info->last_name;
    return $full_name ?: $nickname;
}