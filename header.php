<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.png" >

	
	
    
    <?php wp_head(); ?>
	
</head>
<body class="home">
<div class="wrapper">
    <header class="header">
        <strong class="main-logo">
            <a href="<?php get_home_url();?>">
            <?php 
                 $logo = get_field('option_header_logo', 'option');
                 $logo_white = get_field('option_white_logo', 'option');
                
                 if( !empty($logo) && !empty($logo_white)): ?>

                    <img class="white-logo" src="<?php echo $logo_white['sizes']['large']; ?>" alt="Logo">
                    <img class="gray-logo" src="<?php echo $logo['sizes']['large']; ?>" alt="Logo">

                <?php endif; ?>

            </a>
        </strong>
        <a href="javascript:void(0)" class="burger"></a>
        <nav class="main-nav">
            <div class="holder">
                <ul class="main-menu">
                    <li> 

                        <?php
                                    wp_nav_menu( array(
                                        'theme_location'    => 'main_menu',
                                        'container'         => 'div',
                                        'container_class'   => 'holder',
                                        'menu_class'        => 'main-menu',
                                        
                                        'depth'             => 0
                                        ) );
                                ?>	
                                  
                    </li>

                </ul>
                <div class="info">
                    <ul>
                        <li>
                            <a href="#">Support</a>
                        </li>
                        <li>
                            <a href="#">Customer Login</a>
                        </li>
                    </ul>
                    <a class="phone-link" href="tel:8552346493">
                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 16 16">
                            <path fill="#4c4c4c"
                                  d="M16 12.63a.77.77 0 0 1-.23.68l-2.27 2.23a1.12 1.12 0 0 1-.4.29 1.48 1.48 0 0 1-.48.15h-.32a8.51 8.51 0 0 1-1-.11 7.54 7.54 0 0 1-1.76-.54 14.46 14.46 0 0 1-2.37-1.3 18.43 18.43 0 0 1-2.81-2.37 18.76 18.76 0 0 1-2-2.24 16.64 16.64 0 0 1-1.26-2 11.86 11.86 0 0 1-.71-1.6 8.72 8.72 0 0 1-.32-1.27A4.07 4.07 0 0 1 0 3.71v-.34a1.48 1.48 0 0 1 .15-.48 1.38 1.38 0 0 1 .29-.4L2.71.24A.75.75 0 0 1 3.25 0a.59.59 0 0 1 .39.13 1.07 1.07 0 0 1 .29.31l1.81 3.44a.81.81 0 0 1 .09.59 1.09 1.09 0 0 1-.29.53l-.83.83a.36.36 0 0 0-.06.17.74.74 0 0 0 0 .12 2.86 2.86 0 0 0 .3.82 8.45 8.45 0 0 0 .63 1 10.82 10.82 0 0 0 1.2 1.35 11.1 11.1 0 0 0 1.36 1.21 6.43 6.43 0 0 0 1 .63 2.51 2.51 0 0 0 .61.25h.32l.11-.06 1-1a1.06 1.06 0 0 1 .72-.27.83.83 0 0 1 .45.11l3.27 1.93a.8.8 0 0 1 .38.54z"/>
                        </svg>
                        855-234-6493</a>
                </div>

                <?php 
                $link = get_field('option_button', 'option');
                     if($link):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        
                        ?>
                         <a href="<?php echo esc_url( $link_url ); ?>" class="button" data-text="<?php echo esc_html( $link_title ); ?>"><?php echo esc_html( $link_title ); ?></a>
                     <?php endif; ?>
            </div>
        </nav>
    </header>